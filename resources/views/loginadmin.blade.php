<!DOCTYPE html>
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

<body class="bg-orange-500 h-screen flex items-center justify-center relative">

    <!-- Background Image -->
    <div class="absolute inset-0 z-0 flex justify-center items-center">
        <img src="img/bgloginadmin.png" alt="Deskripsi gambar" class="w-full h-full object-cover">
    </div>

    <!-- Logo and Faculty Information -->
    <div class="absolute top-5 left-5 flex items-center space-x-3">
        <img src="img/upn.png" alt="Logo" class="w-12">
        <h1 class="text-white font-bold text-xl leading-tight">
            FAKULTAS ILMU KOMPUTER<br>UPN VETERAN JAKARTA
        </h1>
    </div>

    <!-- Application Name -->
    <div class="absolute top-5 right-12">
        <h1 class="text-white font-bold text-3xl">iPrestasi</h1>
    </div>

    <!-- Login Form Container -->
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3 lg:w-1/4 p-8 absolute z-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Selamat Datang, Admin!</h2>

        <!-- Login Form -->
        <form action="#" method="POST">

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                <input type="email" id="email" name="email" value="ava.wright@gmail.com" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                           focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi *</label>
                <input type="password" id="password" name="password" value="ava.wright@gmail.com" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                           focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full py-2 px-4 bg-orange-500 text-white font-semibold rounded-md shadow 
                       hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 
                       focus:ring-opacity-50">
                Masuk
            </button>
        </form>
    </div>

</body>

</html>
