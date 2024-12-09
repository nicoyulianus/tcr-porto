<nav class="flex justify-between p-2 md:px-12 md:py-6">
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
          ☰
        </button>
      </div>
      <div class="flex-row hidden gap-3 md:flex md:gap-7">
        @foreach ($menus as $menu)
        <button class="text-[9px] md:text-base font-semibold" >{{$menu['name']}}</button>
        @endforeach
      </div>
    </nav>
    <div
      id="mobile-menu"
      class="fixed top-0 left-0 z-50 w-64 h-full text-white transition-transform duration-300 transform -translate-x-full bg-gray-800"
    >
      <div class="flex items-center justify-between p-4">
        <h2 class="text-lg font-bold">Menu</h2>
        <button
          id="menu-close"
          class="text-white focus:outline-none"
        >
          ✖
        </button>
      </div>
      <div class="flex flex-col gap-3 px-4">
        @foreach ($menus as $menu)
        <button class="text-sm font-semibold text-left">
          {{$menu['name']}}
        </button>
        @endforeach
      </div>
    </div>