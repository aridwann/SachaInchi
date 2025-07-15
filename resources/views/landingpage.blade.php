<x-layout>
    <x-navbar></x-navbar>

    <div class="px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container" id="beranda">
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
            <h2 id="produk"
                class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
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
            <h2 id="tentang"
                class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                Tentang Kami
            </h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                <div class="flex flex-col gap-3 pb-3">
                    <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                        style="
                background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCjliBbQRD-zNKfD1I_gto4sPtJc4URJoK0wMOrxKJrIaU_PUevM9MB7HUigYVD4gLcp74kTt64s0KH_pEUJhWX8D_ONSZIxUt2Pa6XzaAMjMGbt_80nf47W36xo9TqnB-9EBdvy-W6yJvLoeumk2dCUY2aiKd2k7O6Skd6sud_tKFElzipc8VQ7_kNgbnL5ukG6oocd9KmiQj4DdGicsS27pVC20ERe-4K4nfEbe-ll1IGdLaGYYGvUPt-q_qO0W6uGuRbSuryArDY');
              ">
                    </div>
                    <div>
                        <p class="text-[#172112] text-base font-medium leading-normal">
                            Desa Cibokor
                        </p>
                        <p class="text-[#A3C299] text-sm font-normal leading-normal">
                            Desa Cibokor adalah UMKM yang berdedikasi untuk menghasilkan
                            produk Sacha Inchi berkualitas tinggi. Kami bekerja sama
                            dengan petani lokal untuk memastikan keberlanjutan dan
                            kesejahteraan bersama. Produk kami diolah dengan cermat
                            untuk menjaga kandungan nutrisi dan rasa alami Sacha Inchi.
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                Testimoni
            </h2>
            <div
                class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
                <div class="flex items-stretch p-4 gap-3">
                    <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40">
                        <div>
                            <p class="text-white text-base font-medium leading-normal">
                                Aisyah
                            </p>
                            <p class="text-[#A3C299] text-sm font-normal leading-normal">
                                Minyak Sacha Inchi dari Desa Makmur sangat berkualitas.
                                Saya merasakan manfaatnya untuk kesehatan kulit dan
                                rambut.
                            </p>
                        </div>
                    </div>
                    <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40">
                        <div>
                            <p class="text-white text-base font-medium leading-normal">
                                Budi
                            </p>
                            <p class="text-[#A3C299] text-sm font-normal leading-normal">
                                Kacang Sacha Inchi panggangnya enak dan renyah. Cocok
                                untuk camilan sehat.
                            </p>
                        </div>
                    </div>
                    <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40">
                        <div>
                            <p class="text-white text-base font-medium leading-normal">
                                Citra
                            </p>
                            <p class="text-[#A3C299] text-sm font-normal leading-normal">
                                Teh Sacha Inchi-nya menenangkan dan rasanya unik. Saya
                                suka minum sebelum tidur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                Lokasi
            </h2>
            <div class="flex px-4 py-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4672802018376!2d107.07023227442029!3d-6.95407576808124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6845c62e575ff9%3A0x11125b21caac12c5!2sBumdes%20Jaya%20Bersama!5e0!3m2!1sid!2sid!4v1748526393703!5m2!1sid!2sid"
                    maptype="satellite" width="700" height="450" style="border: 0" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl object-cover">
                </iframe>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
