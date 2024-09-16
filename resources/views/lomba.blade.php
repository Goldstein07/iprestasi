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

<body>
    {{-- Navbar --}}
    <header class="w-full h-16 px-4 md:px-10 py-4 bg-white shadow-md flex items-center justify-between">
        <div class="flex items-center gap-4">
            <!-- Logo and Branding -->
            <div class="flex items-center gap-2 md:gap-4">
                <div class="w-8 h-8 md:w-10 md:h-10 bg-[#fe632e] rounded-full flex items-center justify-center">
                    <span class="text-white text-lg md:text-2xl font-semibold"></span>
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
                <a href="#"
                    class="px-3 py-1 md:px-4 md:py-2 bg-[#fe632e] text-white rounded-2xl text-sm md:text-base font-medium">Home</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Lomba</a>
                <a href="#"
                    class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Beasiswa</a>
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


    <div class="w-full px-4 md:px-10 py-6 mt-10">
        <div class="text-center mb-6">
            <span class="text-black text-4xl font-medium leading-10">Eksplor Informasi </span>
            <span class="text-[#fe632e] text-4xl font-medium leading-10">Lomba, Beasiswa, Pengabdian Masyarakat, </span>
            <span class="text-black text-4xl font-medium leading-10">dan </span>
            <br>
            <span class="text-[#fe632e] text-4xl font-medium leading-10">Penelitian</span>
            <span class="text-black text-4xl font-medium leading-10"> Sekarang!</span>
        </div>
    </div>

    <!-- Centered Search Box -->
    <div class="w-full max-w-lg mx-auto">
        <div class="flex gap-0.5">
            <div
                class="flex-grow px-2 py-1 bg-white rounded-tl-lg rounded-bl-lg border border-neutral-300 flex items-center">
                <input type="text" placeholder="Cari informasi.."
                    class="w-full px-2 py-1 text-gray-700 placeholder-gray-400 border-none rounded-tl-lg rounded-bl-lg focus:outline-none">
            </div>
            <button
                class="w-12 bg-neutral-50 rounded-tr-lg rounded-br-lg border border-neutral-300 flex items-center justify-center">
                <img src="/img/search.png" alt="Search Icon" class="w-5 h-5" />
            </button>
        </div>
    </div>

    {{-- Prosedure --}}
    <div class="w-full px-16 py-8 mt-10 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div
                class="CardInformasi px-6 py-8 bg-white rounded-2xl shadow border border-Primary-orange-500 flex flex-col items-start gap-3">
                <img class="w-14 h-11 object-contain" src="img/prosedurlomba.png" alt="Prosedur Lomba">
                <div class="Content flex flex-col gap-1">
                    <div class="ProsedurLomba text-gray-900 text-lg font-medium leading-7">Prosedur Lomba</div>
                    <div class="PelajariProsedurLomba text-gray-600 text-sm font-normal leading-tight">Pelajari prosedur
                        lomba agar setiap langkah dalam pencapaianmu selalu tercatat!</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="CardInformasi px-6 py-8 bg-white rounded-2xl shadow border border-Neutral-neutral-100 flex flex-col items-start gap-3">
                <img class="w-14 h-11 object-contain" src="img/prosedurbeasiswa.png" alt="Prosedur Beasiswa">
                <div class="Content flex flex-col gap-1">
                    <div class="ProsedurBeasiswa text-gray-900 text-lg font-medium leading-7">Prosedur Beasiswa</div>
                    <div class="PelajariProsedurBeasiswa text-gray-600 text-sm font-normal leading-tight">Pelajari
                        prosedur beasiswa agar setiap langkah menuju prestasimu selalu tercatat!</div>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="CardInformasi px-6 py-8 bg-white rounded-2xl shadow border border-Neutral-neutral-100 flex flex-col items-start gap-3">
                <img class="w-14 h-11 object-contain" src="img/prosedurabdimas.png"
                    alt="Prosedur Pengabdian Masyarakat">
                <div class="Content flex flex-col gap-1">
                    <div class="ProsedurPengabdianMasyarakat text-gray-900 text-lg font-medium leading-7">Prosedur
                        Pengabdian Masyarakat</div>
                    <div class="PelajariProsedurPengabdianMasyarakat text-gray-600 text-sm font-normal leading-tight">
                        Pelajari prosedur pengabdian masyarakat agar proses pendaftaranmu lebih lancar!</div>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="CardInformasi px-6 py-8 bg-white rounded-2xl shadow border border-Neutral-neutral-100 flex flex-col items-start gap-3">
                <img class="w-12 h-11 object-contain" src="img/prosedurpenelitian.png" alt="Prosedur Penelitian">
                <div class="Content flex flex-col gap-1">
                    <div class="ProsedurPenelitian text-gray-900 text-lg font-medium leading-7">Prosedur Penelitian
                    </div>
                    <div class="PelajariProsedurPenelitian text-gray-600 text-sm font-normal leading-tight">Pelajari
                        prosedur penelitian agar proses pendaftaranmu lebih lancar!</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Informasi Lomba --}}
    <div class="w-full flex flex-col gap-6 mb-12">
        <div class="w-full px-16 flex justify-between items-center">
            <h1 class="text-black text-2xl font-semibold">Informasi Lomba</h1>
            <a href="#" class="text-orange-500 text-base font-normal text-right">Lihat Semua</a>
        </div>

        <div class="w-full px-16 flex gap-6 overflow-x-auto">
            <!-- Card 1 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col gap-6 mb-12">
        <div class="w-full px-16 flex gap-6 overflow-x-auto">
            <!-- Card 1 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col gap-6 mb-12">
        <div class="w-full px-16 flex gap-6 overflow-x-auto">
            <!-- Card 1 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col gap-6 mb-12">
        <div class="w-full px-16 flex gap-6 overflow-x-auto">
            <!-- Card 1 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div
                class="w-[343px] h-[308px] p-4 bg-white rounded-xl border border-neutral-200 shadow-lg flex flex-col gap-2">
                <div class="w-full h-44 bg-gray-300 rounded-xl relative">
                    <div class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-0.5 rounded-2xl">Lomba
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-lg font-medium">INSPACE UI/UX</h2>
                    <p class="text-gray-500 text-sm">
                        Perlombaan UI/UX Design Nasional diadakan oleh Institut Teknologi Kalimantan
                    </p>
                    <div class="flex items-center gap-2">
                        <img src="img/waktu.png" alt="Jam" class="w-4 h-4 object-contain">
                        <span class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
