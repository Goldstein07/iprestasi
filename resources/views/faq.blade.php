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
                <a href="#" class="px-3 py-1 md:px-4 md:py-2 bg-[#fe632e] text-white rounded-2xl text-sm md:text-base font-medium">FAQ</a>
            </nav>
        </div>
        <img class="w-6 h-6 md:w-8 md:h-8 rounded-full ml-auto" src="/img/profile.png" alt="User Profile" />
    </header>

    <div class="absolute inset-0 z-0 flex justify-center mt-16">
        <img src="img/bgfaq1.png" alt="Deskripsi gambar" class="w-full max-h-[200px] rounded-md">
    </div>
    
    <main class="container max-w-4xl mx-auto py-20 px-6 relative z-10">
        <section class="mb-10">
            <h2 class="text-2xl font-bold mb-4">
                Prosedur Lomba
            </h2>
            <div class="bg-white shadow-md rounded-lg">
                <div class="border-b border-gray-200">
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pendaftaran Lomba
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="border-b border-gray-200">
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pendataan Prestasi Lomba
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>                                               
                    </button>
                </div>
                <div>
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pengajuan Reward Fakultas
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
        <section class="mb-10">
            <h2 class="text-2xl font-bold mb-4">
                Prosedur Beasiswa
            </h2>
            <div class="bg-white shadow-md rounded-lg">
                <div class="border-b border-gray-200">
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pendaftaran Lomba
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="border-b border-gray-200">
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pendataan Prestasi Lomba
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div>
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pengajuan Reward Fakultas
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
        <section class="mb-10">
            <h2 class="text-2xl font-bold mb-4">
                Prosedur Pengabdian Masyarakat
            </h2>
            <div class="bg-white shadow-md rounded-lg">
                <div class="border-b border-gray-200">
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pendaftaran Lomba
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="border-b border-gray-200">
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pendataan Prestasi Lomba
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div>
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pengajuan Reward Fakultas
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
        <section>
            <h2 class="text-2xl font-bold mb-4">
                Prosedur Penelitian
            </h2>
            <div class="bg-white shadow-md rounded-lg">
                <div class="border-b border-gray-200">
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pendaftaran Lomba
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="border-b border-gray-200">
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pendataan Prestasi Lomba
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div>
                    <button
                        class="w-full text-left px-6 py-4 text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        Prosedur Pengajuan Reward Fakultas
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
    </main>
    <img src="img/bgfaq2.png" alt="Deskripsi gambar" class="absolute inset-x-0 bottom-0 w-full max-h-[300px] rounded-md z-0">
</body>

</html>
