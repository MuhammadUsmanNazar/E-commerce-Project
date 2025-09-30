@extends('layouts.master')

@section('title', 'Sign Up')

@push('styles')
<style>
    body 
    { 
        background: #f9f9f9; 
    }
    /* Apply same text color everywhere */
    .form-control,
    .form-select {
        color: #b3abab !important;
        font-size: 0.95rem;
        background-color: #fff;
    }

    /* Placeholder bhi same color */
    .form-control::placeholder {
        color: #b3abab !important;
        font-size: 0.9rem;
    }

    /* Select dropdown options ka text */
    select.form-control option {
        color: #b3abab !important;
    }

    /* Date input ke liye fix */
    input[type="date"].form-control {
        color: #b3abab !important;
    }

    .btn-outline-secondary 
    { 
        background: #db2727; 
        border: 1px solid #ddd; 
        font-weight: 500; 
    } 

    .btn-outline-secondary:hover 
    { 
        background: #e40c0c; 
    }

    .fa-dropdown i {
        transition: transform 0.3s ease;
    }

    /* Custom Dropdown Styles */
    /* Custom Dropdown Styles for Signup Only */
    .signup-dropdown {
        position: relative;
        width: 100%;
        cursor: pointer;
    }
    .signup-dropdown .selected-text {
        color: #b3abab;
        font-size: 0.95rem;
    }
    .signup-dropdown i {
        color: #b3abab;
        font-size: 12px;
        transition: transform 0.3s ease;
    }
    .signup-dropdown .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        width: 100% !important;
        background: white;
        border: 1px solid #dee2e6;
        border-top: none;
        border-radius: 0 0 0.375rem 0.375rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1050;
        max-height: 200px;
        overflow-y: auto;
        margin-top: -1px;
    }
    .signup-dropdown .dropdown-menu.d-block {
        display: block !important;
        animation: slideDown 0.2s ease;
    }
    @keyframes slideDown {
        from { 
            opacity: 0; 
            transform: translateY(-10px); 
        }
        to { 
            opacity: 1; 
            transform: translateY(0); 
        }
    }
    .signup-dropdown .dropdown-item {
        padding: 0.75rem 1rem;
        cursor: pointer;
        border-bottom: 1px solid #f8f9fa;
        transition: background-color 0.2s ease;
        font-size: 0.95rem;
        color: #b3abab;
        width: 100%;
        text-align: left;
        background: none;
        border: none;
    }
    .signup-dropdown .dropdown-item:hover {
        background-color: #f8f9fa;
    }
    .signup-dropdown .dropdown-item:last-child {
        border-bottom: none;
    }
    .signup-dropdown.has-selection .selected-text {
        color: #b3abab !important;
    }
    .signup-dropdown select {
        display: none !important;
    }
    .signup-dropdown .form-control {
        cursor: pointer;
        background-color: #fff !important;
    }

    /* Bootstrap display utilities override for dropdown */
    .d-none {
        display: none !important;
    }

    .d-block {
        display: block !important;
    }

    /* Date input ke liye fix */
    input[type="date"].form-control {
        color: #b3abab !important;
    }

    /* Calendar icon color change - Sirf yeh 3 lines */
    input[type="date"].form-control::-webkit-calendar-picker-indicator {
        filter: invert(0.6);
        opacity: 0.7;
    }

    .btn-outline-secondary 
    { 
        background: #db2727; 
        border: 1px solid #ddd; 
        font-weight: 500; 
    }
</style>
@endpush

@section('content')
    <div class="container d-flex justify-content-center align-items-center min-vh-100 py-2">
        <div class="card shadow-sm border-0 p-4" style="max-width: 520px; width: 100%; border-radius: 12px;">
            <!-- Heading -->
            <div class="text-center mb-4">
                <h3 class="fw-bold">Sign up</h3>
                <p class="text-muted mb-0">Sign up to continue</p>
            </div>

            <!-- Signup Form -->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row g-3 mb-4">
                    <div class="col-md-6 col-12">
                        <input type="text" class="form-control border-0 border-bottom rounded-0 shadow-none"
                            name="name" placeholder="Name" required>
                    </div>

                    <div class="col-md-6 col-12">
                        <input type="email" class="form-control border-0 border-bottom rounded-0 shadow-none"
                            name="email" placeholder="Email" required>
                    </div>

                    <div class="col-md-6 col-12">
                        <input type="password" class="form-control border-0 border-bottom rounded-0 shadow-none"
                            name="password" placeholder="Password" required>
                    </div>

                    <div class="col-md-6 col-12">
                        <input type="text" class="form-control border-0 border-bottom rounded-0 shadow-none"
                            name="phone_no" placeholder="Phone Number" required>
                    </div>

                    <!-- Gender Dropdown -->
                    <div class="col-md-6 col-12">
                        <div class="fa-dropdown signup-dropdown">
                            <div class="form-control border-0 border-bottom rounded-0 shadow-none d-flex justify-content-between align-items-center">
                                <span class="selected-text">Select Gender</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="dropdown-menu d-none">
                                <div class="dropdown-item" data-value="male">Male</div>
                                <div class="dropdown-item" data-value="female">Female</div>
                                <div class="dropdown-item" data-value="other">Other</div>
                            </div>
                            <input type="hidden" name="gender" id="gender">
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <input type="date" class="form-control border-0 border-bottom rounded-0 shadow-none cursor-pointer"
                            name="dob" placeholder="Date of Birth" required>
                    </div>

                    <!-- Country Dropdown -->
                    <div class="col-md-6 col-12">
                        <div class="fa-dropdown signup-dropdown">
                            <div class="form-control border-0 border-bottom rounded-0 shadow-none d-flex justify-content-between align-items-center">
                                <span class="selected-text">Select Country</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="dropdown-menu d-none">
                                @foreach ($countries as $country)
                                    <div id="{{ $country->id }}" class="dropdown-item" data-value="{{ $country->id }}">{{ $country->name }}</div>
                                @endforeach
                            </div>
                            <input type="hidden" name="country_id" id="country_id">
                        </div>
                    </div>

                    <!-- Province Dropdown -->
                    <div class="col-md-6 col-12">
                        <div class="fa-dropdown signup-dropdown">
                            <div class="form-control border-0 border-bottom rounded-0 shadow-none d-flex justify-content-between align-items-center">
                                <span class="selected-text">Select Province</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="dropdown-menu d-none">
                                @foreach ($countries as $country)
                                    @foreach ($country->provinces as $province)
                                        <div id="{{ $province->id }}" class="dropdown-item" data-value="{{ $province->id }}">{{ $province->name }}</div>
                                    @endforeach
                                @endforeach
                            </div>
                            <input type="hidden" name="province_id" id="province_id">
                        </div>
                    </div>

                    <!-- City Dropdown -->
                    <div class="col-md-6 col-12">
                        <div class="fa-dropdown signup-dropdown">
                            <div class="form-control border-0 border-bottom rounded-0 shadow-none d-flex justify-content-between align-items-center">
                                <span class="selected-text">Select City</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="dropdown-menu d-none">
                                @foreach ($countries as $country)
                                    @foreach ($country->cities as $city)
                                        <div id="{{ $city->id }}" class="dropdown-item" data-value="{{ $city->id }}">{{ $city->name }}</div>
                                    @endforeach
                                    
                                @endforeach
                            </div>
                            <input type="hidden" name="city_id" id="city_id">
                        </div>
                    </div>

                    <!-- Sub Locality Dropdown -->
                    <div class="col-md-6 col-12">
                        <div class="fa-dropdown signup-dropdown">
                            <div class="form-control border-0 border-bottom rounded-0 shadow-none d-flex justify-content-between align-items-center">
                                <span class="selected-text">Select Sub Locality</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="dropdown-menu d-none">
                                @foreach ($countries as $country)
                                {{-- @dd($countries); --}}
                                    @foreach ($country->subLocalities as $subLocality)
                                        <div id="{{ $subLocality->id }}" class="dropdown-item" data-value="{{ $subLocality->id }}">{{ $subLocality->name }}</div>   
                                    @endforeach
                                @endforeach
                            </div>
                            <input type="hidden" name="sub_locality_id" id="sub_locality_id">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Sign up</button>
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
                <small class="text-muted">Already have an account? 
                    <a href="{{ route('login') }}" class="text-decoration-none">Sign in</a>
                </small>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@push('scripts')
    <script>
        $('.signup-dropdown').each(function() {
            let dropdown = $(this);

            // Mouse enter
            dropdown.on('mouseenter', function() {
                dropdown.find('.dropdown-menu').removeClass('d-none').addClass('d-block');
                dropdown.find('i').css('transform', 'rotate(180deg)');
            });

            // Mouse leave
            dropdown.on('mouseleave', function() {
                dropdown.find('.dropdown-menu').removeClass('d-block').addClass('d-none');
                dropdown.find('i').css('transform', 'rotate(0deg)');
            });

            // Click on item
            dropdown.find('.dropdown-item').on('click', function() {
                var value = $(this).data('value');
                var text = $(this).text();
                dropdown.find('.selected-text').text(text);
                dropdown.find('input[type="hidden"]').val(value);
                dropdown.find('.dropdown-menu').removeClass('d-block').addClass('d-none');
                dropdown.find('i').css('transform', 'rotate(0deg)');
                dropdown.addClass('has-selection');
            });
        });

        // On form submit, validate all dropdowns
        $('form').on('submit', function(e) {
            let valid = true;
            $('.signup-dropdown').each(function() {
                let input = $(this).find('input[type="hidden"]');
                if (!input.val()) {
                    valid = false;
                    $(this).find('.form-control').css('border-color', 'red');
                } else {
                    $(this).find('.form-control').css('border-color', '');
                }
            });
            if (!valid) {
                e.preventDefault();
                alert('Please select all required dropdowns.');
            }
        });
    </script>
@endpush
@endsection