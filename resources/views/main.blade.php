<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore the Milky Way</title>
    @vite('public/css/output.css')
    <link rel="icon" type="DLOR" href="{{ asset('/assets/favicon.ico') }}" />
  </head>
  <body class="bg-space-milkyway bg-black bg-cover cursor-space-ship">
    <div class="welcomingText flex justify-center bg-dark-sky fixed w-screen h-screen top-0 overflow-hidden scrollbar-none">
      <p class="text-white tracking-wide font-arcade text text-3xl md:text-7xl pt-4 grid place-content-center" id="output"></p>
    </div>

    <div class="main container mx-auto" id="asset">
      <div class="flex flex-row justify-between mt-2 mr-2 ml-2 xl:mt-6 xl:ml-6 xl:mr-6">
        <div class="w-8 md:w-auto">
          <a href="https://daskomlab.com/" target="_blank">
            <img src="{{ asset('/assets/homepage/DASKOM_White.svg') }}" alt="DASKOM" />
          </a>
        </div>
        <div class="w-8 md:w-auto"><img src="{{ asset('/assets/homepage/DLOR_2023.svg') }}" /></div>
      </div>
      <div class="title text-center text-white m-1">
        <h1 class="text-sm md:text-4xl font-arcade">DASKOM LABOLATORY OPEN RECRUITMENT 2023</h1>
      </div>
      <div class="flex justify-center">
        <img src="{{ asset('/assets/homepage/Future_Earth.gif') }}" class="m-10 md:m-16 w-27 md:w-64" />
      </div>
      <div class="text-white text-center font-pixel md:m-16">
        <p>#Explore the Milky Way</p>
        <p>Make Your Way Create The Future</p>
      </div>
      <div class="flex text-white justify-between">
        <div>
          <img src="{{ asset('/assets/homepage/Black_Hole.gif') }}" class="w-80 ml-12 hidden md:block" />
        </div>
        <div>
          <img src="{{ asset('assets/homepage/Spaceship_Pixel.png') }}" class="relative w-16 rotate-[65deg] left-72 hidden md:block" />
        </div>
        <div class="font-pixel mt-8 mr-11 hidden md:block">
          <p>Final strech to</p>
          <p>our new home</p>
          <p>Letsgoooo!!</p>
        </div>
      </div>
      <div class="flex justify-center mt-6 md:mt-0">
        <div class="text-white bg-sky-900 pt-2 pb-2 rounded-lg shadow-semi-sm shadow-yellow-500 hover:shadow-white">
          <a  class="button text-lx font-pixel pt-2 pb-2 pr-12 pl-12" href="/loginCaas"><span>LOGIN</span></a>
        </div>
      </div>
      <div class="flex text-white justify-between">
        <div class="font-pixel pl-28 hidden md:block">
          <p>This little manuver gonna</p>
          <p>cost us 6 to 9 years</p>
        </div>
        <div>
          <img src="{{ asset('/assets/homepage/Spaceship_Pixel.png') }}" class="relative w-16 rotate-[-69deg] md:top-24 right-96 hidden md:block" />
        </div>
        <div>
          <img src="{{ asset('/assets/homepage/Galaxy.gif') }}" class="relative -top-20 -left-20 w-96 rotate-12 hidden md:block" />
        </div>
      </div>
      <div class="flex text-white justify-between">
        <div>
          <img src="{{ asset('/assets/homepage/Ice_Giant.gif') }}" class="-top-20 -left-20 w-70 rotate-12 ml-72 hidden md:block" />
        </div>
        <div class="font-pixel mr-10 xl:-top-28 -top-8 hidden md:block">
          <p>Our journey begin now</p>
          <p>Goodbye home...</p>
        </div>
      </div>
      <div class="flex justify-between xl:mt-0 md:mt-11">
        <div class="text-white md:text-left text-justify m-4 md:w-1/2 md:ml-32">
          <h1 class="font-pixel">DASKOM LAB</h1>
          <p class="font-pixel">
            Laboratorium Dasar Komputer merupakan laboratorium di bawah naungan Fakultas Teknik Elektro, Univesitas Telkom yang memfasilitasi semua mahasiswa tingkat satu S1 Teknik Fisika, S1 Teknik Telekomunikasi, S1 Teknik Elektro, S1
            Teknik Biomedis, dan S1 Teknik Sistem Energi untuk lebih memahami dan dapat mengaplikasikan secara langsung dasar dasar algoritma dan pemrograman menggunakan Bahasa C.
          </p>
        </div>
        <div>
          <img src="{{ asset('/assets/homepage/Pixel_Astro.png') }}" class="relative -top-20 left-44 z-10 hidden md:block" />
        </div>
        <div>
          <img src="{{ asset('/assets/homepage/Moon.gif') }}" class="mr-40 hidden md:block" />
        </div>
      </div>
      <div class="flex justify-center mt-12">
        <a href="https://www.instagram.com/telu.daskom/" target="_blank" class="m-4 w-10 hover:invert">
          <img src="{{ asset('/assets/homepage/instagram_pixel.png') }}" alt="Instagram" />
        </a>
        <a href="https://linevoom.line.me/user/_dbhqzOurXL1CbjNxhYBPzSbYBVWZFDnFa5_ashs" target="_blank" class="m-4 w-10 hover:invert">
          <img src="{{ asset('/assets/homepage/line_pixel.png') }}" alt="line" />
        </a>
        <a href="https://www.youtube.com/@DaskomTelU/" target="_blank" class="m-4 w-10 hover:invert">
          <img src="{{ asset('/assets/homepage/youtube_pixel.png')}}" alt="youtube" />
        </a>
      </div>
      <div class="relative bottom-0 left-0 right-0 font-pixel text-center text-white mt-12 mb-2">
        <p>OFFICIAL DASKOM RECRUITMENT 2023</p>
      </div>
    </div>
    <script src="{{ asset('/js/welcome.js') }}"></script>
  </body>
</html>
