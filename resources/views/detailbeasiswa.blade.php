<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.jsx')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Detail Beasiswa</title>
</head>

<body class="bg-gray-50">
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
                    class="px-3 py-1 md:px-4 md:py-2 bg-[#fe632e] text-white rounded-2xl text-sm md:text-base font-medium">Beasiswa</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Pengabdian
                    Masyarakat</a>
                <a href="#"
                    class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Penelitian</a>
                <a href="#"
                    class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Pendataan</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">FAQ</a>
            </nav>
        </div>
        <img class="w-6 h-6 md:w-8 md:h-8 rounded-full ml-auto" src="/img/profile.png" alt="User Profile" />
    </header>

    <div class="flex flex-col md:flex-row mt-6">
        <!-- New Sidebar Section -->
        <div class="md:w-1/3 px-8 py-4 overflow-y-auto" style="max-height: 90vh;">
            <!-- Search Box -->
            <div class="w-full h-12 flex items-center mb-6">
                <div class="flex-grow flex items-center bg-gray-50 border border-gray-300 rounded-lg px-4 py-2">
                    <input class="flex-grow bg-transparent text-gray-500 text-sm outline-none" placeholder="Search" />
                </div>
            </div>

            <!-- Cards Section -->
            <div class="flex flex-col gap-4">
                <div class="h-[159px] px-3 py-4 bg-white rounded-xl border border-neutral-100 flex gap-2">
                    <div class="w-[125px] h-[127px] relative">
                        <img src="img/logobem.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                        <div
                            class="absolute top-2 left-2 px-2 py-0.5 bg-blue-500 text-white text-xs font-semibold rounded-2xl">
                            Lomba
                        </div>
                    </div>
                    <div class="flex flex-col justify-start gap-2 w-[319px]">
                        <div class="text-black text-lg font-medium leading-7">
                            INSPACE UI/UX
                        </div>
                        <div class="text-gray-500 text-sm font-normal leading-tight">
                            Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="img/waktu.png" alt="Icon" class="w-4 h-4">
                            <div class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</div>
                        </div>
                    </div>
                </div>
                <div class="h-[159px] px-3 py-4 bg-white rounded-xl border border-neutral-100 flex gap-2">
                    <div class="w-[125px] h-[127px] relative">
                        <img src="img/logobem.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                        <div
                            class="absolute top-2 left-2 px-2 py-0.5 bg-blue-500 text-white text-xs font-semibold rounded-2xl">
                            Lomba
                        </div>
                    </div>
                    <div class="flex flex-col justify-start gap-2 w-[319px]">
                        <div class="text-black text-lg font-medium leading-7">
                            INSPACE UI/UX
                        </div>
                        <div class="text-gray-500 text-sm font-normal leading-tight">
                            Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="img/waktu.png" alt="Icon" class="w-4 h-4">
                            <div class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</div>
                        </div>
                    </div>
                </div>
                <div class="h-[159px] px-3 py-4 bg-white rounded-xl border border-neutral-100 flex gap-2">
                    <div class="w-[125px] h-[127px] relative">
                        <img src="img/logobem.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                        <div
                            class="absolute top-2 left-2 px-2 py-0.5 bg-blue-500 text-white text-xs font-semibold rounded-2xl">
                            Lomba
                        </div>
                    </div>
                    <div class="flex flex-col justify-start gap-2 w-[319px]">
                        <div class="text-black text-lg font-medium leading-7">
                            INSPACE UI/UX
                        </div>
                        <div class="text-gray-500 text-sm font-normal leading-tight">
                            Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="img/waktu.png" alt="Icon" class="w-4 h-4">
                            <div class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</div>
                        </div>
                    </div>
                </div>
                <div class="h-[159px] px-3 py-4 bg-white rounded-xl border border-neutral-100 flex gap-2">
                    <div class="w-[125px] h-[127px] relative">
                        <img src="img/logobem.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                        <div
                            class="absolute top-2 left-2 px-2 py-0.5 bg-blue-500 text-white text-xs font-semibold rounded-2xl">
                            Lomba
                        </div>
                    </div>
                    <div class="flex flex-col justify-start gap-2 w-[319px]">
                        <div class="text-black text-lg font-medium leading-7">
                            INSPACE UI/UX
                        </div>
                        <div class="text-gray-500 text-sm font-normal leading-tight">
                            Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="img/waktu.png" alt="Icon" class="w-4 h-4">
                            <div class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</div>
                        </div>
                    </div>
                </div>
                <div class="h-[159px] px-3 py-4 bg-white rounded-xl border border-neutral-100 flex gap-2">
                    <div class="w-[125px] h-[127px] relative">
                        <img src="img/logobem.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                        <div
                            class="absolute top-2 left-2 px-2 py-0.5 bg-blue-500 text-white text-xs font-semibold rounded-2xl">
                            Lomba
                        </div>
                    </div>
                    <div class="flex flex-col justify-start gap-2 w-[319px]">
                        <div class="text-black text-lg font-medium leading-7">
                            INSPACE UI/UX
                        </div>
                        <div class="text-gray-500 text-sm font-normal leading-tight">
                            Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="img/waktu.png" alt="Icon" class="w-4 h-4">
                            <div class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</div>
                        </div>
                    </div>
                </div>
                <div class="h-[159px] px-3 py-4 bg-white rounded-xl border border-neutral-100 flex gap-2">
                    <div class="w-[125px] h-[127px] relative">
                        <img src="img/logobem.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                        <div
                            class="absolute top-2 left-2 px-2 py-0.5 bg-blue-500 text-white text-xs font-semibold rounded-2xl">
                            Lomba
                        </div>
                    </div>
                    <div class="flex flex-col justify-start gap-2 w-[319px]">
                        <div class="text-black text-lg font-medium leading-7">
                            INSPACE UI/UX
                        </div>
                        <div class="text-gray-500 text-sm font-normal leading-tight">
                            Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="img/waktu.png" alt="Icon" class="w-4 h-4">
                            <div class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="md:w-2/3 p-8 overflow-y-auto" style="max-height: 90vh;">
            <h1 class="text-3xl font-bold mb-4">GDSC Forward: Pixels Challenge</h1>
            <div class="mb-4">
                <h2 class="text-lg mb-2">Diunggah oleh</h2>
                <div class="flex items-center">
                    <img src="img/logobem.png" class="w-10 h-10 rounded-full mr-2" alt="Profile Picture">
                    <div>
                        <p class="text-gray-700 font-bold">BEMF-IK UPNVJ</p>
                        <p class="text-gray-500">1 Juni 2004</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-start mb-4">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Daftar</button>
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded ml-4">Buku
                    Panduan</button>
            </div>
            <div class="flex justify-start mb-4">
                <img src="img/poster.jpeg" alt="Deskripsi gambar"
                    class="w-full max-h-[300px] object-cover rounded-md">
            </div>
            <div class="mb-4">
                <h2 class="text-lg font-bold mb-2">Batas Pendaftaran</h2>
                <div class="flex items-center">
                    <img src="img/calender.png" alt="Deskripsi gambar" class="w-6 h-6 mr-2">
                    <p class="text-gray-700">1 Juni 2024 - 31 Juni 2024</p>
                </div>
            </div>
            <p class="text-gray-700 mb-4">PIXELS Challenge merupakan sebuah acara yang bertujuan untuk menggabungkan
                konsep desain UI/UX dengan tujuan pembangunan berkelanjutan (SDGs) yang diusung oleh PBB. Dengan
                memanfaatkan kekuatan kreativitas dan teknologi, PIXELS Challenge mendorong para peserta untuk
                mengeksplorasi ide-ide inovatif dan solusi-solusi praktis dalam memecahkan berbagai masalah yang terkait
                dengan SDGs.</p>
            <p class="text-gray-700 mb-4">Melalui serangkaian workshop, sesi pembicara, dan tantangan desain, acara ini
                akan memberikan platform bagi para desainer, pengembang, mahasiswa, dan pemangku kepentingan lainnya
                untuk berkolaborasi, belajar, dan menciptakan solusi yang bermakna dan berdampak positif bagi masyarakat
                global.</p>
            <p class="text-gray-700 mb-4">Dengan kompetisi ini, peserta akan diberi kesempatan untuk merancang proyek
                yang sesuai dengan tema SDGs yang mereka pilih. Proyek tersebut harus mencerminkan prinsip-prinsip
                keberlanjutan dan memperhatikan aspek sosial, ekonomi, dan lingkungan.</p>
            <p class="text-gray-700 mb-4">Tim juri yang terdiri dari pakar industri dan akademisi akan menilai proyek
                berdasarkan kriteria seperti inovasi, kegunaan, dampak, dan keselarasan dengan SDGs. Peserta terbaik
                akan mendapatkan hadiah menarik dan kesempatan untuk mengembangkan proyek mereka lebih lanjut.</p>
            <div class="mb-4">
                <h2 class="text-lg font-bold mb-2">Penyelenggara</h2>
                <p class="text-gray-700">Google Developer Student Club STT-NF</p>
            </div>
        </div>
    </div>
</body>

</html>
