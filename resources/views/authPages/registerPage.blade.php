@extends('layouts.authLayout')

@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 360px;">

        <h4 class="text-center mb-4">Register</h4>

        <form method="POST" action="{{ route('register.store') }}" novalidate>
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       placeholder="Enter your name"
                       value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email"
                       class="form-control @error('email') is-invalid @enderror"
                       placeholder="Enter your email"
                       value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       placeholder="Enter password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation"
                       class="form-control @error('password_confirmation') is-invalid @enderror"
                       placeholder="Confirm password" required>
                @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Register Button + Login Link -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="{{ route('login') }}" class="text-decoration-none">Already have an account?</a>
                <button type="submit" class="btn btn-primary px-4">Register</button>
            </div>
        </form>
    </div>
</div>

@endsection
