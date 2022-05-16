<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tagged</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<!-- Navbar goes here -->
<nav class="bg-white shadow-sm">
    <div class="w-full px-4">
        <div class="flex justify-between">
            <div class="">
                <div>
                    <!-- Website Logo -->
                    <a href="#" class="flex items-center py-4">
                        <span class="font-semibold text-black-600 text-lg">Tagged</span>
                    </a>
                </div>
            </div>
            <!-- Primary Navbar items -->
            <div class="">
                <div class="hidden md:flex items-center space-x-3">
                    <a href="/" class="py-4 px-2 text-orange-500 border-b-4 border-orange-500 font-semibold">Home</a>
                    <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-orange-500 transition duration-300">Services</a>
                    <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-orange-500 transition duration-300">About</a>
                    <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-orange-500 transition duration-300">Contact Us</a>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3">
                <a href="" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-orange-500 hover:text-white transition duration-300">Log In</a>
                <a href="" class="py-2 px-2 font-medium text-white bg-orange-500 rounded hover:bg-orange-400 transition duration-300">Sign Up</a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-500 hover:text-orange-500"
                         fill="none"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="md:hidden hidden mobile-menu">
        <h3>Menu</h3>
        <ul>
            <li class="active">
                <a href="/" class="block text-sm px-4 py-4 text-white bg-orange-500 font-semibold">Home</a></li>
            <li>
                <a href="#services" class="block text-sm px-4 py-4 hover:bg-orange-500 transition duration-300">Services</a>
            </li>
            <li>
                <a href="#about" class="block text-sm px-4 py-4 hover:bg-orange-500 transition duration-300">About</a>
            </li>
            <li>
                <a href="#contact" class="block text-sm px-4 py-4 hover:bg-orange-500 transition duration-300">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>

<div class="w-full md:w-1/6 hidden md:block mobile-menu">
    <h3>Tags</h3>
    <ul>
        <li class="active">
            <a href="/" class="block text-sm px-4 py-4 text-white bg-orange-500 font-semibold">All</a></li>
        <li>
            <a href="#services" class="block text-sm px-4 py-4 hover:bg-orange-500 transition duration-300">CRM</a>
        </li>
        <li>
            <a href="#about" class="block text-sm px-4 py-4 hover:bg-orange-500 transition duration-300">Books</a>
        </li>
        <li>
            <a href="#contact" class="block text-sm px-4 py-4 hover:bg-orange-500 transition duration-300">Phone</a>
        </li>
    </ul>
</div>

<h1 class="text-orange-500 text-2xl md:text-3xl lg:text-4xl font-bold p-4">Tailwind Navigation Toolbar</h1>

<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelectorAll(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.forEach(function(item) {
            item.classList.toggle("hidden");
        });
    });
</script>

</body>
</html>
