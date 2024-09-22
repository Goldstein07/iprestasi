<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.jsx')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Dashboard IPrestasi</title>
</head>

<body class="relative">
    {{-- Navbar --}}
    <header class="w-full h-16 px-4 md:px-10 py-4 bg-white shadow-md flex items-center justify-between">
        <div class="flex items-center gap-4">
            <!-- Logo and Branding -->
            <div class="flex items-center gap-2 md:gap-4">
                <div class="w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center overflow-hidden">
                    <img src="img/naruto.jpeg" alt="Logo" class="w-full h-full object-cover" />
                </div>
                <div class="flex items-center gap-0.5">
                    <span class="text-gray-900 text-lg md:text-2xl font-semibold">i</span>
                    <span class="text-[#fe632e] text-lg md:text-2xl font-semibold">Prestasi</span>
                </div>
            </div>
        </div>
        <div class="flex-grow flex items-center justify-center">
            <!-- Centered Navigation -->
            <nav class="hidden md:flex items-center gap-6">
                <a href="{{ route('dashboard') }}"
                    class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Home</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Lomba</a>
                <a href="#"
                    class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Beasiswa</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Pengabdian
                    Masyarakat</a>
                <a href="#"
                    class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Penelitian</a>
                <a href="#"
                    class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Pendataan</a>
                <a href="#"
                    class="px-3 py-1 md:px-4 md:py-2 bg-[#fe632e] text-white rounded-2xl text-sm md:text-base font-medium">FAQ</a>
            </nav>
        </div>
        <img class="w-6 h-6 md:w-8 md:h-8 rounded-full ml-auto" src="/img/profile.png" alt="User Profile" />
    </header>

    <div class="absolute inset-0 z-0 flex justify-center mt-16">
        <img src="img/bgfaq1.png" alt="Deskripsi gambar" class="w-full max-h-[200px] rounded-md">
    </div>

    <div class="container max-w-5xl mx-auto px-4 py-16 relative z-10">
        <div class="text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">
                Prosedur Perlombaan di Fakultas Ilmu Komputer UPN Veteran Jakarta
            </h2>
        </div>

        
        <div class="mt-20 relative z-10">
            <!-- Prosedur Pendaftaran Lomba -->
            <div class="bg-white shadow-lg p-8 rounded-t-xl border-b border-gray-300">
                <div class="flex justify-between items-center cursor-pointer" id="dropdownHeader">
                    <h3 class="text-2xl font-semibold text-black">Prosedur Pendaftaran Lomba</h3>
                    <svg id="arrowIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <ul id="dropdownContent" class="list-decimal mt-6 ml-6 space-y-6 hidden">
                    <!-- Step 1 -->
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            1
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Pilih lomba yang ingin diikuti</h4>
                            <p class="text-gray-600">Pilih lomba sesuai minat dan bakat Anda. Untuk informasi lomba
                                terbaru, klik <a href="#" class="text-blue-500 underline">di sini</a>.</p>
                        </div>
                    </li>
                    <!-- Step 2 -->
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            2
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Pilih dan hubungi dosen pembimbing</h4>
                            <p class="text-gray-600">Hubungi dosen sesuai dengan topik lomba. Lihat informasi dosen
                                pembimbing <a href="#" class="text-blue-500 underline">di sini</a>.</p>
                        </div>
                    </li>
                    <!-- Step 3 -->
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            3
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Daftarkan diri ke lomba</h4>
                            <p class="text-gray-600">Daftarkan diri atau tim ke lomba yang diinginkan. Semangat dan
                                semoga berhasil!</p>
                        </div>
                    </li>
                    <!-- Step 4 -->
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            4
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Melakukan pendataan fakultas</h4>
                            <p class="text-gray-600">Lakukan pendataan fakultas untuk mencatat partisipasi lomba. Klik
                                <a href="#" class="text-blue-500 underline">link ini</a> untuk pendataan.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Prosedur Pendataan Prestasi Lomba -->
            <div class="bg-white shadow-lg p-8 border-b border-gray-300">
                <div class="flex justify-between items-center cursor-pointer" id="dropdownHeaderPrestasi">
                    <h3 class="text-2xl font-semibold text-black">Prosedur Pendataan Prestasi Lomba</h3>
                    <svg id="arrowIconPrestasi" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <ul id="dropdownContentPrestasi" class="list-decimal mt-6 ml-6 space-y-6 hidden">
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            1
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Pilih lomba yang ingin diikuti</h4>
                            <p class="text-gray-600">Pilih lomba sesuai minat dan bakat Anda. Klik <a href="#"
                                    class="text-blue-500 underline">di sini</a> untuk informasi lomba terbaru.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            2
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Pilih dan hubungi dosen pembimbing</h4>
                            <p class="text-gray-600">Hubungi dosen sesuai dengan topik lomba. Lihat informasi dosen
                                pembimbing <a href="#" class="text-blue-500 underline">di sini</a>.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            3
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Daftarkan diri ke lomba</h4>
                            <p class="text-gray-600">Daftarkan diri atau tim ke lomba yang diinginkan. Semangat dan
                                semoga berhasil!</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            4
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Melakukan pendataan fakultas</h4>
                            <p class="text-gray-600">Lakukan pendataan fakultas untuk mencatat partisipasi lomba. Klik
                                <a href="#" class="text-blue-500 underline">link ini</a> untuk pendataan.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Prosedur Pengajuan Reward Fakultas -->
            <div class="bg-white shadow-lg p-8 rounded-b-xl">
                <div class="flex justify-between items-center cursor-pointer" id="dropdownHeaderReward">
                    <h3 class="text-2xl font-semibold text-black">Prosedur Pengajuan Reward Fakultas</h3>
                    <svg id="arrowIconReward" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <ul id="dropdownContentReward" class="list-decimal mt-6 ml-6 space-y-6 hidden">
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            1
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Pilih lomba yang ingin diikuti</h4>
                            <p class="text-gray-600">Pilih lomba sesuai minat dan bakat Anda. Klik <a href="#"
                                    class="text-blue-500 underline">di sini</a> untuk informasi lomba terbaru.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            2
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Pilih dan hubungi dosen pembimbing</h4>
                            <p class="text-gray-600">Hubungi dosen sesuai dengan topik lomba. Lihat informasi dosen
                                pembimbing <a href="#" class="text-blue-500 underline">di sini</a>.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            3
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Daftarkan diri ke lomba</h4>
                            <p class="text-gray-600">Daftarkan diri atau tim ke lomba yang diinginkan. Semangat dan
                                semoga berhasil!</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            4
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg text-gray-800">Melakukan pendataan fakultas</h4>
                            <p class="text-gray-600">Lakukan pendataan fakultas untuk mencatat partisipasi lomba. Klik
                                <a href="#" class="text-blue-500 underline">link ini</a> untuk pendataan.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        const sections = [{
                header: 'dropdownHeader',
                content: 'dropdownContent'
            },
            {
                header: 'dropdownHeaderPrestasi',
                content: 'dropdownContentPrestasi'
            },
            {
                header: 'dropdownHeaderReward',
                content: 'dropdownContentReward'
            }
        ];

        sections.forEach(section => {
            document.getElementById(section.header).addEventListener('click', function() {
                document.getElementById(section.content).classList.toggle('hidden');
            });
        });

        // Dropdown for Prosedur Pendaftaran Lomba
        const dropdownHeader = document.getElementById('dropdownHeader');
        const arrowIcon = document.getElementById('arrowIcon');

        dropdownHeader.addEventListener('click', function() {
            arrowIcon.classList.toggle('rotate-180');
        });

        // Dropdown for Prosedur Pendataan Prestasi Lomba
        const dropdownHeaderPrestasi = document.getElementById('dropdownHeaderPrestasi');
        const arrowIconPrestasi = document.getElementById('arrowIconPrestasi');

        dropdownHeaderPrestasi.addEventListener('click', function() {
            arrowIconPrestasi.classList.toggle('rotate-180');
        });

        const dropdownHeaderReward = document.getElementById('dropdownHeaderReward');
        const arrowIconReward = document.getElementById('arrowIconReward');

        dropdownHeaderReward.addEventListener('click', function() {
            arrowIconReward.classList.toggle('rotate-180');
        });
    </script>


</body>

</html>
