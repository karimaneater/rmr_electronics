@extends('layouts.authLayout')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 360px;">

        <h4 class="text-center mb-4">Login</h4>

        <form method="POST" action="{{ route('login.store') }}" novalidate>
            @csrf
            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="Enter email"
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

            <!-- Login + Registered Link -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="{{ route('register') }}" class="text-decoration-none">Don't have an account?</a>
                <button type="submit" class="btn btn-primary px-4">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
