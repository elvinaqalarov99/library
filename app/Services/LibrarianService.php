<?php

namespace App\Services;

use App\Interfaces\LibrarianRepositoryInterface;

class LibrarianService
{
    protected LibrarianRepositoryInterface $librarianRepository;

    public function __construct(LibrarianRepositoryInterface $librarianRepository)
    {
        $this->librarianRepository = $librarianRepository;
    }

    public function librarianWithTheMostIssuedBooksMonthly(): array
    {
        $librarian = $this->librarianRepository->instance(); // librarian instance to initially compare with

        foreach ($this->librarianRepository->withCount('issuedBooks')->allLibrariansWithMonthlyIssuedBook() as $_librarian) {
            if($_librarian->issued_books_count > $librarian->issued_books_count) {
                $librarian = $_librarian;
            }
        }

        return ['librarian' => $librarian, 'status' => 200];
    }
}
