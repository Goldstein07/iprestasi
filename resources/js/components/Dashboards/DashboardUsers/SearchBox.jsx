import React from 'react';

const SearchBox = () => {
    return (
        <div className="w-full max-w-4xl mx-auto relative z-10">
            <div className="flex">
                <div className="flex-grow px-2 py-2 bg-white rounded-tl-lg rounded-bl-lg border border-neutral-300 flex items-center">
                    <input
                        type="text"
                        placeholder="Cari informasi.."
                        className="w-full px-2 py-1 text-gray-700 placeholder-gray-400 border-none rounded-tl-lg rounded-bl-lg focus:outline-none"
                    />
                </div>
                <button className="w-12 bg-white rounded-tr-lg rounded-br-lg border border-neutral-300 flex items-center justify-center">
                    <img src="/img/search.png" alt="Search Icon" className="w-5 h-5" />
                </button>
            </div>
        </div>
    );
};

export default SearchBox;
