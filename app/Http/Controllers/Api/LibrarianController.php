<?php

namespace App\Http\Controllers\Api;

use App\Services\LibrarianService;
use Illuminate\Http\JsonResponse;

class LibrarianController extends BaseController
{
    protected LibrarianService $librarianService;

    public function __construct(LibrarianService $librarianService)
    {
        $this->librarianService = $librarianService;
    }

    public function librarianWithTheMostIssuedBooksMonthly(): JsonResponse
    {
        try {
            $result = $this->librarianService->librarianWithTheMostIssuedBooksMonthly();
        } catch (\Exception $e) {
            $result = [
              'status' => 500,
              'error' => $e->getMessage()
            ];
        }

        return $this->jsonResponse($result, $result['status']);
    }
}
