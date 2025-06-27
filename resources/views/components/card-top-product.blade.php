@props(['product'])

<div
  class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40 hover:scale-105 transition cursor-pointer" onclick="location.href = 'products/{{ $product['id'] }}'"
>
  <div
    class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl flex flex-col"
    style="
      background-image: url({{ $product['img'] }});
    "
  ></div>
  <div>
    <p
      class="text-[#181411] text-base font-medium leading-normal"
    >
      {{ $product['name'] }}
    </p>
    <p class="text-[#8a7560] text-sm font-normal leading-normal">
      Terjual: @convert($product['sold']) 
    </p>
    <p class="text-[#f38920] text-base font-bold leading-normal my-2">
      Rp. @convert($product['price']) 
    </p>
  </div>
</div>