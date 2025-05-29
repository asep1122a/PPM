<x-guest-layout>
    <!-- Gambar Full Screen -->
    <section class="relative w-full h-[60vh] md:h-[80vh]">
        <img src="{{ asset('images/p.jpg') }}" alt="Resto & Cafe Mas Bro"
            class="absolute inset-0 w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-gradient-to-b from-red-600/70 via-yellow-400/60 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end">
            <h1 class="text-4xl md:text-6xl font-extrabold text-white drop-shadow-lg px-6 pb-10">
                Tentang Kami
            </h1>
        </div>
    </section>

    <!-- Konten About -->
    <section class="w-full bg-gradient-to-br from-yellow-50 via-white to-red-100 py-12 px-0">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white/90 rounded-2xl shadow-2xl p-8 md:p-12" style="box-shadow: 0 8px 32px 0 rgba(255,0,0,0.15);">
                <p class="text-gray-800 text-lg mb-8 text-justify leading-relaxed" style="text-align: justify;">
                    <span class="font-bold text-red-600">Resto & Cafe Mas Bro</span> adalah destinasi kuliner yang menghadirkan pengalaman makan tak terlupakan dalam suasana hangat penuh keakraban. Kami percaya setiap hidangan bukan hanya soal rasa, tetapi juga tentang kebersamaan, cerita, dan kenangan yang tercipta di setiap meja.<br><br>
                    Dengan bahan-bahan segar pilihan, chef berpengalaman, serta pelayanan ramah dan profesional, kami selalu berkomitmen memberikan yang terbaik untuk setiap tamu. Menu kami sangat variatif, mulai dari makanan tradisional hingga modern, semua diolah dengan penuh cinta dan perhatian pada detail rasa.<br><br>
                    Harga yang bersahabat membuat siapa pun bisa menikmati sajian berkualitas tanpa khawatir soal kantong. Resto & Cafe Mas Bro juga menjadi tempat favorit untuk berbagai acara spesial, mulai dari arisan, ulang tahun, hingga gathering keluarga dan teman.<br><br>
                    Jadikan setiap kunjungan Anda sebagai momen istimewa bersama orang-orang tercinta. Kami siap menyambut Anda dengan senyum dan kehangatan, karena kepuasan Anda adalah prioritas utama kami. Temukan kelezatan, kenyamanan, dan kebahagiaan di setiap kunjungan Anda ke <span class="font-bold text-yellow-500">Resto & Cafe Mas Bro</span>.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center w-full mb-8">
                    <div class="bg-yellow-100 rounded-xl p-4 shadow">
                        <span class="text-3xl text-red-600 font-bold">21+</span>
                        <div class="text-sm text-gray-700 mt-1">Menu Variatif</div>
                    </div>
                    <div class="bg-yellow-100 rounded-xl p-4 shadow">
                        <span class="text-3xl text-red-600 font-bold">4.9</span>
                        <div class="text-sm text-gray-700 mt-1">Rating Pelanggan</div>
                    </div>
                    <div class="bg-yellow-100 rounded-xl p-4 shadow">
                        <span class="text-3xl text-red-600 font-bold">Sejak 2015</span>
                        <div class="text-sm text-gray-700 mt-1">Pengalaman</div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('reservations.step-one') }}"
                        class="inline-block px-10 py-4 bg-gradient-to-r from-red-600 to-yellow-400 text-white font-bold rounded-full shadow-lg hover:from-yellow-400 hover:to-red-600 hover:text-red-700 transition">
                        Reservasi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>