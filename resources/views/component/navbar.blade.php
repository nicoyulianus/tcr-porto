<nav class="flex justify-between p-2 md:px-10 md:py-3">
      <div class="md:w-[112px] w-[90px] p-2 flex items-center">
        <img
          src="./img/Savin Logo-01 3.png"
          alt="Savin-Logo"
          width="100%"
          height="35px"
        />
      </div>
      <div class="flex justify-center md:hidden">
        <button
          id="menu-toggle"
          class="text-gray-600 focus:outline-none"
        >
        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
      </div>
      <div class="flex-row hidden gap-3 md:flex md:gap-5">
        @foreach ($data as $resData)
        <button class="text-[9px] md:text-base font-semibold transition-all duration-300 border-b-2 border-transparent hover:border-black">{{$resData['name']}}</button>
        @endforeach
      </div>
    </nav>
    <div
      id="mobile-menu"
      class="fixed top-0 left-0 z-50 w-64 h-full text-black transition-transform duration-300 transform -translate-x-full bg-white"
    >
      <div class="flex items-center justify-between p-4">
        <h2 class="text-lg font-bold text-center">Menu</h2>
        <button
          id="menu-close"
          class="font-bold text-black rounded-full focus:outline-none"
        >
        X
        </button>
      </div>
      <div class="flex flex-col gap-3 px-4">
        @foreach ($data as $resData)
        <button class="text-sm font-semibold text-left transition-all duration-300 border-b-2 border-transparent hover:border-black">
          {{$resData['name']}}
        </button>

        @endforeach
      </div>
    </div>