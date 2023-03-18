<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore the Milky Way</title>
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/homepage/DLOR_2023.svg') }}" />
  </head>
  <body class="bg-dark-space bg-black bg-cover cursor-space-ship ">
    <div class="container">

        @include('partials.sidebarCaas')


      <div class="center">
        <div class="flex justify-center pt-16">
            <div class="flex justify-center pt-8 rounded-lg w-56 h-96 md:w-112 md:h-120 bg-dark-sky shadow-semi-sm shadow-yellow-300 text-white align-middle">
                @foreach ($asisstant as $as)
              <div>
              <div class="flex justify-center">
                <img class="w-24 md:w-44 rounded-lg md:top-12" src="assets/assistants/{{ $as->ascod }}.JPG" />
              </div>
              <div>
                <div class="mx-7">
                    <div class="my-2 shadow-md">
                      <p class="text-center font-arcade text-sm md:text-xl">{{ $as->name }}</p>
                    </div>
                    <div class="mt-1">
                      <h1 class="font-pixel">Kode Asisten</h1>
                      <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                      <p class="font-arcade text-sm md:text-xl">{{ $as->ascod }}</p>
                    </div>
                    <div class="mt-2">
                        <h1 class="font-pixel">Instagram</h1>
                        <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                        <p class="font-arcade md:text-xl">{{ $as->instagram }}</p>
                    </div>
                    <div class="mt-2">
                      <h1 class="font-pixel">LINE</h1>
                      <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                      <p class="font-arcade md:text-xl">{{ $as->line }}</p>
                    </div>
              </div>
                @endforeach
            </div>
        </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center mt-4">
        {{ $asisstant->links('vendor.pagination.default') }}
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
