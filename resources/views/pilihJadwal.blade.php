<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore the Milky Way</title>
    @vite('public/css/output.css')
    <link rel="icon" type="DLOR" href="{{ asset('/assets/homepage/DLOR_2023.svg') }}" />
  </head>
  <body class="bg-dark-space bg-black bg-cover cursor-space-ship">
    <div class="container">
        @include('partials.sidebarCaas')

      <!-- <div class="fixed left-0 right-0 pt-14 flex justify-center">
        <div class="bg-green-400 succsess fixed text-green-800 text-center font-pixel rounded-md px-2 py-1">Jadwal Sukses Dipilih!</div>
      </div> -->

      {{-- <div class="fixed left-0 right-0 pt-14 flex justify-center">
        <div class="bg-red-500 failed fixed text-red-800 text-center font-pixel rounded-md px-2 py-1">Jadwal Tidak Bisa Dipilih!</div>
      </div> --}}

      <div class="flex flex-col justify-around items-center h-3/5">
        <div class="pt-28">
          <h1 class="font-arcade text-white text-center text-3xl md:text-5xl">PILIH JADWAL REKRUTMEN</h1>
          <p class="font-pixel text-white text-center text-lg md:text-xl">Jadwal tidak bisa diganti ketika sudah diplih.</p>
          <p class="font-pixel text-white text-center text-lg md:text-xl">Pastikan yakin dengan jadwal yang dipilih.</p>
        </div>

        <div class="flex justify-center font-arcade tracking-wide pt-12">
          <table class="table-auto shadow-semi-sm shadow-white">
            <thead>
              <tr class="bg-dark-sky text-white">
                <th class="border border-dark-sky px-2">NO</th>
                <th class="border border-dark-sky px-2">Shift</th>
                <th class="border border-dark-sky px-2">Tanggal</th>
                <th class="border border-dark-sky px-2">Waktu</th>
                <th class="border border-dark-sky px-2">Kuota</th>
                <th class="border border-dark-sky px-2">Opsi</th>
              </tr>
            </thead>

            <tbody>
                <?php $no = 1;?>
                @foreach($shift as $s)
                <form action="/fixtakePlot/{{ $s->id }}" method="POST">
                    @csrf
                    <tr class="bg-white text-black table-auto">
                    <th class="border border-dark-sky px-2">{{$no++}}</th>
                    <th class="border border-dark-sky px-2">{{$s->shiftname}}</th>
                    <th class="border border-dark-sky px-2">{{$s->day}}</th>
                    <th class="border border-dark-sky px-2">{{$s->time_start}} - {{$s->time_end}}</th>
                    @if ($s->quota> 0)
                        <th class="text-[#426006] border border-dark-sky px-2 ">{{$s->quota - $quotaremain}}</th>
                        <th class="border border-dark-sky px-2">
                                <button class="bg-dark-sky hover:bg-green-400 rounded-md text-white hover:text-green-800 px-2 border border-gray-500 m-1" type="submit">Pilih</button>
                        </th>
                        </tr>
                    @else
                        <th class="text-red-800 border border-dark-sky px-2">PENUH</th>
                        </tr>

                    @endif
                </form>
                    @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      <div class="fixed bottom-0 left-0 right-0 font-pixel text-center text-white mt-12 mb-2">
        <p>OFFICIAL DASKOM RECRUITMENT 2023</p>
      </div>
    </div>
  </body>
</html>
