<nav class="sidebar fixed left-0 right-0 h-full w-12 md:w-20 bg-dark-sky pr-1.5 pt-3.5 z-99 transition-all ease-in-out duration-700">
    <div class="flex relative items-center">
      <i class="absolute top-1/2 right-0.5 md:right-4 cursor-pointer text-lg" id="btn">
        <img src="{{ asset('/assets/sidebar/Burger.png') }}" alt="" />
      </i>
    </div>
    <ul class="prof text-white mt-5 h-full">
      <div class="boxsidebar pb-7 m-2 text-sm font-normal opacity-0 pointer-events-none">
        <div class="mx-2 md:my-4 font-pixel">
          <h1>MENU</h1>
        </div>
        <div class="pb-2 md:pb-7 m-2">
          <img class="underlinedash" src="{{ asset('/assets/sidebar/Underline_Dashed.png') }}" alt="" />
        </div>

        <li class="relative mt-2 p-1 list-none">
          <a href="/adminHome" class="shadow-semi-xl shadow-white hover:text-black hover:bg-white flex w-full  h-8 md:h-10 rounded-xl items-center no-underline bg-dream-dark">
            <img class="pl-2 h-8" src="{{ asset("/assets/sidebar/Asteroid1.png") }}" alt="Asteroid" />
            <span class="text-xs md:text-base font-arcade whitespace-nowrap">Dashboard</span>
          </a>
        </li>

        <li class="relative mt-2 p-1 list-none">
          <a href="/caasAccount" class="shadow-semi-xl shadow-white hover:text-black hover:bg-white flex w-full  h-8 md:h-10 rounded-xl items-center no-underline bg-dream-dark">
            <img class="pl-2 h-8" src="{{ asset('/assets/sidebar/Asteroid2.png') }}" alt="Asteroid" />
            <span class="text-xs md:text-base font-arcade whitespace-nowrap">Data Caas</span>
          </a>
        </li>

        <li class="relative mt-2 p-1 list-none">
          <a href="/ListShift" class="shadow-semi-xl shadow-white hover:text-black hover:bg-white flex w-full  h-8 md:h-10 rounded-xl items-center no-underline bg-dream-dark">
            <img class="pl-2 h-8" src="{{ asset('/assets/sidebar/Asteroid4.png') }}" alt="Asteroid" />
            <span class="text-xs md:text-base font-arcade whitespace-nowrap">Shift</span>
          </a>
        </li>

        <div class="py-2 md:py-5 m-2">
          <img class="underlinedash" src="{{ asset('/assets/sidebar/Underline_Dashed.png') }}" alt="" />
        </div>

        <li class="relative mt-2 p-1 list-none">
            <a href="/logoutAdmin"  class="shadow-semi-xl shadow-white hover:shadow-red-600 hover:bg-red-200 hover:text-red-600 flex h-8 w-full rounded-xl items-center bg-dream-dark">
              <span class="text-xs md:text-base flex p-1 pl-14 md:pl-16 font-arcade">Logout</span>
              <img src="{{ asset('/assets/sidebar/logout1.png') }}" alt="Logout" />
            </a>
        </li>
      </div>
    </ul>
</nav>
<script src="{{ asset('/js/sidebar.js') }}"></script>




