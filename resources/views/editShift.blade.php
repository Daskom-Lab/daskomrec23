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
    <h1 class="font-arcade text-white text-3xl text-center pt-10">EDIT SHIFT</h1>
    <div class="overflow-y-auto top-15" id="popup-tambah">
        <div class="rounded-lg px-4 pt-5 pb-4 text-center overflow-hidden shadow-xl transform transition-all " role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form class="font-arcade text-white" method="POST" action="/UpdateShift/{{ $id }}">
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
                <button type="button-submit" method="POST" class="bg-green-700 rounded-lg py-2 px-4 m-4">Update Shift</button>
            </form>

        </div>
    </div>
    @include('partials.footer')
</body>
</html>
