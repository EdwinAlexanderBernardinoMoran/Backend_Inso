<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $user = $request->user();
        $token = JWTAuth::fromUSer($user);

        return $this->respondWithToken($token);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {

        $this->validate($request, [
            'token' => 'required'
        ]);

        try {
            JWTAuth::invalidate($request->token);

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return response()->json([
                'message' => 'logout Success!'
            ], 200);
        } catch (JWTException $exception) {
            return response()->json([
                'status' => 'unknown_Error',
                'message' => 'user could not log out'
            ],500);
        }
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'message' => 'User login!',
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ]);
    }
}
