@extends('layouts.master')

@section('title', '404 - Passion')

@section('content')
<main class="main">
    <div class="container container-lg">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="error-wrapper py-60">
                    <h1 class="text-heading-one mb-16">404</h1>
                    <h2 class="text-heading-three mb-16">Oopps! Page Not Found</h2>
                    <p class="text-md text-body mb-32">The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection