<x-layout>
  <div class="flex flex-col md:flex-row min-h-screen font-sans">
    <!-- Form Section -->
    <form
      action="/register" method="POST"
      class="w-full md:w-2/5 flex flex-col justify-center items-center gap-6 py-10 px-6"
    >
      @csrf
      <h1 class="text-3xl md:text-4xl font-bold text-center">SachaInchi</h1>

      <div class="w-full max-w-sm border-b border-black">
        <input
          type="text"
          placeholder="Nama"
          name="name"
          class="w-full p-4 text-base focus:outline-none bg-transparent"
        />
      </div>

      <div class="w-full max-w-sm border-b border-black">
        <input
          type="email"
          placeholder="Email"
          name="email"
          class="w-full p-4 text-base focus:outline-none bg-transparent"
        />
      </div>

      <div class="w-full max-w-sm border-b border-black">
        <input
          type="password"
          placeholder="Password"
          name="password"
          class="w-full p-4 text-base focus:outline-none bg-transparent"
        />
      </div>

      <div class="w-full flex justify-end max-w-sm mt-2">
        <button
          class="bg-yellow-600 text-white text-sm font-bold px-4 py-2 rounded-full cursor-pointer"
        >
          Daftar
        </button>
      </div>
    </form>

    <!-- Nav / Background Section -->
    <section
      class="w-full md:w-3/5 h-64 md:h-auto flex flex-col justify-center bg-cover bg-center md:pb-10"
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.4)
          ),
          url('./img/mirrorsachainchi.jpg');
      "
    >
      <div class="text-left md:text-left space-y-2 md:space-y-0">
        <h1
          class="text-white text-lg md:text-xl px-4 py-2 cursor-pointer hover:underline"
          onclick="location.href = '/login'"
        >
          MASUK
        </h1>
        <h1
          class="bg-yellow-600 text-white text-lg md:text-xl px-4 py-2 w-fit rounded-r-xl cursor-pointer"
        >
          DAFTAR
        </h1>
      </div>
    </section>
  </div>
</x-layout>
