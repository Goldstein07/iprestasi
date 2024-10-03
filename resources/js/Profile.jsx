import React from 'react'

const Profile = () => {
    return (
    <div>
    <header class="w-full h-16 px\-4 md:px-10 py-4 bg-white shadow-md flex items-center justify-between">
        <div class="flex items-center gap-4">
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

            <nav class="hidden md:flex items-center gap-6">
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Home</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Lomba</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Beasiswa</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Pengabdian
                    Masyarakat</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Penelitian</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">Pendataan</a>
                <a href="#" class="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]">FAQ</a>
            </nav>
        </div>
        <img class="w-6 h-6 md:w-8 md:h-8 rounded-full ml-auto" src="/img/profile.png" alt="User Profile" />
    </header>


    <div class="flex justify-start items-center gap-5 px-8 py-4">
        
        <div class="w-[534px] flex flex-col gap-4"></div>
    </div>

 
    <div class="flex justify-center">
        <div class="flex flex-col w-[80%] max-w-[1340px]">
            <h3 class="font-['Inter'], font-semibold">Optimalisasi Aplikasi E-Commerce sebagai Upaya untuk Meningkatkan
                Promosi Batik Paoman</h3>
            <p class="font-['Inter'], mb-6">Desa Pabean Udik, Indramayu, Indonesia</p>
            <div class="mb-4">
                <h3 class="font-['Inter'], font-semibold">Batas Pendaftaran</h3>
                <div class="flex items-center">
                    <img src="img/calendar.png" alt="Calendar" class="w-6 h-6 mr-2"/>
                    <p class="text-gray-700">1 Juni 2024 - 31 Juni 2024</p>
                </div>
            </div>
            <h3 class="font-['Inter'], font-semibold">Total Mahasiswa yang Dibutuhkan</h3>
            <p class="mb-6">4 oarng mahasiswa</p>
            <h3 class="font-['Inter'], font-semibold">Total Mahasiswa yang Dibutuhkan</h3>
            <p>1. Erly Krisnanik S.Kom., MM.</p>
            <p class="mb-6">2. Ika Nurlaili, S.Kom,M.Sc.</p>
            <p class="text-justify, mb-10">Pada kegiatan pengabdian masyarakat ini, mahasiswa akan turut serta membantu
                membimbing dan mengarahkan masyarakat Desa Pabean Udik,
                Indramayu dalam menggunakan aplikasi E-Commerce. Kami juga membutuhkan mahasiswa yang dapat membantu
                dalam dokumentasi pada saat
                kegiatan berlangsung dan juga dapat membuatan sertifikat.</p>
            <div class="flex justify-end">
                <button class="px-20 py-2 bg-[#61c15d] rounded-lg text-white text-sm font-semibold">
                    Surat Tugas
                </button>
            </div>
        </div>
    </div>
    </div>
)
}

export default Profile