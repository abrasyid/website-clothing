<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite ('resources/css/app.css')
    <title>Website Clothing</title>
</head>
<body>
    {{-- Navbar --}}
    <header
        class="fixed top-0 z-50 flex w-full items-center justify-between px-4 py-5 transition-all duration-700 md:grid md:grid-cols-3 md:px-18"
        id="navbar"
    >
        <div class="order-2 md:order-1" role="logo">
            <a href="" class="font-poppins text-2xl font-bold tracking-tight text-white sm:text-3xl">ADKARA</a>
        </div>
        <nav class="hidden md:order-2 md:block md:justify-self-center">
            <ul class="flex md:space-x-8 lg:space-x-10">
                <li>
                    <a
                        href=""
                        class="font-poppins font-normal text-white hover:underline hover:underline-offset-1 md:text-[15px] lg:text-base"
                        >Men</a
                    >
                </li>
                <li>
                    <a
                        href=""
                        class="font-poppins font-normal text-white hover:underline hover:underline-offset-1 md:text-[15px] lg:text-base"
                        >Woman</a
                    >
                </li>
                <li>
                    <a
                        href=""
                        class="font-poppins font-normal text-white hover:underline hover:underline-offset-1 md:text-[15px] lg:text-base"
                        >Kids</a
                    >
                </li>
                <li>
                    <a
                        href=""
                        class="font-poppins font-normal text-white hover:underline hover:underline-offset-1 md:text-[15px] lg:text-base"
                        >Accessories</a
                    >
                </li>
            </ul>
        </nav>
        <div class="order-3 flex space-x-6 md:justify-self-end" role="icon">
            <a href="" aria-label="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="#FFFFFF" d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14" />
                </svg>
            </a>
            <a href="" aria-label="shopping-cart">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="#FFFFFF" d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49A.996.996 0 0 0 20.01 4H5.21l-.94-2H1v2h2l3.6 7.59l-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2zM6.16 6h12.15l-2.76 5H8.53zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2s-.9-2-2-2m10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2" />
                </svg>
            </a>
            <a href="" aria-label="login-user">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="#FFFFFF" d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4" />
                </svg>
            </a>
        </div>
        <div class="buttonToggle order-1 block md:hidden">
            <button
                class="rounded-lg bg-white px-3 py-2 text-slate-900 transition hover:bg-gray-100 hover:text-slate-800"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </header>
    {{-- Navbar End --}}

    {{-- Mobile Menu --}}
    <div class="mobileMenu fixed top-19 right-4 left-4 z-60 hidden rounded-lg bg-white">
        <ul class="space-y-1 rounded-lg shadow-sm">
            <li>
                <a
                    href="#"
                    class="font-poppins text-primary block rounded-t-lg px-4 py-2 text-sm font-medium hover:bg-gray-100"
                    >Men</a
                >
            </li>
            <li>
                <a href="#" class="font-poppins text-primary block px-4 py-2 text-sm font-medium hover:bg-gray-100"
                    >Woman</a
                >
            </li>
            <li>
                <a href="#" class="font-poppins text-primary block px-4 py-2 text-sm font-medium hover:bg-gray-100"
                    >Kids</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="font-poppins text-primary block rounded-b-lg px-4 py-2 text-sm font-medium hover:bg-gray-100"
                    >Accessories</a
                >
            </li>
        </ul>
    </div>
    {{-- Mobile Menu End --}}

    {{-- Main --}}
    <main>
        {{-- Hero Bannner --}}
        <section
            class="relative flex h-176 w-full items-center justify-center bg-linear-to-r from-[#1C1818] from-0% via-[#3C3B3B] via-65% to-[#4E4E4E] to-100% px-4 sm:h-160"
        >
            <div class="absolute flex h-full items-end">
                <img src="/images/hero-banner.webp" alt="Hero Banner" class="w-94 sm:w-84 lg:w-88" />
            </div>
            <div class="absolute grid w-90 justify-items-center gap-y-6 sm:w-140 md:w-160">
                <h1
                    class="font-poppins flow-root text-center text-4xl leading-12 font-normal tracking-normal text-white sm:text-[44px] sm:leading-14 md:text-5xl md:leading-16 lg:text-[52px]"
                >
                    TIMELESS FASHION FOR EVERY MOMENT
                </h1>
                <button
                    class="bg-primary font-poppins cursor-pointer rounded-lg bg-linear-to-r from-[#181818] from-0% to-[#2F2F2F] to-100% px-6 py-3 text-sm font-normal text-white shadow-[-4px_4px_16px_0px_rgba(155,155,155,1)]"
                >
                    Shop Now
                </button>
            </div>
        </section>
        {{-- Hero Banner End --}}

        {{-- Categories Product --}}
        <div class="mt-20 justify-items-start px-4 sm:mt-25 sm:justify-items-center md:px-18">
            <h2
                class="font-poppins text-primary mb-2 text-xl font-semibold sm:text-[28px] md:text-[32px] lg:mb-3 lg:text-4xl"
            >
                Explore Our Categories
            </h2>
            <p class="font-poppins text-primary text-start text-sm font-normal sm:w-140 sm:text-center sm:text-base md:leading-6 lg:w-162 lg:text-lg lg:leading-7">Choose from a variety of categories and discover outfits that match your style and daily activities</p>
        </div>
        <section class="mt-14 px-4 sm:mt-18 md:px-18">
            <ul class="flex flex-wrap gap-x-2 gap-y-2">
                <li>
                    <button
                        class="font-poppins bg-primary cursor-pointer rounded-4xl px-3 py-2 text-xs font-light text-white sm:px-4 sm:text-sm md:px-6 md:py-2 md:text-base"
                    >
                        What's New
                    </button>
                </li>
                <li>
                    <button
                        class="font-poppins text-primary cursor-pointer rounded-4xl bg-[#E7E7E7] px-3 py-2 text-xs font-light sm:px-4 sm:text-sm md:px-6 md:py-2 md:text-base"
                    >
                        T'shirts
                    </button>
                </li>
                <li>
                    <button
                        class="font-poppins text-primary cursor-pointer rounded-4xl bg-[#E7E7E7] px-3 py-2 text-xs font-light sm:px-4 sm:text-sm md:px-6 md:py-2 md:text-base"
                    >
                        Shirts
                    </button>
                </li>
                <li>
                    <button
                        class="font-poppins text-primary cursor-pointer rounded-4xl bg-[#E7E7E7] px-3 py-2 text-xs font-light sm:px-4 sm:text-sm md:px-6 md:py-2 md:text-base"
                    >
                        Outerwear
                    </button>
                </li>
                <li>
                    <button
                        class="font-poppins text-primary cursor-pointer rounded-4xl bg-[#E7E7E7] px-3 py-2 text-xs font-light sm:px-4 sm:text-sm md:px-6 md:py-2 md:text-base"
                    >
                        Trousers
                    </button>
                </li>
                <li>
                    <button
                        class="font-poppins text-primary cursor-pointer rounded-4xl bg-[#E7E7E7] px-3 py-2 text-xs font-light sm:px-4 sm:text-sm md:px-6 md:py-2 md:text-base"
                    >
                        Chinos
                    </button>
                </li>
            </ul>
        </section>
        <section class="mx-auto mt-8 grid grid-cols-2 gap-x-4 gap-y-6 px-4 md:grid-cols-3 md:px-18 lg:grid-cols-4">
            <div class="grid content-start gap-y-5">
                <div class="bg-card relative flex h-68 w-full items-center justify-center rounded-2xl md:h-85">
                    <img
                        src="/images/Classic Cotton T-Shirt.webp"
                        alt="Product 1"
                        class="h-60 w-56 object-scale-down md:h-72"
                    />
                    <div class="absolute flex w-full justify-end self-start pt-3 pr-3">
                        <div class="border-primary grid h-6 w-6 place-items-center rounded-4xl border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="#F43434" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="none" d="M7.75 3.5C5.127 3.5 3 5.76 3 8.547C3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79c-.78-1.654-2.39-2.79-4.25-2.79" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid gap-y-2">
                    <div class="grid gap-y-1">
                        <h5 class="font-poppins text-primary text-base font-medium">Classic Cotton T'shirt</h5>
                        <div class="flex items-center gap-x-1">
                            <div class="flex items-center gap-x-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                </svg>
                                <span class="font-poppins text-primary text-sm font-normal">4.9</span>
                            </div>
                            <span class="font-poppins text-primary text-sm font-normal">(120)</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                        <p class="font-poppins text-primary text-base font-medium">Rp159.000</p>
                        <p class="font-poppins text-sm font-normal text-[#9A9A9A] line-through decoration-1">Rp199.000</p>
                        <span
                            class="font-poppins rounded-4xl bg-[#FFE6E6] px-2 py-0.5 text-[10px] font-normal text-[#C82424]"
                            >-20%</span
                        >
                    </div>
                </div>
            </div>
            <div class="grid content-start gap-y-5">
                <div class="bg-card relative flex h-68 w-full items-center justify-center rounded-2xl md:h-85">
                    <img
                        src="/images/Minimalis T-Shirt.webp"
                        alt="Product 1"
                        class="h-60 w-56 object-scale-down md:h-72"
                    />
                    <div class="absolute flex w-full justify-end self-start pt-3 pr-3">
                        <div class="border-primary grid h-6 w-6 place-items-center rounded-4xl border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7.75 3.5C5.127 3.5 3 5.76 3 8.547C3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79c-.78-1.654-2.39-2.79-4.25-2.79" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid gap-y-2">
                    <div class="grid gap-y-1">
                        <h5 class="font-poppins text-primary text-base font-medium">Minimalis T-Shirt</h5>
                        <div class="flex items-center gap-x-1">
                            <div class="flex items-center gap-x-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                </svg>
                                <span class="font-poppins text-primary text-sm font-normal">4.9</span>
                            </div>
                            <span class="font-poppins text-primary text-sm font-normal">(120)</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                        <p class="font-poppins text-primary text-base font-medium">Rp159.000</p>
                        <p class="font-poppins text-sm font-normal text-[#9A9A9A] line-through decoration-1">Rp199.000</p>
                        <span
                            class="font-poppins rounded-4xl bg-[#FFE6E6] px-2 py-0.5 text-[10px] font-normal text-[#C82424]"
                            >-20%</span
                        >
                    </div>
                </div>
            </div>
            <div class="grid content-start gap-y-5">
                <div class="bg-card relative flex h-68 w-full items-center justify-center rounded-2xl md:h-85">
                    <img
                        src="/images/Urban Street T-Shirt.webp"
                        alt="Product 1"
                        class="h-60 w-56 object-scale-down md:h-72"
                    />
                    <div class="absolute flex w-full justify-end self-start pt-3 pr-3">
                        <div class="border-primary grid h-6 w-6 place-items-center rounded-4xl border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7.75 3.5C5.127 3.5 3 5.76 3 8.547C3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79c-.78-1.654-2.39-2.79-4.25-2.79" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid gap-y-2">
                    <div class="grid gap-y-1">
                        <h5 class="font-poppins text-primary text-base font-medium">Urban Street T-Shirt</h5>
                        <div class="flex items-center gap-x-1">
                            <div class="flex items-center gap-x-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                </svg>
                                <span class="font-poppins text-primary text-sm font-normal">4.9</span>
                            </div>
                            <span class="font-poppins text-primary text-sm font-normal">(120)</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                        <p class="font-poppins text-primary text-base font-medium">Rp159.000</p>
                        <p class="font-poppins text-sm font-normal text-[#9A9A9A] line-through decoration-1">Rp199.000</p>
                        <span
                            class="font-poppins rounded-4xl bg-[#FFE6E6] px-2 py-0.5 text-[10px] font-normal text-[#C82424]"
                            >-20%</span
                        >
                    </div>
                </div>
            </div>
            <div class="grid content-start gap-y-5">
                <div class="bg-card relative flex h-68 w-full items-center justify-center rounded-2xl md:h-85">
                    <img
                        src="/images/Modern Bomber Jacket.webp"
                        alt="Product 1"
                        class="h-60 w-56 object-scale-down md:h-72"
                    />
                    <div class="absolute flex w-full justify-end self-start pt-3 pr-3">
                        <div class="border-primary grid h-6 w-6 place-items-center rounded-4xl border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7.75 3.5C5.127 3.5 3 5.76 3 8.547C3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79c-.78-1.654-2.39-2.79-4.25-2.79" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid gap-y-2">
                    <div class="grid gap-y-1">
                        <h5 class="font-poppins text-primary text-base font-medium">Modern Bomber Jacket</h5>
                        <div class="flex items-center gap-x-1">
                            <div class="flex items-center gap-x-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                </svg>
                                <span class="font-poppins text-primary text-sm font-normal">4.9</span>
                            </div>
                            <span class="font-poppins text-primary text-sm font-normal">(120)</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                        <p class="font-poppins text-primary text-base font-medium">Rp159.000</p>
                        <p class="font-poppins text-sm font-normal text-[#9A9A9A] line-through decoration-1">Rp199.000</p>
                        <span
                            class="font-poppins rounded-4xl bg-[#FFE6E6] px-2 py-0.5 text-[10px] font-normal text-[#C82424]"
                            >-20%</span
                        >
                    </div>
                </div>
            </div>
            <div class="grid content-start gap-y-5">
                <div class="bg-card relative flex h-68 w-full items-center justify-center rounded-2xl md:h-85">
                    <img
                        src="/images/Casual Denim Jacket.webp"
                        alt="Product 1"
                        class="h-60 w-56 object-scale-down md:h-72"
                    />
                    <div class="absolute flex w-full justify-end self-start pt-3 pr-3">
                        <div class="border-primary grid h-6 w-6 place-items-center rounded-4xl border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7.75 3.5C5.127 3.5 3 5.76 3 8.547C3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79c-.78-1.654-2.39-2.79-4.25-2.79" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid gap-y-2">
                    <div class="grid gap-y-1">
                        <h5 class="font-poppins text-primary text-base font-medium">Casual Denim Jacket</h5>
                        <div class="flex items-center gap-x-1">
                            <div class="flex items-center gap-x-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                </svg>
                                <span class="font-poppins text-primary text-sm font-normal">4.9</span>
                            </div>
                            <span class="font-poppins text-primary text-sm font-normal">(120)</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                        <p class="font-poppins text-primary text-base font-medium">Rp159.000</p>
                        <p class="font-poppins text-sm font-normal text-[#9A9A9A] line-through decoration-1">Rp199.000</p>
                        <span
                            class="font-poppins rounded-4xl bg-[#FFE6E6] px-2 py-0.5 text-[10px] font-normal text-[#C82424]"
                            >-20%</span
                        >
                    </div>
                </div>
            </div>
            <div class="grid content-start gap-y-5">
                <div class="bg-card relative flex h-68 w-full items-center justify-center rounded-2xl md:h-85">
                    <img
                        src="/images/Slim Fit Blue Jeans.webp"
                        alt="Product 1"
                        class="h-60 w-56 object-scale-down md:h-72"
                    />
                    <div class="absolute flex w-full justify-end self-start pt-3 pr-3">
                        <div class="border-primary grid h-6 w-6 place-items-center rounded-4xl border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7.75 3.5C5.127 3.5 3 5.76 3 8.547C3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79c-.78-1.654-2.39-2.79-4.25-2.79" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid gap-y-2">
                    <div class="grid gap-y-1">
                        <h5 class="font-poppins text-primary text-base font-medium">Slim Fit Blue Jeans</h5>
                        <div class="flex items-center gap-x-1">
                            <div class="flex items-center gap-x-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                </svg>
                                <span class="font-poppins text-primary text-sm font-normal">4.9</span>
                            </div>
                            <span class="font-poppins text-primary text-sm font-normal">(120)</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                        <p class="font-poppins text-primary text-base font-medium">Rp159.000</p>
                        <p class="font-poppins text-sm font-normal text-[#9A9A9A] line-through decoration-1">Rp199.000</p>
                        <span
                            class="font-poppins rounded-4xl bg-[#FFE6E6] px-2 py-0.5 text-[10px] font-normal text-[#C82424]"
                            >-20%</span
                        >
                    </div>
                </div>
            </div>
            <div class="grid content-start gap-y-5">
                <div class="bg-card relative flex h-68 w-full items-center justify-center rounded-2xl md:h-85">
                    <img
                        src="/images/Vintage Denim Jeans.webp"
                        alt="Product 1"
                        class="h-60 w-56 object-scale-down md:h-72"
                    />
                    <div class="absolute flex w-full justify-end self-start pt-3 pr-3">
                        <div class="border-primary grid h-6 w-6 place-items-center rounded-4xl border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7.75 3.5C5.127 3.5 3 5.76 3 8.547C3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79c-.78-1.654-2.39-2.79-4.25-2.79" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid gap-y-2">
                    <div class="grid gap-y-1">
                        <h5 class="font-poppins text-primary text-base font-medium">Vintage Denim Jeans</h5>
                        <div class="flex items-center gap-x-1">
                            <div class="flex items-center gap-x-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                </svg>
                                <span class="font-poppins text-primary text-sm font-normal">4.9</span>
                            </div>
                            <span class="font-poppins text-primary text-sm font-normal">(120)</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                        <p class="font-poppins text-primary text-base font-medium">Rp159.000</p>
                        <p class="font-poppins text-sm font-normal text-[#9A9A9A] line-through decoration-1">Rp199.000</p>
                        <span
                            class="font-poppins rounded-4xl bg-[#FFE6E6] px-2 py-0.5 text-[10px] font-normal text-[#C82424]"
                            >-20%</span
                        >
                    </div>
                </div>
            </div>
            <div class="grid content-start gap-y-5">
                <div class="bg-card relative flex h-68 w-full items-center justify-center rounded-2xl md:h-85">
                    <img
                        src="/images/Classic Baseball Cap.webp"
                        alt="Product 1"
                        class="h-60 w-56 object-scale-down md:h-72"
                    />
                    <div class="absolute flex w-full justify-end self-start pt-3 pr-3">
                        <div class="border-primary grid h-6 w-6 place-items-center rounded-4xl border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7.75 3.5C5.127 3.5 3 5.76 3 8.547C3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79c-.78-1.654-2.39-2.79-4.25-2.79" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid gap-y-2">
                    <div class="grid gap-y-1">
                        <h5 class="font-poppins text-primary text-base font-medium">Classic Baseball Cap</h5>
                        <div class="flex items-center gap-x-1">
                            <div class="flex items-center gap-x-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                </svg>
                                <span class="font-poppins text-primary text-sm font-normal">4.9</span>
                            </div>
                            <span class="font-poppins text-primary text-sm font-normal">(120)</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                        <p class="font-poppins text-primary text-base font-medium">Rp159.000</p>
                        <p class="font-poppins text-sm font-normal text-[#9A9A9A] line-through decoration-1">Rp199.000</p>
                        <span
                            class="font-poppins rounded-4xl bg-[#FFE6E6] px-2 py-0.5 text-[10px] font-normal text-[#C82424]"
                            >-20%</span
                        >
                    </div>
                </div>
            </div>
        </section>
        <div class="mt-10 flex justify-center px-18 sm:mt-14">
            <button
                class="font-poppins bg-primary cursor-pointer rounded-4xl px-5 py-3 text-xs font-normal text-white sm:px-8 sm:text-base"
            >
                Load More
            </button>
        </div>
        {{-- Categories Product End --}}

        {{-- Promo Product --}}
        <div class="mt-18 px-4 sm:mt-30 md:px-18">
            <div class="rounded-lg bg-[#CECBB8] px-6 py-4 sm:rounded-2xl sm:py-7 md:px-6 md:py-9 lg:px-12">
                <div class="grid justify-items-start gap-y-3 sm:gap-y-6 md:gap-y-8">
                    <div class="grid w-48 gap-y-2 sm:w-76 sm:gap-y-3 md:w-89">
                        <div class="grid gap-y-1 sm:gap-y-2">
                            <h4 class="font-poppins text-primary text-sm font-semibold sm:text-lg md:text-xl">
                                Limited Offers
                            </h4>
                            <h2 class="font-poppins text-primary text-xl font-bold sm:text-3xl md:text-4xl">
                                Up to 50% Off
                            </h2>
                        </div>
                        <p class="font-poppins text-primary text-[8px] font-normal sm:text-sm md:text-base">Upgrade your everyday style with premium clothing at special discounted price</p>
                    </div>
                    <button
                        class="font-poppins bg-primary cursor-pointer rounded-sm px-3 py-2 text-[8px] font-normal text-white sm:rounded-xl sm:px-5 sm:py-3 sm:text-sm md:px-6 md:text-base"
                    >
                        Shop Now
                    </button>
                </div>
            </div>
            <div class="-mt-75 flex h-75 items-end justify-end px-6 md:px-6 lg:px-12">
                <img src="/images/Image Discount.webp" alt="" class="w-30 sm:w-48 md:w-56" />
            </div>
        </div>
        {{-- Promo Product End --}}

        {{-- Customer Review --}}
        <div class="mt-20 px-4 sm:mt-30 md:px-18">
            <h2
                class="font-poppins text-primary mb-2 text-xl font-semibold sm:text-[28px] md:text-[32px] lg:mb-3 lg:text-4xl"
            >
                Customer Reviews
            </h2>
            <p class="font-poppins text-primary w-90 text-sm font-normal sm:w-108 sm:text-base md:leading-6 lg:text-lg lg:leading-7">Our customer share their experiences with our clothing collection</p>
        </div>
        <section class="mt-9 px-4 sm:mt-11 md:px-18">
            <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-[20px] border border-[#D9D9D9] px-6 py-6 md:px-8 md:py-8">
                    <div class="grid gap-y-4 md:gap-y-6">
                        <div class="grid gap-y-2 md:gap-y-3">
                            <p class="font-poppins text-primary text-sm leading-6 font-normal sm:text-base sm:leading-7">I absolutely love the quality of the clothes. The fabric feels comfortable and the design looks exactly like the pictures.</p>
                            <div class="flex">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="-ml-1.25">
                                        <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                    </svg>
                                @endfor
                            </div>
                        </div>
                        <div class="flex items-center gap-x-4">
                            <img
                                src="/images/Profil 1.webp"
                                alt=""
                                class="h-8 w-8 rounded-full object-cover sm:h-9 sm:w-9"
                            />
                            <p class="font-poppins text-primary text-sm font-normal sm:text-base">Emily Johnson</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-[20px] border border-[#D9D9D9] px-6 py-6 md:px-8 md:py-8">
                    <div class="grid gap-y-4 md:gap-y-6">
                        <div class="grid gap-y-2 md:gap-y-3">
                            <p class="font-poppins text-primary text-sm leading-6 font-normal sm:text-base sm:leading-7">I absolutely love the quality of the clothes. The fabric feels comfortable and the design looks exactly like the pictures.</p>
                            <div class="flex">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="-ml-1.25">
                                        <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                    </svg>
                                @endfor
                            </div>
                        </div>
                        <div class="flex items-center gap-x-4">
                            <img
                                src="/images/Profil 2.webp"
                                alt=""
                                class="h-8 w-8 rounded-full object-cover sm:h-9 sm:w-9"
                            />
                            <p class="font-poppins text-primary text-sm font-normal sm:text-base">Michael Brown</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-[20px] border border-[#D9D9D9] px-6 py-6 md:px-8 md:py-8">
                    <div class="grid gap-y-4 md:gap-y-6">
                        <div class="grid gap-y-2 md:gap-y-3">
                            <p class="font-poppins text-primary text-sm leading-6 font-normal sm:text-base sm:leading-7">I absolutely love the quality of the clothes. The fabric feels comfortable and the design looks exactly like the pictures.</p>
                            <div class="flex">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="-ml-1.25">
                                        <path fill="#FFC107" d="m12 16.102l-3.63 2.192q-.16.079-.297.064q-.136-.016-.265-.094q-.13-.08-.196-.226t-.012-.319l.966-4.11l-3.195-2.77q-.135-.11-.178-.263t.019-.293t.165-.23q.104-.087.28-.118l4.216-.368l1.644-3.892q.068-.165.196-.238T12 5.364t.288.073t.195.238l1.644 3.892l4.215.368q.177.03.281.119q.104.088.166.229q.061.14.018.293t-.178.263l-3.195 2.77l.966 4.11q.056.171-.011.318t-.197.226q-.128.08-.265.095q-.136.015-.296-.064z" />
                                    </svg>
                                @endfor
                            </div>
                        </div>
                        <div class="flex items-center gap-x-4">
                            <img
                                src="/images/Profil 3.webp"
                                alt=""
                                class="h-8 w-8 rounded-full object-cover sm:h-9 sm:w-9"
                            />
                            <p class="font-poppins text-primary text-sm font-normal sm:text-base">Daniel Wilson</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Customer Review End --}}

        {{-- FAQ --}}
        <div class="mt-25 justify-items-start px-4 sm:mt-40 sm:justify-items-center md:px-18">
            <h2
                class="font-poppins text-primary mb-2 text-xl font-semibold sm:text-[28px] md:text-[32px] lg:mb-3 lg:text-4xl"
            >
                Frequently Asked Questions
            </h2>
            <p class="font-poppins text-primary text-start text-sm font-normal sm:w-174 sm:text-center sm:text-base md:leading-6 lg:text-lg lg:leading-7">Find answer the most common questions about our products and services</p>
        </div>
        <div class="mt-10 grid items-stretch gap-y-5 px-4 md:px-18 lg:justify-items-center">
            <details
                class="group [&amp;_summary::-webkit-details-marker]:hidden rounded-xl bg-white px-7 py-5 shadow-[1px_2px_8px_0px_rgba(97,97,97,0.25)] lg:w-236"
            >
                <summary class="flex items-center justify-between">
                    <h5 class="font-poppins text-primary text-base font-medium lg:text-lg">What sizes do you offer?</h5>
                    <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </summary>
                <p class="font-poppins text-primary mt-3 text-sm leading-7 font-light lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper eget velit ut cursus. Ut pulvinar, odio in porttitor iaculis, augue magna lacinia turpis, in porttitor justo eros sit amet lectus.</p>
            </details>
            <details
                class="group [&amp;_summary::-webkit-details-marker]:hidden rounded-xl px-7 py-5 shadow-[1px_2px_8px_0px_rgba(97,97,97,0.25)] lg:w-236"
            >
                <summary class="flex items-center justify-between">
                    <h5 class="font-poppins text-primary text-base font-medium lg:text-lg">
                        How long does shipping take?
                    </h5>
                    <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </summary>
                <p class="font-poppins text-primary mt-3 text-sm leading-7 font-light lg:text-base">Shipping usually takes 3-7 business days depending on your location. Once your order has been shipped, you will receive a tracking number via email.</p>
            </details>
            <details
                class="group [&amp;_summary::-webkit-details-marker]:hidden rounded-xl bg-white px-7 py-5 shadow-[1px_2px_8px_0px_rgba(97,97,97,0.25)] lg:w-236"
            >
                <summary class="flex items-center justify-between">
                    <h5 class="font-poppins text-primary text-base font-medium lg:text-lg">
                        Can I return or exchange an item?
                    </h5>
                    <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </summary>
                <p class="font-poppins text-primary mt-3 text-sm leading-7 font-light lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper eget velit ut cursus. Ut pulvinar, odio in porttitor iaculis, augue magna lacinia turpis, in porttitor justo eros sit amet lectus.</p>
            </details>
            <details
                class="group [&amp;_summary::-webkit-details-marker]:hidden rounded-xl bg-white px-7 py-5 shadow-[1px_2px_8px_0px_rgba(97,97,97,0.25)] lg:w-236"
            >
                <summary class="flex items-center justify-between">
                    <h5 class="font-poppins text-primary text-base font-medium lg:text-lg">
                        What payment method do you accept?
                    </h5>
                    <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </summary>
                <p class="font-poppins text-primary mt-3 text-sm leading-7 font-light lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper eget velit ut cursus. Ut pulvinar, odio in porttitor iaculis, augue magna lacinia turpis, in porttitor justo eros sit amet lectus.</p>
            </details>
            <details class="rounded-xl bg-white px-7 py-5 shadow-[1px_2px_8px_0px_rgba(97,97,97,0.25)] lg:w-236">
                <summary class="flex items-center justify-between">
                    <h5 class="font-poppins text-primary text-base font-medium lg:text-lg">How do I track my order?</h5>
                    <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </summary>
                <p class="font-poppins text-primary mt-3 text-sm leading-7 font-light lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper eget velit ut cursus. Ut pulvinar, odio in porttitor iaculis, augue magna lacinia turpis, in porttitor justo eros sit amet lectus.</p>
            </details>
        </div>
        {{-- FAQ End --}}
    </main>
    {{-- Main End --}}

    {{-- Footer Start --}}
    <footer class="bg-footer mt-25 md:mt-40">
        <div class="flex flex-wrap gap-y-8 px-4 pt-15 md:px-18 lg:justify-between">
            <div class="grid gap-y-3">
                <h2 class="font-poppins text-4xl font-bold text-white">ADKARA</h2>
                <p class="font-poppins text-secondary text-base leading-7 font-normal lg:w-97">Our mission is to make fashion accessible, stylish, and comfortable for everyone. We focus on delivering high-quality clothing that helps people express their unique style every day.</p>
            </div>
            <div class="flex flex-wrap items-start gap-x-20 gap-y-8 md:gap-x-24 lg:gap-x-12">
                <div class="grid gap-y-3">
                    <h6 class="font-poppins text-base font-semibold text-white">Menu</h6>
                    <div class="grid gap-y-2">
                        <a href="" class="font-poppins text-secondary text-base font-normal">Men</a>
                        <a href="" class="font-poppins text-secondary text-base font-normal">Woman</a>
                        <a href="" class="font-poppins text-secondary text-base font-normal">Kids</a>
                        <a href="" class="font-poppins text-secondary text-base font-normal">Accessories</a>
                    </div>
                </div>
                <div class="grid gap-y-3">
                    <h6 class="font-poppins text-base font-semibold text-white">Product</h6>
                    <div class="grid gap-y-2">
                        <a href="" class="font-poppins text-secondary text-base font-normal">T'shirts</a>
                        <a href="" class="font-poppins text-secondary text-base font-normal">Shirts</a>
                        <a href="" class="font-poppins text-secondary text-base font-normal">Outerwear</a>
                        <a href="" class="font-poppins text-secondary text-base font-normal">Jeans</a>
                        <a href="" class="font-poppins text-secondary text-base font-normal">Trousers</a>
                    </div>
                </div>
                <div class="grid gap-y-3">
                    <h6 class="font-poppins text-base font-semibold text-white">About</h6>
                    <div class="grid gap-y-2">
                        <a href="" class="font-poppins text-secondary text-base font-normal">Terms & conditions</a>
                        <a href="" class="font-poppins text-secondary text-base font-normal">Privacy policy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12 flex gap-x-2 px-4 pb-15 md:px-18">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 640 640">
                <path fill="#FFFFFF" d="M320.3 205c-63.5-.2-115.1 51.2-115.3 114.7S256.2 434.8 319.7 435S434.8 383.8 435 320.3S383.8 205.2 320.3 205m-.6 40.4c41.2-.2 74.7 33.1 74.9 74.3s-33.1 74.7-74.3 74.9s-74.7-33.1-74.9-74.3s33.1-74.7 74.3-74.9m93.4-45.1c0-14.8 12-26.8 26.8-26.8s26.8 12 26.8 26.8s-12 26.8-26.8 26.8s-26.8-12-26.8-26.8m129.7 27.2c-1.7-35.9-9.9-67.7-36.2-93.9c-26.2-26.2-58-34.4-93.9-36.2c-37-2.1-147.9-2.1-184.9 0c-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9c1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0c35.9-1.7 67.7-9.9 93.9-36.2c26.2-26.2 34.4-58 36.2-93.9c2.1-37 2.1-147.8 0-184.8M495 452c-7.8 19.6-22.9 34.7-42.6 42.6c-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6c-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6c29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6c11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 640 640">
                <path fill="#FFFFFF" d="M544.5 273.9c-44 .1-87-13.6-122.8-39.2v178.7c0 33.1-10.1 65.4-29 92.6s-45.6 48-76.6 59.6s-64.8 13.5-96.9 5.3s-60.9-25.9-82.7-50.8s-35.3-56-39-88.9s2.9-66.1 18.6-95.2s40-52.7 69.6-67.7s62.9-20.5 95.7-16v89.9c-15-4.7-31.1-4.6-46 .4s-27.9 14.6-37 27.3s-14 28.1-13.9 43.9s5.2 31 14.5 43.7s22.4 22.1 37.4 26.9s31.1 4.8 46-.1s28-14.4 37.2-27.1s14.2-28.1 14.2-43.8V64h88c-.1 7.4.6 14.9 1.9 22.2c3.1 16.3 9.4 31.9 18.7 45.7s21.3 25.6 35.2 34.6c19.9 13.1 43.2 20.1 67 20.1V274z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 640 640">
                <path fill="#FFFFFF" d="M576 320c0-141.4-114.6-256-256-256S64 178.6 64 320c0 120 82.7 220.8 194.2 248.5V398.2h-52.8V320h52.8v-33.7c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V236c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V320h83.6l-14.4 78.2H351v175.9C477.8 558.8 576 450.9 576 320" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 640 640">
                <path fill="#FFFFFF" d="M523.4 215.7c.3 4.5.3 9.1.3 13.6c0 138.7-105.6 298.6-298.6 298.6c-59.5 0-114.7-17.2-161.1-47.1c8.4 1 16.6 1.3 25.3 1.3c49.1 0 94.2-16.6 130.3-44.8c-46.1-1-84.8-31.2-98.1-72.8c6.5 1 13 1.6 19.8 1.6c9.4 0 18.8-1.3 27.6-3.6c-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3c-28.3-18.8-46.8-51-46.8-87.4c0-19.5 5.2-37.4 14.3-53c51.7 63.7 129.3 105.3 216.4 109.8c-1.6-7.8-2.6-15.9-2.6-24c0-57.8 46.8-104.9 104.9-104.9c30.2 0 57.5 12.7 76.7 33.1c23.7-4.5 46.5-13.3 66.6-25.3c-7.8 24.4-24.4 44.8-46.1 57.8c21.1-2.3 41.6-8.1 60.4-16.2c-14.3 20.8-32.2 39.3-52.6 54.3" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 640 640">
                <path fill="#FFFFFF" d="M581.7 188.1c-6.2-23.7-24.8-42.3-48.3-48.6C490.9 128 320.1 128 320.1 128s-170.8 0-213.4 11.5c-23.5 6.3-42 24.9-48.3 48.6C47 231 47 320.4 47 320.4s0 89.4 11.4 132.3c6.3 23.6 24.8 41.5 48.3 47.8C149.3 512 320.1 512 320.1 512s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8c11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zM264.2 401.6V239.2l142.7 81.2z" />
            </svg>
        </div>
        <div class="items-center border-t border-white px-4 py-9 md:px-18">
            <p class="font-poppins text-sm font-normal text-white md:text-base">Copyright © Clothing brand. All rights reserved.</p>
        </div>
    </footer>
    {{-- Footer End --}}

    <script>
        const buttonToggle = document.querySelector('.buttonToggle');
        const mobileMenu = document.querySelector('.mobileMenu');

        buttonToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });

        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 30) {
                navbar.classList.add('bg-footer', 'shadow-lg');
            } else {
                navbar.classList.remove('bg-footer', 'shadow-lg');
            }
        });
    </script>
</body>
</html>
