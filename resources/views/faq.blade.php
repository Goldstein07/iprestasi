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

    <div class="w-full max-w-[1254px] mx-auto px-6 py-8 bg-gray-100">
        <!-- Title Section -->
        <div class="text-black text-2xl font-semibold font-['Inter'] leading-loose mb-8 text-center">
            Prosedur Lomba
        </div>
    
        <!-- Card Section -->
        <div class="w-full max-w-[600px] mx-auto bg-white rounded-3xl shadow-md border border-[#d1d3d8] flex flex-col gap-4 p-6">
            <!-- Card Item -->
            <div class="flex flex-col gap-4 px-6 py-6 border-b border-[#d1d3d8]">
                <div class="text-black text-lg font-medium font-['Inter'] leading-6">
                    Prosedur Pendaftaran Lomba
                </div>
                <div class="text-black text-lg font-medium font-['Inter'] leading-6">
                    Prosedur Pendataan Prestasi Lomba
                </div>
                <div class="text-black text-lg font-medium font-['Inter'] leading-6">
                    Prosedur Pengajuan Reward Fakultas
                </div>
            </div>
        </div>
    </div>

</body>

</html>
