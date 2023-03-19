<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the Milky Way</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/output.css') }}">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/homepage/DLOR_2023.svg') }}" />
</head>


<body class="bg-dark-space bg-cover  h-screen w-screen flex flex-col items-center">
    @include('partials.sidebarAdm')
        <h1 class="font-arcade text-white text-3xl text-center py-4">DATA CAAS</h1>

        <!-- add caas popup -->
        <div class="fixed z-10 inset-0 overflow-y-auto top-15 hidden" id="popup-tambahCaas">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-deep-sky opacity-75"></div>
                </div>

                <div class="inline-block align-bottom bg-dream-dark border rounded-lg px-4 pt-5 pb-4 text-center overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <button class="fixed right-1 top-1" id="close-popupTambahCaas">
                        <img src="{{ asset('assets/admin/radio-excluded-outline.png') }}" alt="close">
                    </button>
                    <h1 class="font-arcade mt-3 text-white text-4xl">Data Caas</h1>
                    <form class="font-arcade text-white" method="POST" action="/UpdateCaasAccount/{{ $datacaas->datacaas_id }}">
                        @csrf
                        <div class="text-lg">
                            <p>Nama</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md my-1"
                            name="name"
                            placeholder="Maxwell Julian"
                            value="{{ $datacaas->name }}"
                            required>
                            <br>
                            <p>NIM</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md mx-1"
                            name="nim"
                            placeholder="1102218989"
                            value="{{ $datacaas->nim }}"
                            required>
                            <br>
                            <p>Jurusan</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md mx-1"
                            name="major"
                            placeholder="Teknik Elektro"
                            value="{{ $datacaas->major }}"
                            required>
                            <br>
                            <p>Kelas</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md mx-1"
                            name="class"
                            placeholder="EL-45-01"
                            value="{{ $datacaas->class }}"
                            required>
                            <br>
                            <p>Email</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md mx-1"
                            name="email"
                            placeholder="email@gmail.com"
                            value="{{ $datacaas->email }}"
                            required>
                            <br>
                            <p class="pt-2">Tahap</p>
                            <select
                            class="text-black w-48 border-white rounded-md mt-2 text-center p-1"
                            name="stages_id"
                            required>
                                <option value="1">Administrasi</option>
                                <option value="2">Test Tulis & Coding</option>
                                <option value="3">Wawancara</option>
                                <option value="4">Wawancara 2</option>
                                <option value="5">Tugas Kecil</option>
                                <option value="6">Teaching</option>
                                <option value="7">Upgrading</option>
                            </select>
                            <br>
                            <select
                            class="text-black w-48 border-white rounded-md mt-2 text-center p-1"
                            name="isPass"
                            required>
                                <option value="1">Lulus</option>
                                <option value="0">Tidak Lulus</option>
                            </select>
                        </div>
                        <button type="submit" class="bg-green-700 rounded-lg py-2 px-4 m-4">Edit Caas</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="text-dark bg-gray-700 text-center font-pixel text-2xl p-20 rounded-lg">
            <p class="px-10 text-white">Nama</p>
            <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
            <p class="px-10 mb-5">{{ $name }}</p>
            <p class="px-10 text-white">NIM</p>
            <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
            <p class="px-10 mb-5">{{ $nim }}</p>
            <p class="px-10 text-white">Status</p>
            <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                @if($isPass==1)
                <p class="text-green-700 px-10 mb-5">Lolos</p>
                @else
                <p class="text-red-700 px-10 mb-5">Tidak lolos</p>
                @endif
                <p class="px-10 text-white">Tahap</p>
                <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                <p class="px-10">{{ $stagesname }}</p>
            </div>
        <div class="grid justify-items-center my-4">
            <button class="w-48 h-14 bg-[#00172B] font-arcade text-center text-white shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[inset_0px_0px_8px_2px_#f3964a] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]" id="tambahCaas-popup">
                <h1 class="duration-200 buttonText flex justify-center items-center h-[48px] hover:text-lg active:text-base" >EDIT AKUN CAAS</h1>
            </button>
        </div>


        <script src="{{ asset('/js/dataCaas_popup.js') }}"></script>
    </body>
</html>
