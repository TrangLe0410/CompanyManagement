<?php
namespace App\Repositories;

use App\Models\Member;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthRepository
{
    public function login($credentials)
    {
        $user = Member::where('email', $credentials['email'])->first();

        if (!$user) {
            return [
                'success' => false,
                'message' => 'Email does not exist in the system'
            ];
        }

        if (!$token = JWTAuth::attempt($credentials)) {
            return [
                'success' => false,
                'message' => 'Password incorrect'
            ];
        }

        return [
            'message' => 'Login successful',
            'success' => true,
            'token' => $token,
            'user' => $user,
        ];
    }

    public function register($data)
    {
        $existingUser = Member::where('email', $data['email'])->first();
        if ($existingUser) {
            return [
                'success' => false,
                'message' => 'Email already exists'
            ];
        }
        
        $user = Member::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'user'
        ]);

        $credentials = ['email' => $data['email'], 'password' => $data['password']];
        $token = JWTAuth::attempt($credentials);

        if (!$token) {
            return [
                'success' => false,
                'message' => 'Unable to generate token'
            ];
        }

        return [
            'message' => "Register successful",
            'success' => true,
            'user' => $user,
            'token' => $token
        ];
    }

    public function refresh($refreshToken)
    {
        try {
            $decoded = JWTAuth::getJWTProvider()->decode($refreshToken);
            $user = Member::find($decoded['user_id']);

            if (!$user) {
                return ['error' => 'User not found'];
            }

            JWTAuth::invalidate();
            $token = JWTAuth::login($user);
            return ['token' => $token];
        } catch (JWTException $exception) {
            return ['error' => 'Refresh Token Invalid'];
        }
    }

    public function createRefreshToken($user)
    {
        $data = [
            'user_id' => $user->id,
            'random' => rand() . time(),
            'exp' => time() + config('jwt.refresh_ttl'),
        ];
        return JWTAuth::getJWTProvider()->encode($data);
    }

    public function respondWithToken($token, $refreshToken)
    {
        /** @var \Tymon\JWTAuth\JWTGuard $authGuard */
        $authGuard = auth('api');
        return [
            'access_token' => $token,
            'refresh_token' => $refreshToken,
            'token_type' => 'bearer',
            'expires_in' => $authGuard->factory()->getTTL() * 60,
        ];
    }

    
}