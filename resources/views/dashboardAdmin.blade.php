<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/output.css')
    <link rel="icon" type="DLOR" href="{{ asset('/assets/favicon.ico') }}" />
    <title>Explore The Milky Way</title>
</head>



<body class="bg-dark-space bg-cover h-screen flex flex-col justify-center items-center">
    <div class="flex justify-center">

        <div class="flex flex-col justify-center items-center border-dashed border-[5px] rounded-[6rem] w-[28.75rem] h-[18rem] mt-2">
            <h1 class="text-2xl text-white font-pixel">Welcome back, {{ $admin->name }}</h1>
            <div class="flex text-xl font-pixel">
                <h3 class="text-white ">Pengumuman &nbsp:&nbsp</h3>
                @if ($announcement->isActiveCheck==1)
                <h3 class="text-[#D4EE9F]">ON</h3>
                @else
                <h3 class="text-[#EC3D32]">OFF</h3>
                @endif
            </div>
            <div class="flex text-xl font-pixel">
                <h3 class="text-white ">Isi Jadwal &nbsp:&nbsp</h3>
                @if ($announcement->isPlotRun==1)
                <h3 class="text-[#D4EE9F]">ON</h3>
                @else
                <h3 class="text-[#EC3D32]">OFF</h3>
                @endif
            </div>
            <div class="flex text-xl font-pixel">
                <h3 class="text-white ">Tahap &nbsp:&nbsp</h3>
                <h3 class="text-[#7D8993]">{{ $stages->stagesname }}</h3>
            </div>


        </div>
    </div>
    <form action="/setStatus" class="text-center" method="POST">
        @csrf
        <div class="flex text-sm font-pixel">
            <label class="text-white">
            <p>Tahap :</p>
            <select class="text-black w-32 border-white rounded-md mt-2 text-center p-1"
                    name="id"
                    value="{{ $stages->statusActive }}"
                    required>
                    @foreach($stagesAll as $s)
                        <option name="id" value="{{ $s->id }}">{{ $s->stagesname }}</option>
                    @endforeach
            </select>
        </label>
        </div>

        <div class="flex text-sm font-pixel">
            <label class="text-white">
            <p>Pengumuman :</p>
            <select class="text-black w-32 border-white rounded-md mt-2 text-center p-1"
                    name="isActiveCheck"
                    required>
                        <option value="0">Disable</option>
                        <option value="1">Enable</option>
            </select>
        </label>
        </div>
        <div class="flex col text-sm font-pixel">
            <label class="text-white ">
            <p>Plot :</p>
            <select class="text-black w-32 border-white rounded-md mt-1 text-center p-1"
                    name="isPlotRun"
                    required>
                        <option value="0">Disable</option>
                        <option value="1">Enable</option>
            </select>
            </label>
        </div>
        <button type="submit"  class="w-24 h-10 mt-4 text-xs bg-[#00172B] text-center text-white font-arcade shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[0px_0px_8px_2px_#F0A164] hover:bg-[#233B4E] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]">
        <h1 class="buttonText flex justify-center items-center hover:text-lg active:text-base">Submit</h1>
        </button>
    </form>
    <div class="flex flex-row justify-evenly items-center text-white text-opacity-50 text-base font-arcade h-1/2">

        <a href="/caasAccount">
            <button class="w-28 h-12 mx-1 bg-[#00172B] text-center shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[0px_0px_8px_2px_#F0A164] hover:bg-[#233B4E] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]">
                <h1 class="buttonText flex justify-center items-center h-[48px] hover:text-lg active:text-base">DATA CAAS</h1>
            </button>
        </a>
        <a href="/ListShift">
        <button class="w-28 h-12 mx-1 bg-[#00172B] text-center shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[0px_0px_8px_2px_#F0A164] hover:bg-[#233B4E] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]">
            <h1 class="buttonText flex justify-center items-center h-[48px] hover:text-lg active:text-base">SHIFT</h1>
        </button>
        </a>
        <a href="/logoutAdmin">
            <button  class="w-28 h-12 mx-1 bg-[#00172B] text-center shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[0px_0px_8px_2px_#F0A164] hover:bg-[#233B4E] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]">
            <h1 class="buttonText flex justify-center items-center h-[48px] hover:text-lg active:text-base">KELUAR</h1>
        </button>
        </a>

    </div>
    @include('partials.footeradm')
</body>
</html>
