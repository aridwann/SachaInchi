<x-layout>
    <x-navbar></x-navbar>
    <div class="px-40 flex flex-1 justify-center py-5">
      <div
        class="layout-content-container flex flex-col max-w-[960px] flex-1"
      >
        <form method="GET" action="{{ route('products.index') }}" class="px-4 py-3">
          <label class="flex flex-col min-w-40 h-12 w-full">
            <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
              <div
                class="text-[#8c735a] flex border-none bg-[#f1ede9] items-center justify-center pl-4 rounded-l-xl border-r-0"
                data-icon="MagnifyingGlass"
                data-size="24px"
                data-weight="regular"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24px"
                  height="24px"
                  fill="currentColor"
                  viewBox="0 0 256 256"
                >
                  <path
                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                  ></path>
                </svg>
              </div>
              <input
                placeholder="Cari produk"
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#191410] focus:outline-0 focus:ring-0 border-none bg-[#f1ede9] focus:border-none h-full placeholder:text-[#8c735a] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                value="{{ request('search') }}"
                name="search"
              />
            </div>
          </label>
        </form>
        <h2
          class="text-[#191410] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5"
        >
          Produk Kami
        </h2>
        <div
          class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4"
        >
          @foreach ($products as $product)
            <x-card-product :product="$product"></x-card-product>
          @endforeach

          {{ $products->withQueryString()->links() }}
        </div>
      </div>
    </div>
    <x-footer></x-footer>
</x-layout>