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
 <body class="bg-dark-space bg-black bg-cover cursor-space-ship">
  <section>
    <div class="pt-32">
      <div class="flex justify-center font-arcade text-xl">
        <div class="bg-dark-sky text-white p-4 rounded-lg shadow-semi-lg shadow-bright-sun">
          <div class="text-center pt-4">
            <span>JADWAL RECRUITMENT</span>
          </div>
          <div class="text-center pt-3 pb-3">
            <div class="pb-2">
              <span >Kamu telah memilih jadwal, dan jadwal tersebut tidak dapat diubah kembali. Terima kasih!</span>
            </div>
            <div class="pt-2">
              <span class="text-green-400">{{$plots->shiftname}}</span>
            </div>
            @if($datacaas->isPass==1)
            <div class="pt-2">
              <span class="">Tanggal &nbsp:&nbsp {{\Carbon\Carbon::parse($plots->day)->isoFormat('dddd, D MMMM Y')}}</span>
            </div>
            @else
            @endif
            <div class="pt-3">
              <span class="">Waktu &nbsp:&nbsp {{$plots->time_start}} - {{$plots->time_end}} WIB</span>
            </div>
            <div class="pt-10">
              <span>Semangat dan pantau terus informasi di OA Line Recruitment Daskom Laboratory untuk instruksi berikutnya.</span>
            </div>
            <div class="flex justify-center">
                <a class="flex justify-center w-24 h-10 mt-2 text-lg bg-red-700 text-center text-red-300 font-arcade shadow-in-semi-sm shadow-white rounded-[8px] duration-200 hover:shadow-[0px_0px_8px_2px_#F0A164] hover:bg-[#233B4E] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9] " href="/dashboard">
                    <button class="text-white font-arcade items-center hover:text-lg active:text-base">
                    Kembali
                    </button>
                </a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  {{-- @include('layouts/about')
  @section('aboutdaskom')
  @endsection

  @include('layouts/footer')
  @section('footer')
  @endsection --}}
</body>

</html>
