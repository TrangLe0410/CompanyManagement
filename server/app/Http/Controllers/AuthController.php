<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest\LoginRequest;
use App\Http\Requests\AuthRequest\RegisterRequest;
use App\Repositories\AuthRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login(LoginRequest $loginRequest)
    {
        try {
            $credentials = $loginRequest->validated();
            $result = $this->authRepository->login($credentials);

            if (!$result['success']) {
                return response()->json([
                    'success' => false,
                    'message' => $result['message']
                ], 401);
            }

            $refreshToken = $this->authRepository->createRefreshToken(auth('api')->user());

            return response()->json([
                'data' => $result
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred',
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    public function register(RegisterRequest $request)
    {
    $validated = $request->validated();

    try {
        // Gọi phương thức register từ repository
        $result = $this->authRepository->register($validated);

        // Kiểm tra nếu kết quả trả về có success là false (lỗi)
        if (!$result['success']) {
            return response()->json([
                'success' => false,
                'message' => $result['message']
            ], 400); // Trả về lỗi với mã HTTP 400 (Bad Request)
        }

        return response()->json([
            'data' => $result
        ], 200);
    } catch (\Throwable $th) {
        return response()->json([
            'success' => false,
            'message' => 'An unexpected error occurred',
            'error' => $th->getMessage(),
        ], 500); 
    }
    }


    public function refresh()
    {
        $refreshToken = request()->refresh_token;

        $result = $this->authRepository->refresh($refreshToken);

        if (isset($result['error'])) {
            return response()->json(['error' => $result['error']], 500);
        }

        $refreshToken = $this->authRepository->createRefreshToken(auth('api')->user());
        return response()->json($this->authRepository->respondWithToken($result['token'], $refreshToken));
    }
}