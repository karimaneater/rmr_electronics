<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    /**
     * Attempt to log in a user.
     *
     * @param array $credentials ['email' => ..., 'password' => ...]
     * @return User|null
     */
    public function login(array $credentials)
    {
        // Find user by email
        $user = User::where('email', $credentials['email'])->first();

        // Check if user exists and password is correct
        if ($user && Hash::check($credentials['password'], $user->password)) {
            return $user; // login successful
        }

        return null; // login failed
    }
}
