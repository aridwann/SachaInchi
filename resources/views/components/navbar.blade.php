<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#A3C299] px-10 py-3">
    <div class="flex items-center justify-center gap-3 text-white">
        <div class="size-4">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">
            SachaInchi
        </h2>
        <div class="flex flex-1 ms-3 justify-center items-center gap-4">
            <span class="text-white">|</span>
            <div class="px-2 py-1 {{ request()->is('/') ? 'bg-[#344a29] rounded-sm' : '' }}">
                <a class="text-white text-sm font-medium leading-normal" href="/">Beranda</a>
            </div>
            <div class="px-2 py-1 {{ request()->is('products') ? 'bg-[#344a29] rounded-sm' : '' }}">
                <a class="text-white text-sm font-medium leading-normal" href="/products">Produk</a>
            </div>

        </div>
    </div>
    @auth
        <form action="/logout" method="POST" class="flex gap-4 items-center relative" x-data="{ show: false }">
            <a href="/cart"
                class="flex gap-2 h-7 min-w-[54px] max-w-[480px] font-medium cursor-pointer items-center justify-center overflow-hidden px-2 text-white text-sm leading-normal tracking-[0.015em]  {{ request()->is('cart') ? 'bg-[#344a29] rounded-sm' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill=white>
                    <path
                        d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                </svg>
                Keranjang
            </a>
            <p class="flex min-w-[54px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#344a29] text-white text-sm font-bold leading-normal tracking-[0.015em]"
                @click="show = !show">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                    viewBox="0 0 256 256">
                    <path
                        d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z">
                    </path>
                </svg>
            </p>
            @csrf
            <div class="absolute right-0 bottom-[-80px] flex flex-col min-w-[200px] gap-2 overflow-hidden rounded p-2 border border-[#A3C299] bg-[#172112] text-white text-sm leading-normal tracking-[0.015em]"
                x-show="show">
                <div class="flex gap-1 items-center cursor-pointer hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px"
                        fill=white>
                        <path
                            d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z" />
                    </svg>
                    <p>{{ Auth::user()['name'] }}</p>
                </div>
                <hr>
                <button class="flex gap-1 items-center cursor-pointer text-start hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px"
                        fill=white>
                        <path
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
                    </svg>
                    <span>Logout</span>
                </button>
            </div>
        </form>
    @else
        <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#54D12B] text-[#172112] text-sm font-bold leading-normal tracking-[0.015em]"
            onclick="location.href = '/login'">
            <span class="truncate">Masuk</span>
        </button>
    @endauth
</header>
