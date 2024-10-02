<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.jsx')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Dashboard Admin IPrestasi</title>
</head>

<body>
    <div class="flex flex-col h-screen">
        <!-- Header -->
        <header class="bg-white shadow flex justify-between items-center p-4">
            <h2 class="text-2xl font-bold text-gray-800">¡Prestasi</h2>
            <div class="flex items-center">
                <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-200 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14c-3.313 0-6-2.686-6-6s2.687-6 6-6 6 2.686 6 6-2.687 6-6 6zm0 2c4.418 0 8 2.686 8 6v2H4v-2c0-3.314 3.582-6 8-6z" />
                    </svg>
                    Profile
                </a>
            </div>
        </header>

        <div class="flex flex-1">
            <!-- Sidebar -->
            <div class="bg-gray-100 w-64 min-h-screen border-r-2 border-gray-300">
                <nav class="mt-6">
                    <ul>
                        <li class="px-4 py-2 rounded-md hover:bg-gray-200">
                            <a href="#" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li class="px-4 py-2 rounded-md hover:bg-gray-200">
                            <a href="#" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                                Laporan
                            </a>
                        </li>
                        <li class="px-4 py-2 rounded-md hover:bg-gray-200">
                            <a href="#" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2a3 3 0 01-3-3V9a3 3 0 013-3h1v2a4 4 0 01.537.883A7 7 0 0111 7h4a7 7 0 014 0z" />
                                </svg>
                                Pengaturan
                            </a>
                        </li>
                        <!-- Logout Button -->
                        <li class="px-4 py-2 rounded-md hover:bg-gray-200 mt-4">
                            <a href="#" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405a7.002 7.002 0 00-9.127-9.127L8 7h5m0 10H8m7-7h-7m7 0l-3-3m3 3l-3 3" />
                                </svg>
                                Keluar
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="flex-1 p-4 border-l-2 border-gray-300">
                <div class="flex h-[120px] justify-start items-center gap-4">
                    <div
                        class="flex-grow h-[120px] p-4 bg-white rounded-lg border border-[#d1d3d8] flex items-center gap-6">
                        <div class="relative w-[87px] h-[87px]">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#fe632e] to-[#ffcab9] rounded"></div>
                            <img src="img/piala.png" alt="Icon" class="absolute w-14 h-14 left-4 top-4 rounded" />
                        </div>
                        
                        <div class="flex flex-col justify-center items-center gap-1">
                            <div class="text-[#2d3036] text-lg font-medium leading-7">LOMBA</div>
                            <div class="flex flex-col justify-start items-center h-14">
                                <div class="text-[#2d3036] text-4xl font-medium leading-10">36/50</div>
                                <div class="text-[#898e99] text-xs font-normal leading-none">Pendaftar/Pemenang</div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex-grow h-[120px] p-4 bg-white rounded-lg border border-[#d1d3d8] flex items-center gap-6">
                        <div class="relative w-[87px] h-[87px]">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#fe632e] to-[#ffcab9] rounded"></div>
                            <div class="absolute w-14 h-14 left-4 top-4"></div> <!-- Placeholder for the icon -->
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1">
                            <div class="text-[#2d3036] text-lg font-medium leading-7">BEASISWA</div>
                            <div class="flex flex-col justify-start items-center h-14">
                                <div class="text-[#2d3036] text-4xl font-medium leading-10">36/50</div>
                                <div class="text-[#898e99] text-xs font-normal leading-none">Pendaftar/Lolos</div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex-grow h-[120px] p-4 bg-white rounded-lg border border-[#d1d3d8] flex items-center gap-6">
                        <div class="relative w-[87px] h-[87px]">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#fe632e] to-[#ffcab9] rounded"></div>
                            <div class="absolute w-14 h-14 left-4 top-4"></div> <!-- Placeholder for the icon -->
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1">
                            <div class="text-[#2d3036] text-lg font-medium leading-7">PENGABDIAN MASYARAKAT</div>
                            <div class="flex flex-col justify-start items-center h-14">
                                <div class="text-[#2d3036] text-4xl font-medium leading-10">36/50</div>
                                <div class="text-[#898e99] text-xs font-normal leading-none">Pendaftar/Lolos</div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex-grow h-[120px] p-4 bg-white rounded-lg border border-[#d1d3d8] flex items-center gap-6">
                        <div class="relative w-[87px] h-[87px]">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#fe632e] to-[#ffcab9] rounded"></div>
                            <div class="absolute w-14 h-14 left-4 top-4"></div> <!-- Placeholder for the icon -->
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1">
                            <div class="text-[#2d3036] text-lg font-medium leading-7">PENELITIAN</div>
                            <div class="flex flex-col justify-start items-center h-14">
                                <div class="text-[#2d3036] text-4xl font-medium leading-10">36/50</div>
                                <div class="text-[#898e99] text-xs font-normal leading-none">Pendaftar/Lolos</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
