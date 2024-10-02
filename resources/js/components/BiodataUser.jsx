import React from "react";

export const BiodataUser = () => {
    return (
        <section className="mb-8">
            <h2 className="text-xl font-bold mb-4">Biodata Mahasiswa</h2>
            <div className="border p-4 rounded-lg">
                <div className="grid grid-cols-2 gap-4">
                    <div>
                        <p className="font-bold">NIM</p>
                        <p>2101520320</p>
                    </div>
                    <div>
                        <p className="font-bold">Program Studi</p>
                        <p>S1 Sistem Informasi</p>
                    </div>
                    <div>
                        <p className="font-bold">Nama</p>
                        <p>Khaliza Fania</p>
                    </div>
                    <div>
                        <p className="font-bold">Angkatan</p>
                        <p>2021</p>
                    </div>
                </div>
            </div>
        </section>
    );
};
