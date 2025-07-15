<x-layout>
    <x-navbar/>
    <div class="px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            
            <div class="flex flex-wrap gap-2 p-4">
                <span class="text-white text-xl font-bold leading-normal">Edit Produk: {{ $product->name }}</span>
            </div>

            <form action="/dashboard/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="flex flex-col md:flex-row gap-8 p-4">
                    <div class="w-full md:w-1/2">
                        <label for="image" class="block text-sm font-medium text-[#A3C299] mb-2">Gambar Produk</label>
                        <img src="{{ asset('storage/' . $product->img) }}" alt="{{ $product->name }}" class="rounded-xl mb-4 w-100 object-cover aspect-[9/10]">
                        <input accept="image/png,image/jpg,image/jpeg" type="file" name="img" id="image" class="block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#54D12B] file:text-[#172112] hover:file:bg-[#4abd21]">
                        @error('img')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/2">
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-medium text-[#A3C299] mb-2">Nama Produk</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="w-full bg-[#2f4328] border border-[#436039] text-white rounded-lg p-3 focus:ring-[#54D12B] focus:border-[#54D12B]">
                            @error('name')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-6">
                            <label for="price" class="block text-sm font-medium text-[#A3C299] mb-2">Harga</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">Rp</span>
                                <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" class="w-full bg-[#2f4328] border border-[#436039] text-white rounded-lg p-3 pl-9 focus:ring-[#54D12B] focus:border-[#54D12B]">
                            </div>
                            @error('price')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-6">
                            <label for="description" class="block text-sm font-medium text-[#A3C299] mb-2">Deskripsi</label>
                            <textarea name="description" id="description" rows="6" class="w-full bg-[#2f4328] border border-[#436039] text-white rounded-lg p-3 focus:ring-[#54D12B] focus:border-[#54D12B]">{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-8 flex gap-2">
                             <button type="submit" class="w-full flex items-center justify-center rounded-full h-12 px-6 bg-[#54D12B] text-[#172112] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#4abd21] transition-colors">
                                <span class="truncate">Simpan Perubahan</span>
                            </button>
                             <a href="/dashboard" class="w-full flex items-center justify-center rounded-full h-12 px-6 bg-red-600 text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-red-700 transition-colors">
                                <span class="truncate">Batal</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <x-footer/>
</x-layout>