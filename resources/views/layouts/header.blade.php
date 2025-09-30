<!-- ======================= Top Header Start ========================= -->
<header class="border-bottom border-gray-100 py-2">
    <div class="container container-lg">
        <nav class="header-inner d-flex justify-content-between align-items-center gap-8">
            <!-- Categories Dropdown Start -->
            <div class="search-category select-style-one d-flex select-border-end-0 search-form d-sm-flex d-none text-heading-two text-sm">
                <div class="categories-dropdown w-100">
                    <div class="form-control border-0 border-bottom rounded-0 shadow-none d-flex gap-3 align-items-center">
                        <span class="selected-text">All categories</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-menu d-none">
                        <div class="dropdown-item" data-value="grocery">Grocery</div>
                        <div class="dropdown-item" data-value="dairy">Breakfast & Dairy</div>
                        <div class="dropdown-item" data-value="vegetables">Vegetables</div>
                        <div class="dropdown-item" data-value="milks">Milks and Dairies</div>
                        <div class="dropdown-item" data-value="pet">Pet Foods & Toy</div>
                        <div class="dropdown-item" data-value="bakery">Breads & Bakery</div>
                        <div class="dropdown-item" data-value="seafood">Fresh Seafood</div>
                        <div class="dropdown-item" data-value="frozen">Frozen Foods</div>
                        <div class="dropdown-item" data-value="noodles">Noodles & Rice</div>
                        <div class="dropdown-item" data-value="icecream">Ice Cream</div>
                    </div>
                    <input type="hidden" name="state" id="state">
                </div>
            </div>
            <!-- Categories Dropdown End -->

            <!-- Logo Start -->
            <div class="logo mx-auto">
                <a href="{{ url('/') }}" class="link">
                    {{-- <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo"> --}}
                    <a href="#" class="text-2xl font-bold text-black">ShopSphere</a>
                </a>
            </div>
            <!-- Logo End  -->
             
            <!-- Header Top Right Start -->
            <div class="header-right flex-align flex-shrink-0">
                @include('components.header-infos')
            </div>
            <!-- Header Top Right End  -->
        </nav>
    </div>
</header>
<!-- ======================= Top Header End ========================= -->