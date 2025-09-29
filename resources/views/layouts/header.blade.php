<!-- ======================= Top Header Start ========================= -->
<header class="header-middle border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner d-flex justify-content-between align-items-center gap-8">
            <!-- Categories Dropdown Start - LEFT SIDE -->
            <div class="search-category select-style-one d-flex select-border-end-0 search-form d-sm-flex d-none text-heading-two text-sm">
                <select class="js-example-basic-single border-0" name="state" style="width: 200px;">
                    <option value="" selected disabled>All categories</option>
                    <option value="grocery">Grocery</option>
                    <option value="dairy">Breakfast & Dairy</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="milks">Milks and Dairies</option>
                    <option value="pet">Pet Foods & Toy</option>
                    <option value="bakery">Breads & Bakery</option>
                    <option value="seafood">Fresh Seafood</option>
                    <option value="frozen">Frozen Foods</option>
                    <option value="noodles">Noodles & Rice</option>
                    <option value="icecream">Ice Cream</option>
                </select>
            </div>
            <!-- Categories Dropdown End -->

            <!-- Logo Start - MIDDLE -->
            <div class="logo mx-auto">
                <a href="{{ url('/') }}" class="link">
                    <!-- Fix image path using asset helper -->
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
                </a>
            </div>
            <!-- Logo End  -->
             
            <!-- Header Top Right Start - RIGHT SIDE -->
            <div class="header-right flex-align flex-shrink-0">
                @include('components.header-infos')
            </div>
            <!-- Header Top Right End  -->
        </nav>
    </div>
</header>
<!-- ======================= Top Header End ========================= -->