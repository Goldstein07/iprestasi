<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.jsx')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>IPrestasi</title>
</head>

<body>
    <div class="w-full h-screen flex bg-white relative">
        <!-- Left Image Section -->
        <div class="w-1/2 h-full relative">
            <!-- Background Image -->
            <img class="w-full h-full object-cover" src="img/fik.png" alt="lb image" />

            <!-- Overlay -->
            <div class="absolute inset-0 bg-[#2d3036]/30"></div>

            <!-- Logo and Text Positioned Above the Image -->
            <div class="absolute top-0 left-0 p-12 flex items-center gap-4 z-10">
                <!-- z-10 ensures it's above the image -->
                <img class="w-16 h-16" src="{{ asset('img/upn.png') }}" alt="UPN Logo" />
                <div class="text-[#fcfcfc] text-2xl font-bold">
                    FAKULTAS ILMU KOMPUTER<br />
                    UPN VETERAN JAKARTA
                </div>
            </div>
        </div>

        <!-- Login Form -->
        <div class="w-1/2 h-full flex justify-center items-center relative z-10">
            <div class="absolute inset-0 z-0 flex justify-center">
                <img src="img/bglogin1.png" alt="Deskripsi gambar" class="w-full max-h-[600px] rounded-md">
            </div>
        
            <div class="absolute top-0 right-0 p-12 text-4xl font-bold z-10">
                <span class="text-[#2d3036]">i</span>
                <span class="text-[#fe632e]">Prestasi</span>
            </div>

            <div
                class="w-[598px] bg-white rounded-3xl border border-[#d1d3d8] p-12 shadow-lg flex flex-col items-center gap-6">
                <h1 class="text-[#2d3036] text-2xl font-medium">Selamat Datang, Fikers!</h1>

                <!-- Form Fields -->
                <form class="w-full space-y-6">
                    <!-- Email Field -->
                    <div>
                        <label class="block text-zinc-950 text-base font-medium mb-2">Email
                            <span class="text-red-600">*</span>
                        </label>
                        <input type="email" placeholder="ava.wright@gmail.com"
                            class="w-full px-4 py-3 bg-white border border-zinc-200 rounded-md text-base text-zinc-500 focus:outline-none focus:border-[#fe632e]">
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label class="block text-zinc-950 text-base font-medium mb-2">Kata Sandi
                            <span class="text-red-600">*</span>
                        </label>
                        <input type="password" placeholder="••••••••"
                            class="w-full px-4 py-3 bg-white border border-zinc-200 rounded-md text-base text-zinc-500 focus:outline-none focus:border-[#fe632e]">
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                        class="w-full px-6 py-3 bg-[#fe632e] text-white text-base font-medium rounded-lg hover:bg-[#e5571e] transition-colors">
                        Masuk
                    </button>
                </form>
            </div>
            <div class="absolute inset-x-0 bottom-0 z-0 flex justify-center">
                <img src="img/bglogin2.png" alt="Deskripsi gambar" class="w-full max-h-[300px] object-cover rounded-md">
            </div>
        </div>
    </div>
</body>

</html>
