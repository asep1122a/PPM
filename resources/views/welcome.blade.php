<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="w-full min-h-screen flex flex-col justify-center items-center text-center bg-center bg-no-repeat bg-cover"
        style="background-image: url('images/p.jpg')">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 sm:leading-none lg:text-5xl">
            <span class="inline md:block">SELAMAT DATANG DI RESTO & CAFE MAS BRO</span>
        </h1>
        <div class="mt-2 text-green-50 lg:text-lg">
            “Nikmati cita rasa khas di Resto & Cafe Mas Bro, tempat makan favorit dengan pelayanan ramah dan harga bersahabat.”
        </div>  
        <div class="flex flex-col items-center mt-12">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('reservations.step-one') }}" type="button"
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                    Reservasi Sekarang
                </a>
            </span>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
                        <!-- <h3 class="text-xl">Sejarah
                        </h3> -->
                        <h2 class="text-4xl text-green-600">About</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Resto & Cafe Mas Bro berdiri sejak 2015 di Jl. Semanggi Raya, Palaraya, Tegal. 
                            Kami hadir untuk menyuguhkan pengalaman kuliner khas dengan suasana hangat dan pelayanan ramah. 
                            Dengan menu lezat yang terus berkembang, Mas Bro menjadi tempat favorit untuk bersantai, berkumpul, dan menikmati momen istimewa bersama keluarga dan teman.
                        </p>
                        <div class="relative flex">
                            <a href="{{ route('about') }}" type="button"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="{{ asset('images/p.jpg') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
  <!-- Judul -->
  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold text-black">Layanan</h2>
    <div class="w-16 h-1 bg-yellow-500 mx-auto mt-2 rounded-full"></div>
  </div>

  <!-- Card Layanan -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4 md:px-16">
  <!-- Dine-In -->
<div class="border border-blue-400 p-6 text-center">
  <img
    src="https://img.icons8.com/fluency/96/restaurant-table.png"
    alt="Dine-In"
    class="h-24 mx-auto mb-4"
  />
  <h3 class="text-xl font-bold mb-2">Dine-In</h3>
  <p class="text-sm text-gray-700">
    Dengan suasana hangat dan ramah yang terinspirasi oleh budaya dan seni Indonesia, Anda akan merasa seolah-olah sedang berdansa dengan rasa di seluruh Nusantara.
  </p>
</div>

<!-- Take Away -->
<div class="border border-blue-400 p-6 text-center">
  <img
    src="https://img.icons8.com/fluency/96/take-away-food.png"
    alt="Take Away"
    class="h-24 mx-auto mb-4"
  />
  <h3 class="text-xl font-bold mb-2">Take Away</h3>
  <p class="text-sm text-gray-700">
    Pesan makanan favorit Anda dan ambil sendiri dengan mudah tanpa harus menunggu lama.
  </p>
</div>

  <!-- Reservation -->
  <div class="border border-blue-400 p-6 text-center">
    <img
      src="https://img.icons8.com/color/96/reservation.png"
      alt="Reservation"
      class="h-24 mx-auto mb-4"
    />
    <h3 class="text-xl font-bold mb-2">Reservation</h3>
    <p class="text-sm text-gray-700">
      Pesan tempat lebih awal untuk menikmati suasana terbaik dan layanan maksimal dari kami.
    </p>
  </div>
</div>


</section>

<!-- Section Kuning -->
<section class="bg-yellow-400 py-12 px-4">
  <div class="flex flex-col md:flex-row items-center justify-around gap-4 text-center md:text-center w-full px-6 md:px-32">
    <div class="md:w-2/3 text-left">
      <h2 class="text-2xl font-bold text-black mb-2">
        Ayo Makan Dan Nongkrong Di Resto & Cafe Mas Bro!
      </h2>
      <p class="text-sm text-black">
        Nikmati pengalaman kuliner yang penuh cita rasa, tempat nyaman, dan layanan terbaik untuk semua suasana — dari santai sampai kumpul bareng.
      </p>
    </div>
    <div class="md:w-auto">
      <a href="{{ route('reservations.step-one') }}" class="px-6 py-2 bg-black text-white font-semibold rounded-full hover:bg-gray-900 transition whitespace-nowrap">
        Reservation
      </a>
    </div>
  </div>
</section>
    @if(is_array($specials))
        <section class="mt-8 bg-white">
            <div class="mt-4 text-center">
                <h3 class="text-2xl font-bold">Our Menu</h3>
                <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                    TODAY'S SPECIALITY</h2>
            </div>
            <div class="container w-full px-5 py-6 mx-auto">
                <div class="grid lg:grid-cols-4 gap-y-6">
                    @foreach ($specials['menus'] as $menu)
                        <div class="max-w-xs     mx-4 mb-2 rounded-lg shadow-lg">
                             <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                            <div class="px-6 py-4">
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                    {{ $menu->name }}</h4>
                                <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                            </div>
                            <div class="flex items-center justify-between p-4">
                                <span class="text-xl text-green-600">${{ $menu->price }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    @endif        
    <section class="pt-4 pb-12 bg-gray-800">
    <div class="my-16 text-center">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 mb-6">
            Menu Favorit
        </h2>
    </div>

    <section class="px-6 lg:px-16">
 
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
            <img class="w-full h-40 object-cover rounded-md mb-3" src="{{ asset('images/makanan-tradisional.jpg') }}" alt="Makanan Tradisional">
            <h2 class="text-xl font-semibold text-gray-800">Makanan Tradisional</h2>
            <p class="text-gray-600 text-sm mt-1">Pilihan makanan tradisional khas Indonesia yang menggugah selera.</p>
            <div class="flex justify-between items-center mt-3">
                <span class="font-semibold text-gray-800">Mulai 15.000</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
            <img class="w-full h-40 object-cover rounded-md mb-3" src="{{ asset('images/minuman-segar.jpg') }}" alt="Minuman Segar">
            <h2 class="text-xl font-semibold text-gray-800">Minuman Segar</h2>
            <p class="text-gray-600 text-sm mt-1">Minuman dingin menyegarkan dengan berbagai pilihan rasa buah.</p>
            <div class="flex justify-between items-center mt-3">
                <span class="font-semibold text-gray-800">Mulai 10.000</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
            <img class="w-full h-40 object-cover rounded-md mb-3" src="{{ asset('images/suasana-nyaman.jpg') }}" alt="Suasana Nyaman">
            <h2 class="text-xl font-semibold text-gray-800">Suasana Nyaman</h2>
            <p class="text-gray-600 text-sm mt-1">Lingkungan yang tenang dan nyaman, ideal untuk bersantai atau bekerja.</p>
            <div class="flex justify-between items-center mt-3">
                <span class="font-semibold text-gray-800">Gratis</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
            <img class="w-full h-40 object-cover rounded-md mb-3" src="{{ asset('images/pelayanan-ramah.jpg') }}" alt="Pelayanan Ramah">
            <h2 class="text-xl font-semibold text-gray-800">Pelayanan Ramah</h2>
            <p class="text-gray-600 text-sm mt-1">Staf kami siap melayani dengan senyum dan keramahan setiap saat.</p>
            <div class="flex justify-between items-center mt-3">
                <span class="font-semibold text-gray-800">Termasuk</span>
            </div>
        </div>


        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
            <img class="w-full h-40 object-cover rounded-md mb-3" src="{{ asset('images/makanan-tradisional.jpg') }}" alt="Makanan Tradisional">
            <h2 class="text-xl font-semibold text-gray-800">Makanan Tradisional</h2>
            <p class="text-gray-600 text-sm mt-1">Pilihan makanan tradisional khas Indonesia yang menggugah selera.</p>
            <div class="flex justify-between items-center mt-3">
                <span class="font-semibold text-gray-800">Mulai 15.000</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
            <img class="w-full h-40 object-cover rounded-md mb-3" src="{{ asset('images/minuman-segar.jpg') }}" alt="Minuman Segar">
            <h2 class="text-xl font-semibold text-gray-800">Minuman Segar</h2>
            <p class="text-gray-600 text-sm mt-1">Minuman dingin menyegarkan dengan berbagai pilihan rasa buah.</p>
            <div class="flex justify-between items-center mt-3">
                <span class="font-semibold text-gray-800">Mulai 10.000</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
            <img class="w-full h-40 object-cover rounded-md mb-3" src="{{ asset('images/suasana-nyaman.jpg') }}" alt="Suasana Nyaman">
            <h2 class="text-xl font-semibold text-gray-800">Suasana Nyaman</h2>
            <p class="text-gray-600 text-sm mt-1">Lingkungan yang tenang dan nyaman, ideal untuk bersantai atau bekerja.</p>
            <div class="flex justify-between items-center mt-3">
                <span class="font-semibold text-gray-800">Gratis</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
            <img class="w-full h-40 object-cover rounded-md mb-3" src="{{ asset('images/pelayanan-ramah.jpg') }}" alt="Pelayanan Ramah">
            <h2 class="text-xl font-semibold text-gray-800">Pelayanan Ramah</h2>
            <p class="text-gray-600 text-sm mt-1">Staf kami siap melayani dengan senyum dan keramahan setiap saat.</p>
            <div class="flex justify-between items-center mt-3">
                <span class="font-semibold text-gray-800">Termasuk</span>
            </div>
        </div>
    </div>
</section>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
    </div>
</section>
</x-guest-layout>