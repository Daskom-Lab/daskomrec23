<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the Milky Way</title>
    @vite('public/css/output.css')
    <link rel="icon" type="DLOR" href="{{ asset('/assets/homepage/DLOR_2023.svg') }}" />
</head>


<body class="bg-dark-space bg-cover bg-center h-screen">
    @include('partials.sidebarAdm')
    <h1 class="font-arcade text-white text-3xl text-center pt-10">SHIFT</h1>

    <!-- add shift popup -->
    <div class="fixed z-10 inset-0 overflow-y-auto top-15 hidden" id="popup-tambah">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-deep-sky opacity-75"></div>
            </div>

            <div class="inline-block align-bottom bg-dream-dark border rounded-lg px-4 pt-5 pb-4 text-center overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <button class="fixed right-1 top-1" id="close-popupTambah">
                    <img src="{{ asset('assets/admin/radio-excluded-outline.png') }}" alt="close">
                </button>
                <h1 class="font-arcade mt-3 text-white text-4xl">Buat Shift baru</h1>
                <form class="font-arcade text-white" method="POST" action="\addShift">
                    @csrf
                    <div class="text-lg">
                        <p class="py-1">Shift</p>
                        <input
                        type="text"
                        class="text-black text-center w-48 border-white rounded-md"
                        name="shiftname"
                        required>
                        <p class="py-1">Tanggal</p>
                        <input
                        type="date"
                        class="text-black text-center w-48 border-white rounded-md"
                        name="day"
                        >
                        <p class="py-1">Waktu Mulai</p>
                        <input
                        type="time"
                        class="text-black text-center w-48 border-white rounded-md"
                        name="time_start"
                        required>
                        <p class="py-1">Waktu Selesai</p>
                        <input type="time"
                        class="text-black text-center w-48 border-white rounded-md"
                        name="time_end"
                        required>
                        <p class="py-1">Kuota</p>
                        <input type="number"
                        class="text-area-fill text-black text-center w-48 border-white rounded-md"
                        name="quota"
                        required>
                    </div>
                    <button type="button-submit" class="bg-green-700 rounded-lg py-2 px-4 m-4">Buat Shift</button>
                </form>

            </div>
        </div>
    </div>

    <!-- edit shift popup -->
    <div class="fixed z-10 inset-0 overflow-y-auto top-15 hidden" id="popup-editShift">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-deep-sky opacity-75"></div>
            </div>

            <div class="inline-block align-bottom bg-dream-dark border rounded-lg px-4 pt-5 pb-4 text-center overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <button class="fixed right-1 top-1" id="close-popupEditShift">
                    <img src="{{ asset('assets/admin/radio-excluded-outline.png') }}" alt="close">
                </button>
                <h1 class="font-arcade mt-3 text-white text-4xl">Buat Shift baru</h1>
                <form class="font-arcade text-white" method="POST" action="/addShift">
                    @csrf
                    <div class="text-lg">
                        <p class="py-1">Shift</p>
                        <input
                        type="text"
                        class="text-black text-center w-48 border-white rounded-md"
                        name="shiftname"
                        required>
                        <p class="py-1">Tanggal</p>
                        <input
                        type="date"
                        class="text-black text-center w-48 border-white rounded-md"
                        name="day"
                        >
                        <p class="py-1">Waktu Mulai</p>
                        <input
                        type="time"
                        class="text-black text-center w-48 border-white rounded-md"
                        name="time_start"
                        required>
                        <p class="py-1">Waktu Selesai</p>
                        <input type="time"
                        class="text-black text-center w-48 border-white rounded-md"
                        name="time_end"
                        required>
                        <p class="py-1">Kuota</p>
                        <input type="number"
                        class="text-area-fill text-black text-center w-48 border-white rounded-md"
                        name="quota"
                        required>
                    </div>
                    <button type="button-submit" class="bg-green-700 rounded-lg py-2 px-4 m-4">Buat Shift</button>
                </form>

            </div>
        </div>
    </div>

    {{-- Reset Shift --}}
    <div class="fixed z-10 inset-0 overflow-y-auto top-15 hidden" id="popup-reset">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-deep-sky opacity-75"></div>
            </div>

            <form class="inline-block bg-dream-dark border px-4 text-center overflow-hidden shadow-in-semi-sm shadow-white rounded-lg transform transition-all" role="dialog" method="POST" action="\deleteAllShift">
                @csrf
                <p class="text-white font-arcade text-xl pt-4">Apakah kamu yakin untuk menghapus seluruh shift?</p>
                <button type="submit" class="text-white font-arcade bg-red-700 shadow-in-semi-sm shadow-white rounded-lg py-2 px-4 m-4" >Hapus Shift</button>
                <button type="button" class="text-white font-arcade bg-green-700 shadow-in-semi-sm shadow-white rounded-lg py-2 px-4 m-4" id="close-popupReset">Batal</button>
            </form>
        </div>
    </div>
    {{-- Reset Plot --}}
    <div class="fixed z-10 inset-0 overflow-y-auto top-15 hidden" id="popup-resetPlot">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-deep-sky opacity-75"></div>
            </div>

            <form class="inline-block bg-dream-dark border px-4 text-center overflow-hidden shadow-in-semi-sm shadow-white rounded-lg transform transition-all" role="dialog" method="POST" action="\resetPlot">
                @csrf
                <p class="text-white font-arcade text-xl pt-4">Apakah kamu yakin untuk mereset seluruh plot?</p>
                <button type="submit" class="text-white font-arcade bg-red-700 shadow-in-semi-sm shadow-white rounded-lg py-2 px-4 m-4" >Reset plot</button>
                <button type="button" class="text-white font-arcade bg-green-700 shadow-in-semi-sm shadow-white rounded-lg py-2 px-4 m-4" id="close-popupResetPlot">Batal</button>
            </form>
        </div>
    </div>
    {{-- Hapus Shift --}}
    <div class="fixed z-10 inset-0 overflow-y-auto top-15 hidden" id="popup-deleteShift">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-deep-sky opacity-75"></div>
            </div>

            <form class="inline-block bg-dream-dark border px-4 text-center overflow-hidden shadow-in-semi-sm shadow-white rounded-lg transform transition-all" role="dialog" method="POST" action="\deleteAllShift">
                @csrf
                <p class="text-white font-arcade text-xl pt-4">Apakah kamu yakin untuk menghapus shift ini?</p>
                <button type="submit" class="text-white font-arcade bg-red-700 shadow-in-semi-sm shadow-white rounded-lg py-2 px-4 m-4" >Hapus Shift</button>
                <button type="button" class="text-white font-arcade bg-green-700 shadow-in-semi-sm shadow-white rounded-lg py-2 px-4 m-4" id="close-popupReset">Batal</button>
            </form>
        </div>
    </div>


    <div class="flex justify-center mt-10">
        <div class="flex justify-between w-[53%]">
            <!-- Stats -->
            <div class="flex flex-col font-arcade text-xl w-2/5 text-white">
                <div class="flex text-white"><h1>TOTAL SHIFT : &nbsp</h1><h1 id="totalShift">{{$countshift}}</h1></div>
                <div class="flex text-white"><h1>TOTAL KUOTA : &nbsp</h1><h1 id="totalKuota">{{$totalquota}}</h1></div>
            </div>
            <!-- buttons -->
            <div class="flex justify-between font-arcade text-sm w-140">
                <a href="/resultPlot"><button class="mx-1 px-2 w-24 h-12 bg-green-700 shadow-in-semi-sm hover:shadow-semi-sm shadow-white hover:shadow-white rounded-lg text-green-200"><h1>Lihat Plottingan</h1></button></a>
                <button class="mx-1 px-2 w-24 h-12 bg-green-700 shadow-in-semi-sm hover:shadow-semi-sm shadow-white hover:shadow-white rounded-lg text-green-200" id="tambah-popup"><h1>Tambah Shift</h1></button>
                <button class="mx-1 px-2 w-24 h-12 bg-red-700 shadow-in-semi-sm hover:shadow-semi-sm shadow-white hover:shadow-white rounded-lg text-red-200" id="resetPlot-popup"><h1>Reset Plot</h1></button>
                <button class="mx-1 px-2 w-24 h-12 bg-red-700 shadow-in-semi-sm hover:shadow-semi-sm shadow-white hover:shadow-white rounded-lg text-red-200" id="reset-popup"><h1>Reset Shift</h1></button>
            </div>
        </div>
    </div>
    <!-- table of caas -->
    <div class="flex justify-center mt-2">
        <table class="shadow-lg bg-white border-collapse font-arcade">
            <tr class="bg-dream-dark text-white text-center">
              <th class="border border-white">NO</th>
              <th class="border border-white">SHIFT</th>
              <th class="border border-white">TANGGAL</th>
              <th class="border border-white">WAKTU</th>
              <th class="border border-white">KUOTA</th>
              <th class="border border-white">OPSI</th>
            </tr>
            <?php $no = 1;?>
            @foreach($shift as $s)
            <tr class="text-dream-dark text-center">
              <td class="border border-dream-dark px-2">{{$no++}}</td>
              <td class="border border-dream-dark px-10">{{$s->shiftname}}</td>
              <td class="border border-dream-dark px-10">{{$s->day}}</td>
              <td class="border border-dream-dark px-10">{{$s->time_start}} - {{$s->time_end}}</td>
              <td class="text-green-700 border border-dream-dark px-10">{{$s->quota}}</td>
              <td class="border border-dream-dark px-10">
                <a href="/EditShift/{{$s->id}}">
                    <button class="duration-200 hover:underline active:text-dream-dark">
                        <h1>Edit</h1>
                    </button>
                </a>
                <form action="/deleteShift/{{$s->id}}" method="post">
                    @csrf
                    <a>
                        <button type="submit" class="duration-200 hover:underline active:text-dream-dark" id="#deleteShift-popup">
                        <h1>Hapus</h1>
                    </button>
                    </a>
                </form>
              </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="{{ asset('/js/popup.js') }}"></script>
</body>
</html>
