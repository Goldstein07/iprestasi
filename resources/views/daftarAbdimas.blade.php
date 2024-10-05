<html>
<head>
    <title>Pendaftaran Pengabdian Masyarakat</title>
    <script src="https://unpkg.com/react/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body>
    <div id="root"></div>
    <script type="text/babel">
        const App = () => {
            return (
                <div className="min-h-screen bg-gray-100 flex flex-col items-center">
                    <header className="w-full bg-white shadow">
                        <div className="container mx-auto px-4 py-4 flex justify-between items-center">
                            <div className="text-orange-500 text-2xl font-bold">iPrestasi</div>
                            <nav className="space-x-4">
                                <a href="#" className="text-gray-700">Home</a>
                                <a href="#" className="text-gray-700">Lomba</a>
                                <a href="#" className="text-gray-700">Beasiswa</a>
                                <a href="#" className="text-orange-500 font-semibold">Pengabdian Masyarakat</a>
                                <a href="#" className="text-gray-700">Penelitian</a>
                                <a href="#" className="text-gray-700">Pendataan</a>
                                <a href="#" className="text-gray-700">FAQ</a>
                            </nav>
                            <div className="w-8 h-8 rounded-full bg-gray-300"></div>
                        </div>
                    </header>
                    <main className="container mx-auto px-4 py-8">
                        <div className="bg-white p-8 rounded-lg shadow-md max-w-[1200px] mx-auto">
                            <h1 className="text-2xl font-semibold mb-6 text-center">Pendaftaran Pengabdian Masyarakat</h1>
                            <section className="mb-6">
                                <h2 className="text-xl font-semibold mb-4">Biodata Mahasiswa</h2>
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label className="block text-gray-700">NIM</label>
                                        <div className="bg-gray-100 p-2 rounded">2101512020</div>
                                    </div>
                                    <div>
                                        <label className="block text-gray-700">Nama</label>
                                        <div className="bg-gray-100 p-2 rounded">Khaliza Fania</div>
                                    </div>
                                    <div>
                                        <label className="block text-gray-700">Program Studi</label>
                                        <div className="bg-gray-100 p-2 rounded">S1 Sistem Informasi</div>
                                    </div>
                                    <div>
                                        <label className="block text-gray-700">Angkatan</label>
                                        <div className="bg-gray-100 p-2 rounded">2021</div>
                                    </div>
                                </div>
                            </section>
                            <section className="mb-6">
                                <h2 className="text-xl font-semibold mb-4">Data Partisipasi Mahasiswa</h2>
                                <form>
                                    <div className="mb-4">
                                        <label className="block text-gray-700">Email*</label>
                                        <input type="email" className="w-full p-2 border rounded" placeholder="Bukan Delegasi dari ORMAWA" />
                                    </div>
                                    <div className="mb-4">
                                        <label className="block text-gray-700">Nomor Telepon/WA*</label>
                                        <input type="text" className="w-full p-2 border rounded" placeholder="Tuliskan nama dosen pembimbing/pendamping..." />
                                    </div>
                                    <div className="mb-4">
                                        <label className="block text-gray-700">KHS*</label>
                                        <input type="file" className="w-full p-2 border rounded" />
                                        <p className="text-gray-500 text-sm">Tipe file yang dapat diunggah adalah .pdf, dengan ukuran file maksimal 1MB.</p>
                                    </div>
                                    <div className="mb-4">
                                        <label className="block text-gray-700">CV*</label>
                                        <input type="file" className="w-full p-2 border rounded" />
                                        <p className="text-gray-500 text-sm">Tipe file yang dapat diunggah adalah .pdf, dengan ukuran file maksimal 1MB.</p>
                                    </div>
                                    <div className="mb-4">
                                        <label className="block text-gray-700">Portofolio*</label>
                                        <input type="file" className="w-full p-2 border rounded" />
                                        <p className="text-gray-500 text-sm">Tipe file yang dapat diunggah adalah .pdf, dengan ukuran file maksimal 1MB.</p>
                                    </div>
                                    <div className="mb-4">
                                        <label className="block text-gray-700">Foto 3x4*</label>
                                        <input type="file" className="w-full p-2 border rounded" />
                                        <p className="text-gray-500 text-sm">Tipe file yang dapat diunggah adalah .pdf, dengan ukuran file maksimal 1MB.</p>
                                    </div>
                                    <div className="mb-4">
                                        <label className="block text-gray-700">Pernyataan Legalitas</label>
                                        <div className="flex items-start">
                                            <input type="checkbox" className="mt-1" />
                                            <p className="ml-2 text-gray-700">Saya menyatakan bahwa data yang terunggah adalah sesuai dengan aslinya dan data yang saya isikan benar. Apabila suatu hari ditemukan data yang tidak benar maka saya bersedia menerima sanksi sesuai ketentuan yang berlaku.</p>
                                        </div>
                                    </div>
                                    <div className="text-center">
                                        <button type="submit" className="bg-orange-500 text-white px-4 py-2 rounded">Submit</button>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </main>
                </div>
            );
        };

        ReactDOM.render(<App />, document.getElementById('root'));
    </script>
</body>
</html>