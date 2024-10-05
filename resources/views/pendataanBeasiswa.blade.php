<html>
<head>
    <title>Pendataan Beasiswa</title>
    <script src="https://unpkg.com/react/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div id="root"></div>
    <script type="text/babel">
        function App() {
            return (
                <div className="min-h-screen flex flex-col items-center">
                    <header className="w-full bg-white shadow">
                        <div className="container mx-auto flex justify-between items-center py-4 px-6">
                            <div className="flex items-center">
                                <div className="text-orange-500 text-2xl font-bold">iPrestasi</div>
                                <nav className="ml-10 space-x-4">
                                    <a href="#" className="text-gray-600 hover:text-gray-900">Home</a>
                                    <a href="#" className="text-gray-600 hover:text-gray-900">Lomba</a>
                                    <a href="#" className="text-gray-600 hover:text-gray-900">Beasiswa</a>
                                    <a href="#" className="text-gray-600 hover:text-gray-900">Pengabdian Masyarakat</a>
                                    <a href="#" className="text-gray-600 hover:text-gray-900">Penelitian</a>
                                    <a href="#" className="text-orange-500 font-semibold">Pendataan</a>
                                    <a href="#" className="text-gray-600 hover:text-gray-900">FAQ</a>
                                </nav>
                            </div>
                            <div className="flex items-center">
                                <img src="https://placehold.co/40x40" alt="User Avatar" className="rounded-full"/>
                            </div>
                        </div>
                    </header>
                    <main className="flex-grow container mx-auto py-12 px-6">
                        <div className="bg-white shadow-md rounded-lg p-8 max-w-[1200px] mx-auto">
                            <h1 className="text-2xl font-semibold text-center mb-6">Pendataan Beasiswa</h1>
                            <div className="flex justify-center mb-8">
                                <button className="bg-gray-200 text-gray-700 py-2 px-4 rounded-l-lg">Daftar</button>
                                <button className="bg-green-500 text-white py-2 px-4 rounded-r-lg">Lolos</button>
                            </div>
                            <div className="mb-8">
                                <h2 className="text-xl font-semibold mb-4">Biodata Mahasiswa</h2>
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label className="block text-gray-700">NIM</label>
                                        <input type="text" value="2105101003" className="w-full border rounded-lg p-2 mt-1" readOnly/>
                                    </div>
                                    <div>
                                        <label className="block text-gray-700">Nama</label>
                                        <input type="text" value="Andi Setiawan" className="w-full border rounded-lg p-2 mt-1" readOnly/>
                                    </div>
                                    <div>
                                        <label className="block text-gray-700">Program Studi</label>
                                        <input type="text" value="S1 Sistem Informasi" className="w-full border rounded-lg p-2 mt-1" readOnly/>
                                    </div>
                                    <div>
                                        <label className="block text-gray-700">Angkatan</label>
                                        <input type="text" value="2021" className="w-full border rounded-lg p-2 mt-1" readOnly/>
                                    </div>
                                </div>
                            </div>
                            <div className="mb-8">
                                <h2 className="text-xl font-semibold mb-4">Data Prestasi Mahasiswa</h2>
                                <div className="mb-4">
                                    <label className="block text-gray-700">Nama Beasiswa *</label>
                                    <input type="text" placeholder="Contoh: Lomba Karya Tulis Ilmiah Nasional Tahun 2017" className="w-full border rounded-lg p-2 mt-1"/>
                                </div>
                                <div className="mb-4">
                                    <label className="block text-gray-700">Jenis Beasiswa *</label>
                                    <select className="w-full border rounded-lg p-2 mt-1">
                                        <option>Pilih Jenis Beasiswa</option>
                                    </select>
                                </div>
                                <div className="mb-4">
                                    <label className="block text-gray-700">Penyelenggara *</label>
                                    <input type="text" placeholder="Tuliskan penyelenggara kegiatan..." className="w-full border rounded-lg p-2 mt-1"/>
                                </div>
                                <div className="mb-4">
                                    <label className="block text-gray-700">Waktu Pelaksanaan *</label>
                                    <div className="flex items-center">
                                        <i className="far fa-calendar-alt text-gray-500 mr-2"></i>
                                        <input type="text" placeholder="Klik dua kali pada tanggal yang sama apabila waktu pelaksanaan hanya 1 hari." className="w-full border rounded-lg p-2 mt-1"/>
                                    </div>
                                </div>
                                <div className="mb-4">
                                    <label className="block text-gray-700">Deskripsi Kegiatan *</label>
                                    <textarea placeholder="Write text here..." className="w-full border rounded-lg p-2 mt-1"></textarea>
                                </div>
                            </div>
                            <div className="mb-8">
                                <h2 className="text-xl font-semibold mb-4">Dokumen Pendukung</h2>
                                <div className="border-dashed border-2 border-gray-300 rounded-lg p-4 text-center">
                                    <p className="text-gray-500">Click to upload or drag and drop</p>
                                    <p className="text-gray-500">Max. file size: 1MB</p>
                                    <button className="bg-green-500 text-white py-2 px-4 rounded-lg mt-4">Browse File</button>
                                </div>
                                <ul className="text-gray-500 text-sm mt-4">
                                    <li>Bukti scan berupa Piagam/Sertifikat/Penghargaan atau yang menunjukkan hasil prestasi yang telah diikuti dengan tampak basah.</li>
                                    <li>Scan hasil yang diunggah dapat lebih dari satu file.</li>
                                    <li>Tipe file yang dapat diunggah antara lain: .jpg, .jpeg, .png, .pdf.</li>
                                    <li>Ukuran masing-masing file maksimal 1MB.</li>
                                </ul>
                            </div>
                            <div className="mb-8">
                                <h2 className="text-xl font-semibold mb-4">Pernyataan Legalitas</h2>
                                <div className="flex items-start">
                                    <input type="checkbox" className="mt-1"/>
                                    <p className="ml-2 text-gray-700">Saya menyatakan bahwa data yang terunggah adalah sesuai dengan aslinya dan data yang saya isikan benar. Apabila suatu hari ditemukan data yang tidak benar maka saya bersedia menerima sanksi sesuai ketentuan yang berlaku.</p>
                                </div>
                            </div>
                            <div className="text-center">
                                <button className="bg-orange-500 text-white py-2 px-6 rounded-lg">Submit</button>
                            </div>
                        </div>
                    </main>
                </div>
            );
        }

        ReactDOM.render(<App />, document.getElementById('root'));
    </script>
</body>
</html>