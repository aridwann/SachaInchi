<x-layout>
    @auth
        <x-user-navbar :name="Auth::user()['name']"></x-user-navbar>  
    @else
        <x-navbar></x-navbar>
    @endauth

    <div class="px-40 flex flex-1 justify-center py-5">
        <div
            class="layout-content-container flex flex-col max-w-[960px] flex-1"
        >
            <div class="flex flex-wrap gap-2 p-4">
            <a
                class="text-[#8a7560] text-base font-medium leading-normal hover:underline"
                href="/products"
                >Produk</a
            >
            <span class="text-[#8a7560] text-base font-medium leading-normal"
                >/</span
            >
            <span class="text-[#181411] text-base font-medium leading-normal"
                >{{ $product['name'] }}</span
            >
            </div>

            <div class="flex">
            <div
                class="w-1/2 m-4 gap-1 overflow-hidden bg-white @[480px]:gap-2 aspect-[9/10] rounded-xl flex"
            >
                <div
                class="w-full bg-center bg-no-repeat bg-cover aspect-auto rounded-none flex-1"
                style="
                    background-image: url({{ $product['img'] }});
                "
                ></div>
            </div>
            <div>
                <h1
                class="text-[#181411] text-2xl font-bold leading-tight tracking-[-0.015em] px-4 text-left pb-3 pt-5"
                >
                {{ $product['name'] }}
                </h1>
                <h3
                class="text-[#f38920] bg-[#f5f2f0] text-3xl font-bold leading-tight tracking-[-0.015em] ms-4 px-6 py-4"
                >
                Rp {{ $product['price'] }}
                </h3>
                <div
                class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4 m-5"
                >
                    <dt class="font-medium text-gray-900">Terjual</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $product['sold'] }}</dd>
                </div>
                <div
                    class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4 m-5"
                >
                    <dt class="font-medium text-gray-900">Stok</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $product['stock'] }}</dd>
                </div>
                <div
                class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4 m-5"
                >
                    <dt class="font-medium text-gray-900">Jumlah</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                        <div
                        class="flex items-center rounded border border-gray-200 w-36"
                        >
                        <button
                            type="button"
                            id="kurangBtn"
                            class="size-10 leading-10 text-gray-600 transition hover:opacity-75"
                        >
                            &minus;
                        </button>
                        <input
                            type="number"
                            id="Quantity"
                            value="1"
                            min="1"
                            class="h-10 w-16 text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                        />
                        <button
                            type="button"
                            id="tambahBtn"
                            class="size-10 leading-10 text-gray-600 transition hover:opacity-75"
                        >
                            &plus;
                        </button>
                        </div>
                    </dd>
                </div>
                <div class="flex justify-stretch">
                <div
                    class="flex flex-1 gap-3 flex-wrap px-4 py-3 justify-start"
                >
                    <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#f38920] text-[#181411] text-sm font-bold leading-normal tracking-[0.015em]"
                    >
                    <span class="truncate">Tambah ke Keranjang</span>
                    </button>
                    <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-bold leading-normal tracking-[0.015em]"
                    >
                    <span class="truncate">Pesan via WhatsApp</span>
                    </button>
                </div>
                </div>
            </div>
            </div>

            <div>
            <h3
                class="text-[#181411] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4"
            >
                Deskripsi
            </h3>
            <p
                class="text-[#181411] text-base font-normal leading-normal pb-3 pt-1 px-4"
            >
                Kacang Sacha Inchi kami dipanen dari kebun lokal di Desa Sehat,
                diolah secara tradisional untuk menjaga kualitas dan rasa alami.
                Kaya akan omega-3, omega-6, dan protein, kacang ini adalah camilan
                sehat yang sempurna untuk Anda dan keluarga.
            </p>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</x-layout>