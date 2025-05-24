
<x-guest-layout>
    <section class="relative bg-gradient-to-br from-green-100 via-white to-blue-100 py-16 px-4 min-h-[60vh] flex items-center justify-center">
        <div class="max-w-2xl w-full mx-auto bg-white/80 rounded-3xl shadow-2xl p-8 md:p-16 flex flex-col items-center gap-8 backdrop-blur">
            <img src="{{ asset('images/p.jpg') }}" alt="Resto & Cafe Mas Bro"
                class="w-full max-w-2xl rounded-2xl shadow-lg object-cover h-72 border-4 border-green-400 mb-4" />
            <h1 class="text-4xl md:text-5xl font-extrabold text-green-700 mb-4 drop-shadow-lg text-center">Tentang Kami</h1>
            <p class="text-gray-700 text-lg mb-6 text-justify leading-relaxed">
                <span class="font-semibold text-green-600">Resto & Cafe Mas Bro</span> adalah destinasi kuliner yang menghadirkan pengalaman makan tak terlupakan di tengah suasana yang hangat dan penuh keakraban. Kami percaya bahwa setiap hidangan bukan hanya soal rasa, tetapi juga tentang kebersamaan, cerita, dan kenangan yang tercipta di setiap meja.
                Dengan bahan-bahan segar pilihan, chef berpengalaman, serta pelayanan yang ramah dan profesional, kami selalu berkomitmen memberikan yang terbaik untuk setiap tamu. Menu kami sangat variatif, mulai dari makanan tradisional hingga modern, semua diolah dengan penuh cinta dan perhatian pada detail rasa.
                Tidak hanya itu, harga yang bersahabat membuat siapa pun bisa menikmati sajian berkualitas tanpa khawatir soal kantong. Resto & Cafe Mas Bro juga menjadi tempat favorit untuk berbagai acara spesial, mulai dari arisan, ulang tahun, hingga gathering keluarga dan teman.
                Jadikan setiap kunjungan Anda sebagai momen istimewa bersama orang-orang tercinta. Kami siap menyambut Anda dengan senyum dan kehangatan, karena kepuasan Anda adalah prioritas utama kami.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center w-full mb-6">
                <div class="bg-green-50 rounded-xl p-4 shadow">
                    <span class="text-3xl text-green-600 font-bold">21+</span>
                    <div class="text-sm text-gray-600 mt-1">Menu Variatif</div>
                </div>
                <div class="bg-green-50 rounded-xl p-4 shadow">
                    <span class="text-3xl text-green-600 font-bold">4.9</span>
                    <div class="text-sm text-gray-600 mt-1">Rating Pelanggan</div>
                </div>
                <div class="bg-green-50 rounded-xl p-4 shadow">
                    <span class="text-3xl text-green-600 font-bold">Sejak 2015</span>
                    <div class="text-sm text-gray-600 mt-1">Pengalaman</div>
                </div>
            </div>
            <a href="{{ route('reservations.step-one') }}" class="inline-block px-8 py-3 bg-green-600 text-white font-bold rounded-full shadow hover:bg-green-500 transition">
                Reservasi Sekarang
            </a>
        </div>
    </section>
</x-guest-layout>