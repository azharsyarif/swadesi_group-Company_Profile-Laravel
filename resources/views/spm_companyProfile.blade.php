<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <title>Swadesi Perdana Mandiri</title>
</head>
<body>
    <nav id='navbar' class="bg-white shadow fixed top-0 left-0 right-0 z-10">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo -->
            <a href="#" class="flex items-center">
                <img src="img/logo/SPM_Logo.png" alt="Logo" class="h-8 mr-2">
                <span class="text-xl font-bold">Swadesi Perdana Mandiri</span>
            </a>

            <!-- Menu -->
            <div class="flex space-x-8 gap-3">
                <a href="#home" class="text-gray-700 hover:text-gray-900 hover:underline hover:font-bold transition-all duration-300 transform hover:scale-105">Home</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 hover:underline hover:font-bold transition-all duration-300 transform hover:scale-105">Project Kami</a>
                <a href="#tentang_kami" class="text-gray-700 hover:text-gray-900 hover:underline hover:font-bold transition-all duration-300 transform hover:scale-105">Tentang Kami</a>
                <a href="#contact" class="text-gray-700 hover:text-gray-900 hover:underline hover:font-bold transition-all duration-300 transform hover:scale-105">Kontak Kami</a>
            </div>

            <!-- Language Selector -->
            <div class="flex space-x-4">
                <a href="#" class="text-gray-700 hover:text-gray-900">ID</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">EN</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section id='home' class="flex flex-col items-center justify-center bg-slate-200 h-screen text-center" data-aos="fade-up">
        <img src="path/to/your/image.jpg" alt="-" class="absolute inset-0 object-cover w-full h-full opacity-50" />
        <div class="relative z-10">
            <h1 class="text-4xl font-bold text-gray-800">Logistik dan Layanan Terpadu untuk Mendorong Keberhasilan Anda</h1>
            <p class="mt-4 text-lg text-gray-600">Menghubungkan bisnis dengan solusi yang handal untuk mempermudah operasi dan mempercepat pertumbuhan</p>
            <a href="#contact" class="mt-6 inline-block px-6 py-3 text-white bg-blue-600 rounded hover:bg-blue-700 transition duration-300">Kontak Sekarang</a>
        </div>
    </section>

    <section id="tentang_kami" class="py-10 bg-gray-100" data-aos="fade-up">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-6">Tentang Kami</h2>
            <p class="text-lg text-gray-600 text-center mb-8">
                <span class='font-bold'>PT SWADESI PERDANA MANDIRI</span> berdiri pada tahun 2019 dan bergerak pada berbagai bidang usaha berikut:
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1: Instalasi Telekomunikasi -->
                <div class="relative group bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-center p-4">Instalasi Telekomunikasi</h3>
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Instalasi Telekomunikasi" class="w-full h-32 object-cover rounded-b-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white text-center p-4">Menyediakan layanan instalasi dan pemeliharaan sistem telekomunikasi untuk berbagai kebutuhan.</p>
                    </div>
                </div>

                <!-- Card 2: Perdagangan Besar atas Dasar Balas Jasa (Fee) atau Kontrak -->
                <div class="relative group bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-center p-4">Perdagangan Besar</h3>
                    <img src="https://images.unsplash.com/photo-1581091870620-1c1c1c1c1c1c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Perdagangan Besar" class="w-full h-32 object-cover rounded-b-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white text-center p-4">Melakukan perdagangan besar atas dasar balas jasa (fee) atau kontrak untuk berbagai produk.</p>
                    </div>
                </div>

                <!-- Card 3: Perdagangan Besar Komputer dan Perlengkapan Komputer -->
                <div class="relative group bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-center p-4">Perdagangan Komputer</h3>
                    <img src="https://images.unsplash.com/photo-1581091870620-1c1c1c1c1c1c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Perdagangan Komputer" class="w-full h-32 object-cover rounded-b-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white text-center p-4">Menyediakan berbagai perangkat komputer dan perlengkapannya untuk kebutuhan bisnis dan individu.</p>
                    </div>
                </div>

                <!-- Card 4: Perdagangan Besar Peralatan Telekomunikasi -->
                <div class="relative group bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-center p-4">Perdagangan Peralatan Telekomunikasi</h3>
                    <img src="https://images.unsplash.com/photo-1581091870620-1c1c1c1c1c1c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Perdagangan Peralatan Telekomunikasi" class="w-full h-32 object-cover rounded-b-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white text-center p-4">Menjual peralatan telekomunikasi berkualitas tinggi untuk mendukung komunikasi yang efektif.</p>
                    </div>
                </div>

                <!-- Card 5: Perdagangan Besar Mesin, Peralatan dan Perlengkapan Lainnya -->
                <div class="relative group bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-center p-4">Perdagangan Mesin</h3>
                    <img src="https://images.unsplash.com/photo-1581091870620-1c1c1c1c1c1c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Perdagangan Mesin" class="w-full h-32 object-cover rounded-b-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white text-center p-4">Menyediakan berbagai jenis mesin untuk industri dan kebutuhan lainnya.</p>
                    </div>
                </div>
            </div>

            <div class="mt-28 container mx-auto flex flex-col md:flex-row items-center">
                <!-- Judul Visi -->
                <div class="md:w-1/2 text-left">
                    <h2 class="text-3xl font-bold text-center">Visi Kami</h2>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed max-md:text-center">
                        Menjadi Perusahaan di Bidang Perdagangan Barang dan Jasa yang Profesional dan Terpercaya di Indonesia.
                    </p>
                </div>
                <!-- Judul Misi -->
                <div class="md:w-1/2 text-left md:pl-10">
                    <h2 class="text-3xl font-bold text-center">Misi Kami</h2>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed max-md:text-center">
                        Membangun kepercayaan Mitra Kerja di Bidang Perdagangan Barang dan Jasa dengan cara yang efektif, efisien dan berkualitas.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="kerja-sama" class="py-10 " data-aos="fade-up">
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-2xl font-semibold text-gray-900 mb-6">Dipercaya oleh tim inovatif terkemuka</h2>
                <p class="text-center text-gray-600 mb-10">
                    Berikut adalah beberapa perusahaan yang telah bekerja sama dengan kami:
                </p>
                <div class="mx-auto grid max-w-lg grid-cols-1 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-1 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-1">
                    <div class="relative">
                        <img
                            class="max-h-48 w-full object-contain mx-auto cursor-pointer hover:scale-105 transition-transform duration-300 ease-in-out"
                            src="storage/images/scm/telkom.png"
                            alt="Telkom"
                            width="632"
                            height="192"
                            onclick="showPopup()"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popup Modal -->
    <div id="popupModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg opacity-0 scale-95 transition-opacity duration-300 ease-in-out transform">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Kerjasama dengan PT TELKOM AKSES</h3>
                <button onclick="hidePopup()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <p>
                Saat ini PT Swadesi Perdana Mandiri bekerja sama dengan PT TELKOM AKSES dalam hal pekerjaan Pengadaan dan/atau Pemasangan Outside Plant Fiber Optik (OSP-FO) dari tahun 2020 hingga saat ini. Wilayah pekerjaan yang sudah kami lakukan meliputi wilayah Kalimantan, wilayah Timur Ambon, DKI Jakarta, Bekasi, Sumatera Selatan, dan Tangerang Selatan.
            </p>
            <p class="mt-4 text-gray-600">2020 - Sekarang</p>
        </div>
    </div>

    <section id="contact" class="py-10 bg-gray-100" data-aos="fade-up">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-2">Kontak Kami</h2>
            <p class="text-center text-lg text-gray-600 mb-6">
                Kami siap membantu Anda! Silakan hubungi kami melalui informasi di bawah ini atau isi formulir untuk pertanyaan lebih lanjut.
            </p>

            <!-- Iframe Google Maps -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.723897263955!2d106.7378213143731!3d-6.299964995440433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f01dc606bb5b%3A0xa96ee697e61f271a!2sCV.%20Swadesi%20Express!5e0!3m2!1sen!2sid!4v1600171579957!5m2!1sen!2sid"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                class="mb-6"></iframe>

            <div class="flex flex-col md:flex-row items-start md:items-center mt-6">
                <!-- Informasi Kontak -->
                <div class="md:w-1/2 p-6">
                    <p class="font-bold">Lokasi:</p>
                    <p class="mt-2 text-gray-600">
                        <a href="https://goo.gl/maps/hDcnrG4k5bpHPWn69" target="_blank" class="text-blue-600 hover:underline">RT. 002 RW. 005 Kel. Sawah Lama, Kec. Ciputat, Kota Tangerang Selatan</a>
                    </p>
                    <p class="mt-4 font-bold">Email:</p>
                    <p class="mt-2 text-gray-600">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Swadesi.perdana.mandiri@gmail.com" target="_blank" class="text-blue-600 hover:underline">Swadesi.perdana.mandiri@gmail.com</a>
                    </p>
                    <p class="mt-4 font-bold">Fax:</p>
                    <p class="mt-2 text-gray-600">(021) 749 6065</p>
                </div>

                <!-- Form Kontak -->
                <div class="md:w-1/2 p-6 bg-white rounded shadow-lg">
                    <form class="mt-8 space-y-4" method="POST">
                        <div>
                            <label for="first-name" class="block text-gray-700 text-sm font-bold mb-2">Nama Anda</label>
                            <input type="text" id="first-name" placeholder="Nama Anda" class="w-full p-2 border border-gray-300 rounded-lg" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Anda</label>
                            <input type="email" id="email" placeholder="Email Anda" class="w-full p-2 border border-gray-300 rounded-lg" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subject</label>
                            <select id="subject" class="w-full p-2 border border-gray-300 rounded-lg">
                                <option value="" disabled selected>Pilih Subject</option>
                                <option value="partnership">Kerja Sama</option>
                                <option value="suggestion">Saran</option>
                                <option value="criticism">Kritik</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan</label>
                            <textarea id="message" placeholder="Pesan" class="w-full p-2 border border-gray-300 rounded-lg" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition duration-300">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        AOS.init({
            offset: 120, // Jarak dari elemen ke viewport sebelum animasi dimulai
            duration: 600, // Durasi animasi dalam milidetik
            easing: 'ease-in-out', // Fungsi easing untuk animasi
            once: true, // Apakah animasi hanya terjadi sekali saat scroll
        });
    </script>

    <!-- Pop Up section Kerja Sama -->
    <script>
        function showPopup() {
            const popup = document.getElementById('popupModal');
            popup.classList.remove('hidden');
            setTimeout(() => {
                popup.querySelector('.bg-white').classList.remove('opacity-0', 'scale-95');
            }, 10);
        }

        function hidePopup() {
            const popup = document.getElementById('popupModal');
            popup.querySelector('.bg-white').classList.add('opacity-0', 'scale-95');
            setTimeout(() => {
                popup.classList.add('hidden');
            }, 300);
        }

        // Menutup pop-up ketika mengklik di luar area pop-up
        document.addEventListener('click', function(event) {
            const popup = document.getElementById('popupModal');
            const popupContent = popup.querySelector('.bg-white');
            if (popupContent && !popupContent.contains(event.target) && !event.target.classList.contains('cursor-pointer')) {
                hidePopup();
            }
        });
    </script>
</body>
</html>
