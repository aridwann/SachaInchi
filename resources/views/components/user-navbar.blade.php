<header
class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f5f2f0] px-10 py-3"
>
  <div class="flex items-center gap-4 text-[#181411]">
    <div class="size-4">
      <svg
        viewBox="0 0 48 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z"
          fill="currentColor"
        ></path>
      </svg>
    </div>
    <h2
      class="text-[#181411] text-lg font-bold leading-tight tracking-[-0.015em]"
    >
      SachaInchi
    </h2>
  </div>
  <div class="flex flex-1 justify-center gap-8">
    <div class="flex items-center gap-9">
      <a
        class="text-[#181411] text-sm font-medium leading-normal"
        href="\#beranda"
        >Beranda</a
      >
      <a
        class="text-[#181411] text-sm font-medium leading-normal"
        href="\#produk"
        >Produk</a
      >
      <a
        class="text-[#181411] text-sm font-medium leading-normal"
        href="\#tentang"
        >Tentang Kami</a
      >
    </div>
  </div>
  <form action="/logout" method="POST" class="relative" x-data="{ show: false }">
    <p class="hover:underline cursor-pointer" @click="show = !show">
      <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#181411"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg>
    </p>
    @csrf
    <div class="absolute right-0 bottom-[-110px] flex flex-col min-w-[200px] gap-2 overflow-hidden rounded p-2 border border-gray-300 bg-[#fbfaf9] text-[#181411] text-sm leading-normal tracking-[0.015em]" x-show="show" >
      <div class="flex gap-1 items-center cursor-pointer hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#181411"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z"/></svg> 
        <p>{{ $name }}</p> 
      </div>
      <div class="flex gap-1 items-center cursor-pointer hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#181411"><path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/></svg>
        <p>Keranjang</p> 
      </div>
      <hr>
      <button class="flex gap-1 items-center cursor-pointer text-start hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#181411"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg> 
        <span>Logout</span>
      </button>
    </div>
  </form>
</header>