<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="bg-white shadow-md" x-data="{ isOpen: false }">
        <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-green-400"
                    href="/">
                    Resto & Cafe Mas Bro
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button"
                        class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="/">Home</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="{{ route('categories.index') }}">Categories</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="{{ route('menus.index') }}">Our Menu</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="{{ route('reservations.step-one') }}">Make Reservation</a>

            </div>
        </nav>
    </div>
    <div class="font-sans text-gray-900 antialiased min-h-screen">
        {{ $slot }}
    </div>
    <footer class="bg-red-600 text-white py-10 border-t border-white">
        <div class="container mx-auto flex flex-wrap items-start justify-center px-4 lg:justify-between">
            <!-- Alamat -->
            <div class="w-full md:w-1/3 mb-8 md:mb-0">
                <h2 class="text-xl font-bold mb-4">Alamat</h2>
                <p class="text-sm mb-2">
                    <strong>Cabang 1</strong><br>
                    Jl. Siklepuh Raya, Pacul Wetan, Kec. Talang,<br>
                    Kabupaten Tegal, Jawa Tengah
                </p>
                <p class="text-sm mt-4">
                    <strong>Cabang 2</strong><br>
                    Jl. Pala Raya, Sibata, Mejasem Bar., Kec. Kramat,<br>
                    Kabupaten Tegal, Jawa Tengah
                </p>
            </div>

            <!-- Kontak Kami -->
            <div class="w-full md:w-1/3 mb-8 md:mb-0 text-center">
                <h2 class="text-xl font-bold mb-4">Kontak Kami</h2>
                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-white hover:text-gray-200">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-200">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-200">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </div>
            </div>

            <!-- Jam Operasional -->
            <div class="w-full md:w-1/3 text-center md:text-right">
                <h2 class="text-xl font-bold mb-4">Jam Operasional</h2>
                <p class="text-sm">Setiap Hari : 11.00 - 22.00</p>
            </div>
        </div>

        <div class="mt-8 border-t border-white pt-4 text-center text-sm">
            &copy;Powered by Resto & Cafe Mas Bro
        </div>
    </footer>

</body>

</html>