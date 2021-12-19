<?php

namespace App\Services;

use App\Interfaces\BookItemRepositoryInterface;
use App\Interfaces\LibrarianRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserService
{
    protected UserRepositoryInterface $userRepository;
    protected LibrarianRepositoryInterface $librarianRepository;
    protected BookItemRepositoryInterface $bookItemRepository;

    public function __construct(
        UserRepositoryInterface $userRepository,
        LibrarianRepositoryInterface $librarianRepository,
        BookItemRepositoryInterface $bookItemRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->librarianRepository = $librarianRepository;
        $this->bookItemRepository = $bookItemRepository;
    }

    public function borrowBook(Request $request, $librarianId, $bookItemId): array
    {
        $librarianWorkingDays = explode(',', $this->librarianRepository->find($librarianId)->working_days);

        if (!in_array(date('N'), $librarianWorkingDays)) {
            return ['error' => 'This librarian is not working this day!', 'status' => 500];
        }

        if($this->bookItemRepository->find($bookItemId)->borrowed) {
            return ['error' => 'Book is already borrowed!', 'status' => 500];
        }

        $data = $request->only(['issue_date', 'return_date', 'status']); // add status to request to simulate not returned books with expired date
        $data['librarian_id'] = $librarianId;

        $validator = \Validator::make($data, [
            'issue_date' => 'required|date',
            'return_date' => 'required|date',
            'status' => 'nullable|boolean',
            'librarian_id' => 'integer|min:1'
        ]);

        if($validator->fails()) {
            return ['error' => 'Invalid data provided!', 'status' => 500];
        }

        $user = $this->userRepository->with('bookLendings')->find($request->bearerToken());

        if(count($user->expiredLendings()) > 0) {
            return ['error' => 'Please return expired issued books before getting new ones!', 'status' => 500];
        }

        $this->bookItemRepository->update($bookItemId, ['borrowed' => true]); // take out the book from the rack
        return $this->userRepository->borrowBook($data, $bookItemId);
    }
}
