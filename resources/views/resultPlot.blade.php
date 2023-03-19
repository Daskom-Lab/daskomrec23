<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore the Milky Way</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/output.css') }}">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/homepage/DLOR_2023.svg') }}" />
 </head>
 <body class="bg-dark-space bg-black bg-cover cursor-space-ship">
@include('partials.sidebarAdm')

<div class="flex justify-center ">
<div class="mx-3 mt-10 bg-deep-sky rounded-xl shadow-semi-sm shadow-dark-sun">
    <div class="pt-5 flex justify-center text-center font-arcade text-white text-2xl">
        <div>
          <div>
            <p>Hasil Plot Daskom Laboratory Open Recruitment</p>
          </div>
          <div>
            <p>Total Jadwal : {{$countshift}}</p>
          </div>
          <p>
            <span>Total Caas Sudah pilih jadwal : {{$plot->count()}}</span>
          </p>
        </div>
    </div>
    <div class="p-3">
        <div>
            <div class="pb-4">
              @if($passcheck->isPlotRun==1)
                <div>
                    <a href="/resultPlot">
                        <button type="button" class="w-24 h-10 mt-2 text-xs bg-[#00172B] text-center text-white font-arcade shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[0px_0px_8px_2px_#F0A164] hover:bg-[#233B4E] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]">
                        Refresh
                        </button>
                    </a>
                    <a href="/ListShift">
                        <button type="button" class="w-24 h-10 mt-2 text-xs bg-[#00172B] text-center text-white font-arcade shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[0px_0px_8px_2px_#F0A164] hover:bg-[#233B4E] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]">
                        Kembali
                        </button>
                    </a>
                </div>
              @else
              <div>
                <a href="/ListShift">
                    <button type="button" class="w-24 h-10 mt-2 text-xs bg-[#00172B] text-center text-white font-arcade shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[0px_0px_8px_2px_#F0A164] hover:bg-[#233B4E] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]">
                    Kembali
                    </button>
                </a>
            </div>
            @endif
            </div>
            @if($countshift!=0)
            <div class="flex justify-center font-arcade tracking-wide pt-4">
            <table id="plot-table" class="table-auto text-center text-white bg-dream-dark">
                <thead>
                    <tr>
                        <th class="border border-white px-2">No.</th>
                        <th class="border border-white px-2">SHIFT</th>
                        <th class="border border-white px-2">Tanggal</th>
                        <th class="border border-white px-2">Waktu</th>
                        <th class="border border-white px-2">Kuota</th>
                        <th class="border border-white px-2">LIST</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($shift as $p)
                    <tr>
                        <td class="border border-white px-2">{{ $no++ }}</td>
                        <td class="border border-white px-2">{{ $p->shiftname }}</td>
                        <td class="border border-white px-2">{{ \Carbon\Carbon::parse($p->day)->isoFormat('dddd, D MMMM Y') }}</td>
                        <td class="border border-white px-2">{{ $p->time_start }} - {{ $p->time_end }} WIB</td>
                        <td class="border border-white px-2">{{ $p->quota }}</td>

                        <td class="border border-white px-2">
                        @foreach($plot as $a)
                        @if($a->shifts_id==$p->id)
                        <div>
                        <span ">{{$a->nim}}</span>
                        </div>
                        @else
                        @endif
                        @endforeach
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="d-flex justify-content-center">
              <div class="">{{ $shift->links('pagination::pagination') }}</div>
              </div>
          </div> --}}
            @else
            <div class="text-center text-nim-head">
              <span>Belum ada Jadwal yang dibuat</span>
            </div>
            @endif
        </div>
    </div>
</div>
</section>
</body>
</html>
