@extends('layouts.appLayout')

@section('title', 'Dashboard')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">RMR Electronics</a>

            <div class="d-flex">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <h1>Welcome to the Dashboard</h1>
        <!-- Add dashboard content here -->
        <!-- Navbar logout -->
    </div>
@endsection
