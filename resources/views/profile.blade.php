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
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Home</a>
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
    <!-- Profile -->
    <main class="container mx-auto p-12 mb-12">
        <h2 class="text-xl font-semibold mb-4">Profil</h2>
        <div class="bg-white border border-neutral-100 shadow-md rounded-md p-4">
            <div class="self-stretch h-[196px] py-2.5 flex-col justify-start items-start gap-2.5 flex">
                <div class="self-stretch justify-center items-center gap-14 inline-flex">
                    <img class="w-44 h-44 rounded-full" src="/img/profile.png" />
                    <div
                        class="grow shrink basis-0 h-[165px] bg-white rounded-lg border border-[#d1d3d8] justify-start items-center flex">
                        <div
                            class="w-[179px] self-stretch px-4 bg-[#ffefea] rounded-tl-lg rounded-bl-lg flex-col justify-start items-start inline-flex">
                            <div
                                class="self-stretch grow shrink basis-0 py-3 justify-start items-center gap-2 inline-flex">
                                <div class="text-[#2d3036] text-sm font-semibold font-['Inter'] leading-tight">NIM</div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 py-3 justify-start items-center gap-2 inline-flex">
                                <div class="text-[#2d3036] text-sm font-semibold font-['Inter'] leading-tight">Nama
                                </div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 py-3 justify-start items-center gap-2 inline-flex">
                                <div class="text-[#2d3036] text-sm font-semibold font-['Inter'] leading-tight">Program
                                    Studi</div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 py-3 justify-start items-center gap-2 inline-flex">
                                <div class="text-[#2d3036] text-sm font-semibold font-['Inter'] leading-tight">Angkatan
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-[500px] self-stretch px-4 rounded-md flex-col justify-start items-start inline-flex">
                            <div
                                class="self-stretch grow shrink basis-0 py-3 justify-start items-center gap-2 inline-flex">
                                <div class="text-[#2d3036] text-sm font-normal font-['Inter'] leading-tight">2110512020
                                </div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 py-3 justify-start items-center gap-2 inline-flex">
                                <div class="text-[#2d3036] text-sm font-normal font-['Inter'] leading-tight">Khaliza
                                    Fania</div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 py-3 justify-start items-center gap-2 inline-flex">
                                <div class="text-[#2d3036] text-sm font-normal font-['Inter'] leading-tight">S1 Sistem
                                    Informasi</div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 py-3 justify-start items-center gap-2 inline-flex">
                                <div class="text-[#2d3036] text-sm font-normal font-['Inter'] leading-tight">2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Catatan Keaktifan -->
        <h2 class="text-xl font-semibold mb-6 mt-8">Catatan Keaktifan</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div
                class="bg-white border-2 border-neutral-200 rounded-lg p-6 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-500 ml-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                        d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-3 9 3M9 10h6M9 21h6" />
                </svg>
                <div class="ml-16 text-center">
                    <p class="font-semibold">LOMBA</p>
                    <p class="text-[#2d3036] text-2xl font-medium leading-10">36/50</p>
                    <p class="text-gray-600 text-xs">Daftar/Menang</p>
                </div>
            </div>
            <div
                class="bg-white border-2 border-neutral-200 rounded-lg p-6 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500 ml-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                        d="M15.232 5.232l3.536 3.536m-2.031 2.031L9 6.707v10.586a1 1 0 001.414 1.414l10.586-10.586m-3.536-3.536L13.697 6.44l-3.536 3.536" />
                </svg>
                <div class="ml-16 text-center">
                    <p class="font-semibold">BEASISWA</p>
                    <p class="text-[#2d3036] text-2xl font-medium leading-10">36/50</p>
                    <p class="text-gray-600 text-xs">Daftar/Menang</p>
                </div>
            </div>
            <div
                class="bg-white border-2 border-neutral-200 rounded-lg p-6 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-yellow-500 ml-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-12 0v1z" />
                </svg>
                <div class="ml-16 text-center">
                    <p class="font-semibold">ABDIMAS</p>
                    <p class="text-[#2d3036] text-2xl font-medium leading-10">36/50</p>
                    <p class="text-gray-600 text-xs">Daftar/Lolos</p>
                </div>
            </div>
            <div
                class="bg-white border-2 border-neutral-200 rounded-lg p-6 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-purple-500 ml-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                        d="M12 19l9 2-9-18-9 18 9-2zm-5-10v5a5 5 0 005 5h3a5 5 0 00-5-5v-5m0-5h5v5a5 5 0 01-5 5h-3a5 5 0 01-5-5v-5m0 0h-5v5a5 5 0 005 5h3a5 5 0 005-5v-5" />
                </svg>
                <div class="ml-16 text-center">
                    <p class="font-semibold">PENELITIAN</p>
                    <p class="text-[#2d3036] text-2xl font-medium leading-10">36/50</p>
                    <p class="text-gray-600 text-xs">Daftar/Menang</p>
                </div>
            </div>
        </div>

        <!-- Riwayat Kegiatan Penelitian dan Pengabdian Masyarakat -->
        <h2 class="text-xl font-semibold mb-4 mt-8">Riwayat Kegiatan Penelitian dan Pengabdian Masyarakat</h2>
        <div class="grid grid-cols-3 gap-4">
            <div class="h-[159px] px-3 py-4 bg-white border border-neutral-100 shadow-md rounded-md flex gap-2">
                <div class="w-[125px] h-[127px] relative">
                    <img src="img/logobem.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                    <div class="absolute top-2 left-2 bg-yellow-500 text-white text-xs px-2 py-0.5 rounded-2xl">
                        Abdimas
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
                        <img src="img/waktu.png" alt="Icon Time" class="w-4 h-4">
                        <div class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</div>
                    </div>
                </div>
            </div>
            <div class="h-[159px] px-3 py-4 bg-white shadow-md rounded-md border border-neutral-100 flex gap-2">
                <div class="w-[125px] h-[127px] relative">
                    <img src="img/logobem.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                    <div class="absolute top-2 left-2 bg-purple-500 text-white text-xs px-2 py-0.5 rounded-2xl">
                        Penelitian
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
                        <img src="img/waktu.png" alt="Icon Time" class="w-4 h-4">
                        <div class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</div>
                    </div>
                </div>
            </div>
            <div class="h-[159px] px-3 py-4 bg-white shadow-md rounded-md border border-neutral-100 flex gap-2">
                <div class="w-[125px] h-[127px] relative">
                    <img src="img/logobem.png" alt="Deskripsi gambar" class="w-full h-full object-cover rounded-xl">
                    <div class="absolute top-2 left-2 bg-yellow-500 text-white text-xs px-2 py-0.5 rounded-2xl">
                        Abdimas
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
                        <img src="img/waktu.png" alt="Icon Time" class="w-4 h-4">
                        <div class="text-orange-500 text-xs font-medium leading-tight">20 Sep 2024</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
