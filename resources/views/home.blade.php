<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-commerce Project</title>

    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold text-blue-600">ShopSphere</a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center font-medium">
                <a href="#" class="hover:text-blue-600 transition">Home</a>

                <!-- Categories Dropdown -->
                {{-- <div class="relative group">
                    <button class="hover:text-blue-600 transition">Categories</button>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 rounded-lg w-48">
                    <a href="#" class="block px-4 py-2 hover:bg-blue-50">Electronics</a>
                    <a href="#" class="block px-4 py-2 hover:bg-blue-50">Fashion</a>
                    <a href="#" class="block px-4 py-2 hover:bg-blue-50">Furniture</a>
                    </div>
                </div> --}}
                <div class="relative group">
                    <!-- Button with Arrow -->
                    <button class="flex items-center space-x-1 hover:text-blue-600 transition">
                        <span>Categories</span>
                        <!-- Arrow Icon -->
                        <svg class="w-4 h-4 transform transition-transform duration-300 group-hover:rotate-180"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 rounded-lg w-48">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Electronics</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Fashion</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Furniture</a>
                    </div>
                </div>

                <!-- Support Dropdown -->
                <div class="relative group">
                    <button class="hover:text-blue-600 transition">Support</button>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 rounded-lg w-44">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Help Center</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Contact Us</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">FAQs</a>
                    </div>
                </div>
                
                <!-- Profile Dropdown -->
                <div class="relative group">
                    <button class="hover:text-blue-600 transition">Profile</button>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 rounded-lg w-40">
                    <a href="#" class="block px-4 py-2 hover:bg-blue-50">My Account</a>
                    <a href="#" class="block px-4 py-2 hover:bg-blue-50">Orders</a>
                    <a href="#" class="block px-4 py-2 hover:bg-blue-50">Wishlist</a>
                    </div>
                </div>

                <!-- Cart -->
                <a href="#" class="hover:text-blue-600 transition flex items-center">
                    🛒 <span class="ml-1">Cart</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
            <button id="menu-btn" class="text-gray-600 text-2xl focus:outline-none">☰</button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white px-6 py-4 space-y-2">
            <a href="#" class="block py-2 hover:text-blue-600">Home</a>

            <!-- Categories -->
            <div>
            <button class="w-full text-left py-2 hover:text-blue-600 toggle-submenu">Categories ▼</button>
            <div class="hidden pl-4 space-y-2">
                <a href="#" class="block hover:text-blue-600">Electronics</a>
                <a href="#" class="block hover:text-blue-600">Fashion</a>
                <a href="#" class="block hover:text-blue-600">Furniture</a>
            </div>
            </div>

            <!-- Profile -->
            <div>
            <button class="w-full text-left py-2 hover:text-blue-600 toggle-submenu">Profile ▼</button>
            <div class="hidden pl-4 space-y-2">
                <a href="#" class="block hover:text-blue-600">My Account</a>
                <a href="#" class="block hover:text-blue-600">Orders</a>
                <a href="#" class="block hover:text-blue-600">Wishlist</a>
            </div>
            </div>

            <!-- Support -->
            <div>
            <button class="w-full text-left py-2 hover:text-blue-600 toggle-submenu">Support ▼</button>
            <div class="hidden pl-4 space-y-2">
                <a href="#" class="block hover:text-blue-600">Help Center</a>
                <a href="#" class="block hover:text-blue-600">Contact Us</a>
                <a href="#" class="block hover:text-blue-600">FAQs</a>
            </div>
            </div>

            <a href="#" class="block py-2 hover:text-blue-600">Cart</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto px-6 py-16">
        <div class="relative group rounded-2xl overflow-hidden shadow-lg max-w-5xl mx-auto">
            <!-- Hero Image -->
            <img src="{{ asset('images/Hero.jpg') }}" 
                alt="ShopSphere Hero" 
                class="w-full h-[400px] object-cover">
        </div>
    </section>


    <!-- Featured Products -->
    <section id="shop" class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Product Card -->
            <div>
                <div class="relative group Cardhover w-full rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <!-- Product Image -->
                    <img src="{{ asset('images/Electronics.jpeg') }}" alt="Electronics" class="w-full h-[300px] object-cover">
    
                    <!-- Overlay (Desktop Hover) -->
                    <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-center px-4 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
                        <!-- Category Name -->
                        <h3 class="text-white text-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            Electronics
                        </h3>
                        <!-- Category Description -->
                        <p class="text-gray-200 mt-2 text-sm transform translate-y-6 group-hover:translate-y-0 transition duration-700 delay-100">
                            Discover the latest gadgets and essentials to upgrade your lifestyle.
                        </p>
                        <!-- Button -->
                        <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
                            Dive Into Collection
                        </button>
                    </div>
                </div>
                <!-- Mobile View: Category Name Below -->
                <div class="block sm:hidden mt-3 text-center">
                    <h3 class="text-gray-800 font-semibold">Electronics</h3>
                </div>
            </div>
            <div>
                <div class="relative group Cardhover w-full rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <!-- Product Image -->
                    <img src="{{ asset('images/Furniture.jpg') }}" alt="Parts and accessories" class="w-full h-[300px] object-cover">
    
                    <!-- Overlay (Desktop Hover) -->
                    <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-center px-4 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
                        <!-- Category Name -->
                        <h3 class="text-white text-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            Furniture
                        </h3>
                        <!-- Category Description -->
                        <p class="text-gray-200 mt-2 text-sm transform translate-y-6 group-hover:translate-y-0 transition duration-700 delay-100">
                            Transform your living space with modern comfort and timeless designs.
                        </p>
                        <!-- Button -->
                        <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
                            Shop Now
                        </button>
                    </div>
                </div>
                <!-- Mobile View: Category Name Below -->
                <div class="block sm:hidden mt-3 text-center">
                    <h3 class="text-gray-800 font-semibold">Furniture</h3>
                </div>
            </div>
            <div>
                <div class="relative group Cardhover w-full rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <!-- Product Image -->
                    <img src="{{ asset('images/Shoes.jpg') }}" alt="Shoes" class="w-full h-[300px] object-cover ">
    
                    <!-- Overlay (Desktop Hover) -->
                    <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-center px-4 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
                        <!-- Category Name -->
                        <h3 class="text-white text-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            Shoes
                        </h3>
                        <!-- Category Description -->
                        <p class="text-gray-200 mt-2 text-sm transform translate-y-6 group-hover:translate-y-0 transition duration-700 delay-100">
                            Step into style with footwear crafted for comfort and confidence.
                        </p>
                        <!-- Button -->
                        <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
                            Shop Now
                        </button>
                    </div>
                </div>
                <!-- Mobile View: Category Name Below -->
                <div class="block sm:hidden mt-3 text-center">
                    <h3 class="text-gray-800 font-semibold">Shoes</h3>
                </div>
            </div>
            <div>
                <div class="relative group Cardhover w-full rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <!-- Product Image -->
                    <img src="{{ asset('images/Home and garden.jpg') }}" alt="Home and garden" class="w-full h-[300px] object-cover ">
    
                    <!-- Overlay (Desktop Hover) -->
                    <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-center px-4 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
                        <!-- Category Name -->
                        <h3 class="text-white text-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            Home and garden
                        </h3>
                        <!-- Category Description -->
                        <p class="text-gray-200 mt-2 text-sm transform translate-y-6 group-hover:translate-y-0 transition duration-700 delay-100">
                            Bring warmth and nature together to create a perfect sanctuary.
                        </p>
                        <!-- Button -->
                        <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
                            Shop Now
                        </button>
                    </div>
                </div>
                <!-- Mobile View: Category Name Below -->
                <div class="block sm:hidden mt-3 text-center">
                    <h3 class="text-gray-800 font-semibold">Home and garden</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 ShopSphere. All rights reserved.</p>
        </div>
    </footer>

    <!-- jQuery Script for Mobile Menu -->
    <script>
        $(document).ready(function(){
            $("#menu-btn").click(function () {
                $("#mobile-menu").slideToggle();
            });

            // Mobile Dropdown Toggle
            $(".toggle-submenu").click(function () {
                $(this).next("div").slideToggle();
            });
        });
    </script>
</body>
</html>