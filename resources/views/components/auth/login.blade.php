@extends('layouts.master')

@section('title', 'Login')

@push('styles')
<style>
    body { 
        background: #f9f9f9; 
    }

    .form-control {
        color: #b3abab !important;
        font-size: 0.95rem;
        background-color: #fff;
    }

    .form-control::placeholder {
        color: #b3abab !important;
        font-size: 0.9rem;
    }

    input[type="email"].form-control,
    input[type="password"].form-control {
        border: 0;
        border-bottom: 1px solid #dee2e6;
        border-radius: 0;
        box-shadow: none;
    }

    .btn-outline-secondary {
        background: #db2727; 
        border: 1px solid #ddd; 
        font-weight: 500; 
    }

    .btn-outline-secondary:hover {
        background: #e40c0c; 
    }
</style>
@endpush

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 py-2">
    <div class="card shadow-sm border-0 p-4" style="max-width: 520px; width: 100%; border-radius: 12px;">
        <!-- Heading -->
        <div class="text-center mb-4">
            <h3 class="fw-bold">Sign in</h3>
            <p class="text-muted mb-0">Login to continue</p>
        </div>

        <!-- Login Form -->
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" class="form-control border-0 border-bottom rounded-0 shadow-none"
                    name="email" placeholder="Email" required>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control border-0 border-bottom rounded-0 shadow-none"
                    name="password" placeholder="Password" required>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label small" for="remember">Remember me</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <!-- Divider -->
        <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1">
            <span class="mx-2 small text-muted">ACCESS QUICKLY</span>
            <hr class="flex-grow-1">
        </div>

        <!-- Social Login -->
        <div class="d-flex justify-content-between">
            <a href="{{ url('/auth/google') }}" class="btn btn-outline-secondary w-100 me-2 text-white">Google</a>
        </div>

        <!-- Footer -->
        <div class="text-center mt-4">
            <small class="text-muted">Don't have an account? 
                <a href="{{ route('register') }}" class="text-decoration-none">Sign up</a>
            </small>
        </div>
    </div>
</div>
@endsection