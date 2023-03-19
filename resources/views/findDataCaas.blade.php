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
                    <form class="font-arcade text-white" method="POST" action="/AddCaas">
                        @csrf
                        <div class="text-lg">
                            <p>Nama</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md my-1"
                            name="name"
                            placeholder="Maxwell Julian"
                            required>
                            <br>
                            <p>NIM</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md mx-1"
                            name="nim"
                            placeholder="1102218989"
                            required>
                            <br>
                            <p>Jurusan</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md mx-1"
                            name="major"
                            placeholder="Teknik Elektro"
                            required>
                            <br>
                            <p>Kelas</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md mx-1"
                            name="class"
                            placeholder="EL-45-01"
                            required>
                            <br>
                            <p>Email</p>
                            <input
                            type="text"
                            class="text-black text-center w-48 border-white rounded-md mx-1"
                            name="email"
                            placeholder="email@gmail.com"
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
                        <button type="submit" class="bg-green-700 rounded-lg py-2 px-4 m-4">Masukan Caas</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="items-center h-32 w-2/4 bg-white bg-opacity-10">

           <div class="grid justify-items-center my-4">
            <button class="w-48 h-14 bg-[#00172B] font-arcade text-center text-white shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[inset_0px_0px_8px_2px_#f3964a] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]" id="tambahCaas-popup">
                <h1 class="duration-200 buttonText flex justify-center items-center h-[48px] hover:text-lg active:text-base" >BUAT AKUN CAAS</h1>
            </button>
           </div>

            <div class="flex justify-around w-full font-arcade text-white text-xl">
                <div class="flex"><h1>TOTAL CAAS : &nbsp</h1><h1 id="totalCaas">{{  $countcaas}}</h1></div>
                <div class="flex"><h1>TOTAL LULUS : &nbsp</h1><h1 class="text-green-700" id="totalLulus">{{ $countcaaslolos }}</h1></div>
                <div class="flex"><h1>TOTAL GAGAL : &nbsp</h1><h1 class="text-red-700" id="totalGagal">{{ $countcaasnotlolos }}</h1></div>
            </div>
        </div>
        <!-- search bar name caas -->
        <div class="pt-8 relative text-white font-arcade py-4">
            <form action="/findCaasAccount" method="post">
                @csrf
                <input class="searchBar w-72 border-2 border-gray-300 bg-opacity-10 bg-gray-100 h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                  type="search" name="find" placeholder="Cari  NIM  CAAS">
                  <button type="submit" class="bg-green-700 hover:bg-green-800 rounded-lg py-2 px-4 m-4">Cari</button>
            </form>
        </div>
        <!-- table of caas -->

        <table class="shadow-lg bg-white border-collapse font-pixel mt-4 mb-8">
          <thead>
            <tr class="bg-dream-dark text-white text-center">
                <th class="border border-white">NO</th>
                <th class="border border-white">NAMA</th>
                <th class="border border-white">NIM</th>
                <th class="border border-white">STATUS</th>
                <th class="border border-white">TAHAP</th>
                <th class="border border-white">OPSI</th>
              </tr>
          </thead>
          <tbody>
            <?php $no = 1;?>
            <tr class="text-dream-dark text-center">

                <td class="border border-dream-dark px-2">{{ $no++ }}</td>
                <td class="border border-dream-dark px-10">{{ $datacaas->name }}</td>
                <td class="border border-dream-dark px-10">{{ $datacaas->nim }}</td>
                @if($datacaas->isPass==1)
                <td class="text-green-700 border border-dream-dark px-10">Lolos</td>
                @else
                <td class="text-red-700 border border-dream-dark px-10">Tidak lolos</td>
                @endif
                <td class="border border-[#00111E] px-10">{{ $datacaas->stagesname }}</td>
                <td class="border border-[#00111E] px-10 pt-2">
                    <a href="/EditCaasAccount/{{ $datacaas->datacaas_id }}">
                        <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 duration-200 active:text-[#00111e6b]"><h1>Edit</h1></button>
                    </a>
                    <a href="/delcaasconfirm/{{ $datacaas->datacaas_id }}">
                        <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 duration-200 active:text-[#00111e6b]"><h1>Hapus</h1></button>
                    </a>
                </td>
              </tr>
          </tbody>

        </table>


         @include('partials.footerAdm')
         <script src="{{ asset('/js/dataCaas_popup.js') }}"></script>
    </body>
</html>
