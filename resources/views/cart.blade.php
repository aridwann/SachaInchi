@auth
    <x-layout>
        <x-navbar />

        <div class="flex px-40 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <h1 class="text-2xl sm:text-3xl font-bold mb-6 text-white">Keranjang</h1>

                <!-- Desktop Table -->
                <div class="overflow-x-auto border border-[#A3C299] rounded-xl hidden md:block">
                    <table class="min-w-full text-sm text-[#A3C299]">
                        <thead class="bg-[#172112]">
                            <tr>
                                <th class="text-left p-3">Produk</th>
                                <th class="text-left p-3">Harga</th>
                                <th class="text-left p-3">Qty</th>
                                <th class="text-left p-3">Total</th>
                            </tr>
                        </thead>
                        <tbody class="bg-[#172112]">
                            @foreach ([['Kemeja Katun Biru', 2, 150000], ['Celana Jeans Hitam', 1, 200000]] as [$nama, $qty, $harga])
                                <tr class="border-t border-[#A3C299]">
                                    <td class="p-3 flex items-center gap-3">
                                        <input type="checkbox" class="w-4 h-4" />
                                        <div class="w-20 h-20 bg-cover bg-center rounded-lg"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDKdT3sQ9SKoA7leDNOWiz7dIDVMBK-jFHWO_eNlFai2-4C3bt3p3np2456efdSGxvSZEQgjdpcKaO6-dEZeJcxY2xBuhSPAcgKDk0zfkxU27hdQD2XR7py4NYGW7DmrmcVic2NnR72TH8k7FWwB6be1gjTXSG-xB2tLVz1GJuQVRQaDFpCLO0KST7zdueyozY4ZjYHG-M-udMUlcGSnin7ssbXrZMIOB9kigKiHRo8X_AkyHVW00eHLEY9GthKsuBScvByDN5PqBHA');">
                                        </div>
                                        {{ $nama }}
                                    </td>
                                    <td class="p-3">Rp {{ number_format($harga, 0, ',', '.') }}</td>
                                    <td class="p-3">
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center rounded border border-[#A3C299] w-30">
                                                <button type="button" id="kurangBtn"
                                                    class="size-10 leading-10 text-[#A3C299] transition hover:opacity-75">
                                                    &minus;
                                                </button>
                                                <input type="number" id="Quantity" value="1" min="1"
                                                    class="h-10 w-10 text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                                                    value="{{ $qty }}" />
                                                <button type="button" id="tambahBtn"
                                                    class="size-10 leading-10 text-[#A3C299] transition hover:opacity-75">
                                                    &plus;
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3">Rp {{ number_format($qty * $harga, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Table -->
                <div class="md:hidden flex flex-col gap-4">
                    @foreach ([['Kemeja Katun Biru', 2, 150000], ['Celana Jeans Hitam', 1, 200000]] as [$nama, $qty, $harga])
                        <div class="border border-[#A3C299] rounded-xl p-4 bg-white">
                            <div class="flex items-start gap-4">
                                <input type="checkbox" class="w-4 h-4 mt-1 shrink-0" />

                                <!-- Kontainer Isi & Gambar -->
                                <div class="flex justify-between items-start w-full">
                                    <!-- Teks Produk -->
                                    <div class="flex flex-col text-sm">
                                        <p class="font-medium text-base mb-1">{{ $nama }}</p>
                                        <p>Harga: Rp {{ number_format($harga, 0, ',', '.') }}</p>

                                        <!-- QTY Editable -->
                                        <div class="flex items-center gap-2 my-1">
                                            <span>Qty: {{ $qty }}</span>
                                            <div class="flex flex-col items-center border border-gray-300 rounded">
                                                <button class="text-xs px-1 hover:text-black">▲</button>
                                                <button class="text-xs px-1 hover:text-black">▼</button>
                                            </div>
                                        </div>

                                        <p>Total: Rp {{ number_format($qty * $harga, 0, ',', '.') }}</p>
                                    </div>

                                    <!-- Gambar di kanan -->
                                    <div class="w-20 h-20 bg-cover bg-center rounded-full shrink-0 ml-4"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDKdT3sQ9SKoA7leDNOWiz7dIDVMBK-jFHWO_eNlFai2-4C3bt3p3np2456efdSGxvSZEQgjdpcKaO6-dEZeJcxY2xBuhSPAcgKDk0zfkxU27hdQD2XR7py4NYGW7DmrmcVic2NnR72TH8k7FWwB6be1gjTXSG-xB2tLVz1GJuQVRQaDFpCLO0KST7zdueyozY4ZjYHG-M-udMUlcGSnin7ssbXrZMIOB9kigKiHRo8X_AkyHVW00eHLEY9GthKsuBScvByDN5PqBHA');">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Subtotal & Button -->
                <div class="mt-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <p class="text-base text-white">Subtotal: <strong>Rp 500.000</strong></p>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20memesan..." target="_blank"
                        class="flex items-center gap-2 bg-[#54D12B] text-[#172112] font-bold px-4 py-2 rounded-xl text-sm hover:bg-[#54D12B] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176Z" />
                        </svg>
                        Pesan via WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <x-footer />
    </x-layout>
@else
    <script>
        window.location = "/login";
    </script>
@endauth
