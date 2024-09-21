import React from "react";

const LoginPage = () => {
    return (
        <div className="w-full h-screen flex bg-white relative">
            {/* Left Image Section */}
            <div className="w-1/2 h-full relative">
                {/* Background Image */}
                <img
                    className="w-full h-full object-cover"
                    src="/img/fik.png"
                    alt="fik image"
                />

                {/* Overlay */}
                <div className="absolute inset-0 bg-[#2d3036]/30"></div>

                {/* Logo and Text Positioned Above the Image */}
                <div className="absolute top-0 left-0 p-12 flex items-center gap-4 z-10">
                    <img
                        className="w-16 h-16"
                        src="/img/upn.png"
                        alt="UPN Logo"
                    />
                    <div className="text-[#fcfcfc] text-2xl font-bold">
                        FAKULTAS ILMU KOMPUTER
                        <br />
                        UPN "VETERAN" JAKARTA
                    </div>
                </div>
            </div>

            {/* Login Form */}
            <div className="w-1/2 h-full flex justify-center items-center relative bg-gray-100">
                {/* Right: App Title */}
                <div className="absolute top-0 right-0 p-12 text-4xl font-bold z-10">
                    <span className="text-[#2d3036]">i</span>
                    <span className="text-[#fe632e]">Prestasi</span>
                </div>

                <div className="w-[80%] max-w-[598px] bg-white rounded-3xl border border-[#d1d3d8] p-12 shadow-lg flex flex-col items-center gap-6">
                    <h1 className="text-[#2d3036] text-2xl font-medium">
                        Selamat Datang, Fikers!
                    </h1>

                    {/* Form Fields */}
                    <form className="w-full space-y-6">
                        {/* Email Field */}
                        <div>
                            <label className="block text-zinc-950 text-base font-medium mb-2">
                                Email
                                <span className="text-red-600">*</span>
                            </label>
                            <input
                                type="email"
                                placeholder="ava.wright@gmail.com"
                                className="w-full px-4 py-3 border border-zinc-200 rounded-md text-base text-zinc-500 focus:outline-none focus:border-[#fe632e]"
                            />
                        </div>

                        {/* Password Field */}
                        <div>
                            <label className="block text-zinc-950 text-base font-medium mb-2">
                                Kata Sandi
                                <span className="text-red-600">*</span>
                            </label>
                            <input
                                type="password"
                                placeholder="••••••••"
                                className="w-full px-4 py-3 border border-zinc-200 rounded-md text-base text-zinc-500 focus:outline-none focus:border-[#fe632e]"
                            />
                        </div>

                        {/* Login Button */}
                        <button
                            type="submit"
                            className="w-full px-6 py-3 bg-[#fe632e] text-white text-base font-medium rounded-lg hover:bg-[#e5571e] transition-colors"
                        >
                            Masuk
                        </button>
                    </form>
                </div>
            </div>
        </div>
    );
};

export default LoginPage;
