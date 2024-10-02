import React, { useState } from "react";

const Navbar = () => {
    const [isDropdownOpen, setIsDropdownOpen] = useState(false);

    const toggleDropdown = () => {
        setIsDropdownOpen(!isDropdownOpen);
    };

    return (
        <header className="w-full h-16 px-4 md:px-10 py-4 bg-white shadow-md flex items-center justify-between">
            <div className="flex items-center gap-4">
                {/* Logo and Branding */}
                <div className="flex items-center gap-2 md:gap-4">
                    <div className="w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center overflow-hidden">
                        <img
                            src="img/naruto.jpeg"
                            alt="Logo"
                            className="w-full h-full object-cover"
                        />
                    </div>
                    <div className="flex items-center gap-0.5">
                        <span className="text-gray-900 text-lg md:text-2xl font-semibold">
                            i
                        </span>
                        <span className="text-[#fe632e] text-lg md:text-2xl font-semibold">
                            Prestasi
                        </span>
                    </div>
                </div>
            </div>
            <div className="flex-grow flex items-center justify-center">
                {/* Centered Navigation */}
                <nav className="hidden md:flex items-center gap-6">
                    <a
                        href="#"
                        className="px-3 py-1 md:px-4 md:py-2 bg-[#fe632e] text-white rounded-2xl text-sm md:text-base font-medium"
                    >
                        Home
                    </a>
                    <a
                        href="/lomba"
                        className="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]"
                    >
                        Lomba
                    </a>
                    <a
                        href="/beasiswa"
                        className="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]"
                    >
                        Beasiswa
                    </a>
                    <a
                        href="/abdimas"
                        className="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]"
                    >
                        Pengabdian Masyarakat
                    </a>
                    <a
                        href="/penelitian"
                        className="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]"
                    >
                        Penelitian
                    </a>
                    <a
                        href="#"
                        className="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]"
                    >
                        Pendataan
                    </a>
                    <a
                        href="/faq"
                        className="text-gray-900 text-sm md:text-base font-medium hover:text-[#fe632e]"
                    >
                        FAQ
                    </a>
                </nav>
            </div>
            {/* Profile Image with Dropdown */}
            <div className="relative">
                <button onClick={toggleDropdown}>
                    <img
                        className="w-6 h-6 md:w-8 md:h-8 rounded-full ml-auto cursor-pointer"
                        src="/img/profile.png"
                        alt="User Profile"
                    />
                </button>
                {isDropdownOpen && (
                    <div className="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                        <a
                            href="/profile"
                            className="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                        >
                            Profile
                        </a>
                        <a
                            href="/logout"
                            className="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                        >
                            Logout
                        </a>
                    </div>
                )}
            </div>
        </header>
    );
};

export default Navbar;
