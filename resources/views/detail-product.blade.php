<x-layout>
    <x-navbar></x-navbar>

    <div class="px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            @if (session('success'))
                <div class="bg-green-500 text-white px-4 py-2 rounded-lg mb-4 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex flex-wrap gap-2 p-4">
                <a class="text-[#A3C299] text-base font-medium leading-normal hover:underline" href="/products">Produk</a>
                <span class="text-[#A3C299] text-base font-medium leading-normal">/</span>
                <span class="text-white text-base font-medium leading-normal">{{ $product['name'] }}</span>
            </div>

            <div class="flex">
                <div class="w-1/2 m-4 gap-1 overflow-hidden bg-white @[480px]:gap-2 aspect-[9/10] rounded-xl flex">
                    <div class="w-full bg-center bg-no-repeat bg-cover aspect-auto rounded-none flex-1"
                        style="background-image: url({{ asset($product->img) }});">
                    </div>
                </div>
                <div>
                    <h1
                        class="text-white text-2xl font-bold leading-tight tracking-[-0.015em] px-4 text-left pb-3 pt-5">
                        {{ $product['name'] }}
                    </h1>
                    <h3
                        class="text-[#54D12B] bg-[#273620] text-3xl font-bold leading-tight tracking-[-0.015em] ms-4 px-6 py-4">
                        Rp @convert($product['price'])
                    </h3>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                        <input type="hidden" name="name" value="{{ $product['name'] }}">
                        <input type="hidden" name="price" value="{{ $product['price'] }}">
                        <input type="hidden" name="img" value="{{ $product['img'] }}">
                        <input type="number" name="quantity" id="quantityInput" value="1" min="1" hidden>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4 m-5">
                            <dt class="font-medium text-[#A3C299]">Stok</dt>
                            <dd class="text-[#A3C299] sm:col-span-2">
                                <div class="flex items-center rounded  w-30">
                                    {{ $product->stock }}
                                </div>
                            </dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4 m-5">
                            <dt class="font-medium text-[#A3C299]">Jumlah</dt>
                            <dd class="text-[#A3C299] sm:col-span-2">
                                <div class="flex items-center rounded border border-[#A3C299] w-30">
                                    <button type="button" id="kurangBtn"
                                        class="size-10 leading-10 text-[#A3C299] transition hover:opacity-75 ">&minus;</button>
                                    <input type="number" id="Quantity" value="1" min="1"
                                        class="h-10 w-10 text-center sm:text-sm" readonly />
                                    <button type="button" id="tambahBtn"
                                        class="size-10 leading-10 text-[#A3C299] transition hover:opacity-75">&plus;</button>
                                </div>
                            </dd>
                        </div>

                        <div class="flex justify-stretch">
                            <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 justify-start">
                                <button type="submit"
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#f5f2f0] text-[#172112] text-sm font-bold leading-normal tracking-[0.015em]">
                                    <span class="truncate">Tambah ke Keranjang</span>
                                </button>
                                <a href="https://wa.me/6288218636562"
                                    class="flex min-w-[84px] max-w-[480px] items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#54D12B] text-[#172112] text-sm font-bold leading-normal tracking-[0.015em]">
                                    <span class="truncate">Pesan via WhatsApp</span>
                                </a>
                            </div>
                        </div>
                    </form>

                    <script>
                        const kurangBtn = document.getElementById('kurangBtn');
                        const tambahBtn = document.getElementById('tambahBtn');
                        const qtyInput = document.getElementById('Quantity');
                        const hiddenQty = document.getElementById('quantityInput');

                        kurangBtn.addEventListener('click', () => {
                            let value = parseInt(qtyInput.value);
                            if (value > 1) {
                                qtyInput.value = value - 1;
                                hiddenQty.value = value - 1;
                            }
                        });

                        tambahBtn.addEventListener('click', () => {
                            let value = parseInt(qtyInput.value);
                            qtyInput.value = value + 1;
                            hiddenQty.value = value + 1;
                        });
                    </script>
                </div>
            </div>

            <div>
                <h3 class="text-white text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Deskripsi</h3>
                <p class="text-[#A3C299] text-base font-normal leading-normal pb-3 pt-1 px-4 text-justify">
                    {{ $product->description }}
                </p>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</x-layout>
