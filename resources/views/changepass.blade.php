<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('public/css/output.css')
    <link rel="icon" type="DLOR" href="{{ asset('/assets/favicon.ico') }}" />
    <title>Explore The Milky Way</title>
  </head>

  <body class="bg-dark-space bg-cover cursor-space-ship">
    <div class="flex flex-col justify-center items-center h-screen">

    @include('partials.sidebarCaas')

      <div class="flex flex-col justify-around items-center h-3/5">
        <div>
          <h1 class="font-arcade text-white text-center text-3xl md:text-5xl">GANTI PASSWORD</h1>
          <p class="font-pixel text-white text-center text-lg md:text-xl">Password minimal 8 karakter</p>
        </div>

        <form method="post" action="/submitnewpass">
            @csrf
            <div class="flex flex-col items-center justify-between font-arcade text-white text-2xl h-60">
                <input
                name="password"
                type="password"
                placeholder="PASSWORD BARU"
                required
                id="password"
                class="w-64 h-16 bg-dark-sky text-center shadow-in-semi-sm shadow-white rounded-lg duration-200 hover:shadow-in-semi-sm hover:shadow-dark-sun active:shadow-in-semi-sm active:shadow-bright-sun"
                />
                <input
                  type="password"
                  placeholder="KONFIRMASI PASS"
                  class="w-64 h-16 bg-dark-sky text-center shadow-in-semi-sm shadow-white rounded-lg duration-200 hover:shadow-in-semi-sm hover:shadow-dark-sun active:shadow-in-semi-sm active:shadow-bright-sun"
                  name="confirmpassword"
                  required
                />
                <!-- Button Container -->
                <button type="submit"  class="w-32 h-12 bg-dark-sky text-center shadow-in-semi-sm shadow-white rounded-lg duration-200 hover:shadow-semi-sm hover:shadow-dark-sun hover:bg-deep-sky active:shadow-in-semi-sm active:shadow-bright-sun">
                  <h1 class="triangle flex justify-center items-center h-[48px] hover:text-3xl active:text-2xl">▶</h1>
                </button>
              </div>
        </form>
      </div>
      @include('partials.footer')
    </div>
  </body>
</html>
