<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Swadesi Group</title>
    <script>
        function changeLanguage(lang) {
            const elements = document.querySelectorAll('[data-translate]');
            elements.forEach(element => {
                const key = element.getAttribute('data-translate');
                element.textContent = translations[lang][key];
            });
        }

        const translations = {
            en: {
                title: "We Make Transport Fast And Safe",
                description: "We are on the road to carry your dreams.",
                servicesTitle: "Our Services",
                servicesDescription: "Explore our range of high-quality solutions tailored to your needs.",
                explore: "EXPLORE",
                footer: "© 2025 Swadesi Group. All rights reserved."
            },
            id: {
                title: "Kami Membuat Transportasi Cepat dan Aman",
                description: "Kami berada di jalan untuk membawa impian Anda.",
                servicesTitle: "Layanan Kami",
                servicesDescription: "Jelajahi berbagai solusi berkualitas tinggi yang disesuaikan dengan kebutuhan Anda.",
                explore: "JELAJAHI",
                footer: "© 2025 Swadesi Group. All rights reserved."
            }
        };
    </script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen" onload="changeLanguage('id')">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between">
            <a href="/company-group" class="text-white text-lg font-bold">SWADESI</a>
            <div class="flex items-center">
                <button onclick="changeLanguage('id')" class="ml-4 p-2">
                    <img src="storage/images/indonesian_flag.png" alt="Bahasa Indonesia" class="w-8 h-8 rounded-full">
                </button>
                <button onclick="changeLanguage('en')" class="ml-2 p-2">
                    <img src="storage/images/english_flag.png" alt="English" class="w-8 h-8 rounded-full">
                </button>
            </div>
        </div>
    </nav>

    <section id='home' class="relative h-96 bg-cover bg-center" style="background-image: url('storage/images/cargo_1.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto flex items-center h-full">
            <div class="text-white z-10">
                <h1 class="text-5xl font-bold" data-translate="title">We Make Transport Fast And Safe</h1>
                <p class="mt-4" data-translate="description">We are on the road to carry your dreams.</p>
                <a href="#services" class="mt-6 inline-block bg-blue-600 text-white py-2 px-4 rounded">Learn More</a>
            </div>
        </div>
    </section>

    <section class="py-12" id="services">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6" data-translate="servicesTitle">Our Services</h2>
            <p class="text-gray-600 mb-4" data-translate="servicesDescription">Explore our range of high-quality solutions tailored to your needs.</p>
            <div class="flex justify-center gap-6 flex-wrap">
                @foreach($services as $service)
                    <div class="relative group w-80 bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 cursor-pointer">
                        <h3 class="absolute top-2 left-2 text-lg font-semibold text-white bg-blue-500 px-2 rounded">{{ $service['title'] }}</h3>
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity">
                            <p class="text-center px-4 mb-4">{{ $service['description'] }}</p>
                            <a href="{{ $service['link'] }}" class="bg-yellow-500 text-black py-2 px-4 rounded" data-translate="explore">JELAJAHI</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <p class="mb-2" data-translate="footer">&copy; 2025 Swadesi Group. All rights reserved.</p>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
                <a href="#" class="text-gray-400 hover:text-white">Twitter</a>
                <a href="#" class="text-gray-400 hover:text-white">LinkedIn</a>
                <a href="#" class="text-gray-400 hover:text-white">Instagram</a>
            </div>
        </div>
    </footer>
</body>
</html>
