<?php

namespace App\Http\Controllers\Api;

use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function borrowBook(Request $request, $librarianId, $bookItemId): JsonResponse
    {
        try {
            $result = $this->userService->borrowBook($request, $librarianId, $bookItemId);
        } catch (\Exception $e) {
            $result = [
              'status' => 500,
              'error' => $e->getMessage()
            ];
        }

        return $this->jsonResponse($result, $result['status']);
    }
}
