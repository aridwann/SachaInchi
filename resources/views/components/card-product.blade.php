@props(['product'])

<div class="flex flex-col gap-3 pb-3">
    <div
      class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
      style="background-image: url({{ $product['img'] }});"
    ></div>
    <div>
      <p
        class="text-[#191410] text-base font-medium leading-normal"
      >
        {{ $product['name'] }}
      </p>
      <p class="text-[#8c735a] text-sm font-normal leading-normal">
        Deskripsi singkat
      </p>
      <p
      class="text-[#f38920] text-sm font-bold leading-normal my-2"
    >
      Rp {{ $product['price'] }} | Stok: {{ $product['stock'] }}
    </p>
    </div>
</div>