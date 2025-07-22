<x-layout>
    <style>
        @keyframes fade {
            from {
                opacity: 0;
                scale: .9
            }

            to {
                opacity: 1;
                scale: 1;
            }
        }

        .showOnSlide {
            animation: fade linear;
            animation-timeline: view();
            animation-range: entry 0% cover 30%;
            animation-direction: alternate;
        }
    </style>
    <div class="px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container showOnSlide" id="beranda">
                <div class="@[480px]:p-4">
                    <div class="flex min-h-[480px] flex-col bg-cover bg-center bg-no-repeat @[480px]:gap-5 @[480px]:rounded-xl justify-center"
                        style="background-image: linear-gradient(to right,
                        rgba(0, 0, 0, 0.7) 30%,rgba(0, 0, 0, 0.1) 100%
                    ), url('/img/sachainchi.jpeg');">
                        <div class="w-full ms-10 mt-16 flex flex-col gap-2 ">
                            <h1
                                class="text-white text-3xl font-black leading-tight tracking-[-0.033em] @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                                Nikmati Kelezatan <br /> Sacha Inchi dari Desa Kami
                            </h1>
                            <h2
                                class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                Produk olahan kacang Sacha Inchi berkualitas tinggi, <br>
                                langsung dari petani lokal.
                            </h2>
                        </div>
                        <button
                            class="flex ms-10 min-w-[84px] max-w-[150px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-10 @[480px]:px-4 bg-[#54D12B] text-[#172112] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                            onclick="location.href = '/products'">
                            <span class="truncate">Lihat Produk</span>
                        </button>
                    </div>
                </div>
            </div>
            <section class="showOnSlide my-5">
                <h2 id="produk" class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3">
                    Produk Unggulan
                </h2>
                <div
                    class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
                    <div class="flex items-stretch p-4 gap-5 w-full">
                        @foreach ($products as $product)
                            @if (!$product->ishide)
                                <x-card-product :product="$product" :landingpage="true"></x-card-product>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex px-4 py-3 justify-center">
                    <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#54D12B] text-[#172112] text-sm font-bold leading-normal tracking-[0.015em]">
                        <span onclick="location.href = '/products'" class="truncate">Lihat Semua Produk</span>
                    </button>
                </div>
            </section>
            <section class="showOnSlide my-5">
                <h2 id="tentang"
                    class=" text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3">
                    Tentang Kami
                </h2>
                <div class=" grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                    <div class="flex flex-col gap-3 pb-3">
                        <div class="w-full bg-center bg-no-repeat aspect-[10/5] bg-cover rounded-xl"
                            style="background-image: url('img/village.png');">
                        </div>
                        <div>
                            <p class="text-white text-xl font-medium leading-normal">
                                Sacha Inchi
                            </p>
                            <p class="text-[#A3C299] text-base/relaxed text-justify font-normal">
                                Sacha Inchi adalah UMKM yang berdedikasi untuk menghasilkan
                                produk Sacha Inchi berkualitas tinggi. Kami bekerja sama
                                dengan petani lokal untuk memastikan keberlanjutan dan
                                kesejahteraan bersama. Produk kami diolah dengan cermat
                                untuk menjaga kandungan nutrisi dan rasa alami Sacha Inchi.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="showOnSlide my-5">
                <h2 class="showOnSlide text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3">
                    Testimoni
                </h2>
                <div
                    class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
                    <div class="flex items-stretch p-4 gap-3">
                        <figure class="flex-grow">
                            <div class="flex items-center mb-4 text-yellow-300">
                                @for ($i = 0; $i < 6; $i++)
                                    <svg class="w-4 h-4 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                @endfor
                            </div>
                            <blockquote>
                                <p class="text-base font-semibold text-[#A3C299]">
                                    "Saya merasakan manfaat Minyak Sacha Inchi ini untuk kesehatan kulit dan
                                    rambut."</p>
                            </blockquote>
                            <figcaption class="flex items-center mt-3 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full" src="img/default-avatar.png" alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 dark:divide-gray-700">
                                    <cite class="pe-3 text-base font-medium text-[#A3C299]">Aisyah</cite>
                                </div>
                            </figcaption>
                        </figure>
                        <figure class="flex-grow">
                            <div class="flex items-center mb-4 text-yellow-300">
                                @for ($i = 0; $i < 6; $i++)
                                    <svg class="w-4 h-4 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                @endfor
                            </div>
                            <blockquote>
                                <p class="text-base font-semibold text-[#A3C299]">
                                    "Kacang Sacha Inchi panggangnya enak dan renyah. Cocok
                                    untuk camilan sehat."</p>
                            </blockquote>
                            <figcaption class="flex items-center mt-3 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full" src="img/default-avatar.png" alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 dark:divide-gray-700">
                                    <cite class="pe-3 text-base font-medium text-[#A3C299]">Budi</cite>
                                </div>
                            </figcaption>
                        </figure>
                        <figure class="flex-grow">
                            <div class="flex items-center mb-4 text-yellow-300">
                                @for ($i = 0; $i < 6; $i++)
                                    <svg class="w-4 h-4 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                @endfor
                            </div>
                            <blockquote>
                                <p class="text-base font-semibold text-[#A3C299]">
                                    "Teh Sacha Inchi-nya menenangkan dan rasanya unik. Saya
                                    suka minum sebelum tidur."</p>
                            </blockquote>
                            <figcaption class="flex items-center mt-3 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full" src="img/default-avatar.png" alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 dark:divide-gray-700">
                                    <cite class="pe-3 text-base font-medium text-[#A3C299]">Citra</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            <section class="showOnSlide my-5">
                <h2 class="showOnSlide text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3">
                    Lokasi
                </h2>
                <div class="showOnSlide flex px-4 py-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4672802018376!2d107.07023227442029!3d-6.95407576808124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6845c62e575ff9%3A0x11125b21caac12c5!2sBumdes%20Jaya%20Bersama!5e0!3m2!1sid!2sid!4v1748526393703!5m2!1sid!2sid"
                        maptype="satellite" width="700" height="450" style="border: 0" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl object-cover">
                    </iframe>
                </div>
            </section>
        </div>
    </div>
</x-layout>
