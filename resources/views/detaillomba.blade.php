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


    <div class="flex justify-start items-center gap-5 px-8 py-4">
        <!-- Left Section -->
        <div class="w-[534px] flex flex-col gap-4">
            <!-- Search Box -->
            <div class="w-full h-12 flex items-center">
                <div class="flex-grow flex items-center bg-gray-50 border border-gray-300 rounded-lg px-4 py-2">
                    <div class="w-4 h-4"></div>
                    <input class="flex-grow bg-transparent text-gray-500 text-sm outline-none" placeholder="Search" />
                    <div class="w-3 h-3"></div>
                </div>
            </div>

            <!-- Cards Section -->
            <div class="flex flex-col gap-4">
                <div class="h-[159px] px-3 py-4 bg-white rounded-xl border border-neutral-100 flex gap-2">
                    <div class="w-[125px] h-[127px] relative">
                        <img src="img/upn.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                        <div class="absolute top-2 left-2 px-2 py-0.5 bg-blue-500 text-white text-xs font-semibold rounded-2xl"
                            style="top: 0px !important; left: 0px !important;">
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

            <div class="flex flex-col gap-4">
                <!-- Repeating Card -->
                <div class="h-[159px] px-3 py-4 bg-white rounded-xl border border-neutral-100 flex gap-2">
                    <div class="w-[125px] h-[127px] relative">
                        <img src="img/upn.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                        <div class="absolute top-2 left-2 px-2 py-0.5 bg-blue-500 text-white text-xs font-semibold rounded-2xl"
                            style="top: 0px !important; left: 0px !important;">
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

        <!-- Sidebar Divider -->
        <div class="flex items-start">
            <div class="w-2 h-full bg-gray-300 rounded-lg"></div>
        </div>
    </div>



</body>

</html>
