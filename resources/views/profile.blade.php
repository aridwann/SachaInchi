<x-layout>
    <x-navbar></x-navbar>
     <div class="px-40 flex flex-1 justify-center py-5">
          <div
            class="layout-content-container flex flex-col max-w-[960px] flex-1"
          >
            <h2
              class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5"
            >
              Profile
            </h2>
            <div class="flex p-4 @container">
              <div class="flex w-full flex-col gap-4 items-center">
                <div class="flex gap-4 flex-col items-center">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32"
                    style="
                      background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBPDUiZNAbluCgoEr_eNHNdycV33l5p4wFUYAWoX7RlNvz1BAkQw6dMijPJGRF2ssxNtOEGDW-lTNNLLJPWAaE30Ks-OyzNibZ9K57RO6A_CLu-BGPLfoM_uXN0u1F5t8JOmBQ8xaPkv4P3HdNypio9a_RukQgrbVqpkUWkheBDTKe5HgE3Zi1PFJf1iFGAxqJA-4cioy-5I5keygkzeYIVKBXsr0uwV0EbA-39l_0o3tIlkc9wWS8rc-pZ8qV9Ttk2ZZP1tRoEHXrg');
                    "
                  ></div>
                  <div
                    class="flex flex-col items-center justify-center justify-center"
                  >
                    <p
                      class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] text-center"
                    >
                      User
                    </p>
                    <p
                      class="text-[#A3C299] text-base font-normal leading-normal text-center"
                    >
                      useremail@example.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex w-full flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-white text-base font-medium leading-normal pb-2">
                  Nama
                </p>
                <input
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#A3C299] bg-[#202d19] focus:border-[#A3C299] h-14 placeholder:text-[#A3C299] p-[15px] text-base font-normal leading-normal"
                  value="User"
                />
              </label>
            </div>
            <div class="flex w-full flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-white text-base font-medium leading-normal pb-2">
                  Nomor Telepon
                </p>
                <input
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#A3C299] bg-[#202d19] focus:border-[#A3C299] h-14 placeholder:text-[#A3C299] p-[15px] text-base font-normal leading-normal"
                  value="08XXXXXXX"
                />
              </label>
            </div>
            <div class="flex w-full flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-white text-base font-medium leading-normal pb-2">
                  Alamat
                </p>
                <textarea
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#A3C299] bg-[#202d19] focus:border-[#A3C299] h-14 placeholder:text-[#A3C299] p-[15px] text-base font-normal leading-normal"
                >
Planet Mars, Blok M, Goa Warna Coklat</textarea
                >
              </label>
            </div>
            <div class="w-full items-end px-4 py-3">
              <label
                class="block mb-2 text-base font-medium text-white"
                for="user_avatar"
                >Upload file</label
              >
              <input
                class="block w-full lg:w-1/2 text-base/10 text-white border border-[#A3C299] rounded-r-lg cursor-pointer bg-[#202d19] focus:outline-none dark:placeholder-[#A3C299]"
                aria-describedby="user_avatar_help"
                id="user_avatar"
                type="file"
                accept="image/jpg, image/png, image/jpeg"
              />
              <div class="mt-1 text-sm text-white" id="user_avatar_help">
                .png, .jpg, atau .jpeg
              </div>
            </div>
            <button
              class="cursor-pointer max-w-max flex-grow-0 rounded-lg h-10 px-4 bg-[#54D12B] text-[#172112] text-sm font-bold mx-4 my-3"
            >
              Simpan Perubahan
            </button>
          </div>
        </div>
    <x-footer></x-footer>
</x-layout>