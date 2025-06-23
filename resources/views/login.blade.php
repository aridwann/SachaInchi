<x-layout>
  <div class="flex flex-col md:flex-row min-h-screen font-sans">
    <!-- Background / Nav Section -->
    <section
      class="w-full md:w-3/5 h-64 md:h-auto flex flex-col justify-center items-end bg-cover bg-center md:pb-10"
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.4)
          ),
          url('./img/sachainchi.jpeg');
      "
    >
      <div class="text-right space-y-2 md:space-y-0 font-bold">
        <h1
          class="bg-yellow-600 text-lg md:text-xl px-4 py-2 rounded-l-xl w-full cursor-pointer"
        >
          MASUK
        </h1>
        <h1
          class="text-white text-lg md:text-xl px-4 py-2 cursor-pointer hover:underline"
          onclick="location.href = '/register'"
        >
          DAFTAR
        </h1>
      </div>
    </section>

    <!-- Form Section -->
    <form
      action="/login" method="POST"
      class="w-full md:w-2/5 flex flex-col justify-center items-center gap-6 py-10 px-6"
    >
      @csrf
      <h1 class="text-3xl md:text-4xl font-bold text-center">SachaInchi</h1>

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

      <div class="w-full max-w-sm flex justify-between items-center mt-2">
        <a href="#" class="text-sm text-blue-600 hover:underline"
          >Lupa password?</a
        >
        <button
          class="bg-yellow-600 text-sm font-bold px-4 py-2 rounded-full cursor-pointer"
        >
          Masuk
        </button>
      </div>
    </form>
  </div>
</x-layout>
