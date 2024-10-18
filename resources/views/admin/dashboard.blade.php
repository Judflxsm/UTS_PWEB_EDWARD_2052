@extends('admin.layouts.app')

@section('content')
<div class="max-w-[1000px] mx-auto bg-black p-6 rounded-lg">  <!-- Menambah lebar dan background hitam -->
    
    <div class="block mb-4 mx-auto border-b border-gray-700 pb-2 max-w-[360px]">
       <a target='_blank' href='https://www.material-tailwind.com/docs/html/table' class='block w-full px-4 py-2 text-center text-gray-400 transition-all '>
       <!-- Teks berubah warna menjadi abu-abu -->
       <h1>Contact Personal</h1>
           </a>
   </div>

   <div class="w-full flex justify-between items-center mb-3 mt-12 pl-3">
       <div>
           <h3 class="text-lg font-semibold text-gray-100"></h3> <!-- Teks berubah warna menjadi abu-abu terang -->
       </div>
       <div class="mx-3">
           <div class="w-full max-w-sm min-w-[200px] relative">
           <div class="relative">
               {{-- Input pencarian jika diaktifkan dapat diatur warna latar belakang dan teks menjadi hitam dan abu-abu --}}
           </div>
           </div>
       </div>
   </div>
   
   <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-400 bg-black shadow-md rounded-lg bg-clip-border"> <!-- Background hitam dan teks abu-abu -->
   <div class="overflow-x-auto"> <!-- Tambahkan div untuk membuat tabel dapat menggulung secara horizontal -->
       <table class="w-full max-w-[800px] text-left table-auto"> <!-- Menambahkan max-w-[800px] untuk memperkecil tabel -->
           <thead>
           <tr class="border-b border-gray-700 bg-gray-900"> <!-- Baris tabel dengan background abu-abu gelap -->
               <th class="p-4 text-sm font-normal leading-none text-gray-500">Foto Profil</th>
               <th class="p-4 text-sm font-normal leading-none text-gray-500">Nama</th>
               <th class="p-4 text-sm font-normal leading-none text-gray-500">Nomor HP</th>
               <th class="p-4 text-sm font-normal leading-none text-gray-500">Status</th>
               <th class="p-4 text-sm font-normal leading-none text-gray-500">Alamat</th>
               <th class="p-4 text-sm font-normal leading-none text-gray-500"></th>
           </tr>
           </thead>
           <tbody>
           <tr class="hover:bg-gray-800"> <!-- Warna hover menjadi abu-abu gelap -->
               <td class="p-4 border-b border-gray-700 py-5">
               <img src="{{asset('assets/edward1.jpg')}}" width="70" height="70"/>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="block font-semibold text-sm text-gray-100">Edward Judika</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">089512768684</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">Mahasiswa</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">jl.kalimantan</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <button type="button" class="text-gray-500 hover:text-gray-700">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                   </svg>
               </button>
               </td>
           </tr>
           <tr class="hover:bg-gray-800">
               <td class="p-4 border-b border-gray-700 py-5">
               <img src="{{asset('assets/Cristiano.jpeg')}}"width="70" height="60" />
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="block font-semibold text-sm text-gray-100">Mas Dodo</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">097456262633</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">Karyawan</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">jl.mastrip</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <button type="button" class="text-gray-500 hover:text-gray-700">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                   </svg>
               </button>
               </td>
           </tr>
           <tr class="hover:bg-gray-800">
               <td class="p-4 border-b border-gray-700 py-5">
               <img src="{{asset('assets/messi.jpeg')}}"width="70" height="60" />
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="block font-semibold text-sm text-gray-100">bang messi</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">085646236374</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">karyawan</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">jl.jawa</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <button type="button" class="text-gray-500 hover:text-gray-700">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                   </svg>
               </button>
               </td>
           </tr>
           <tr class="hover:bg-gray-800">
               <td class="p-4 border-b border-gray-700 py-5">
               <img src="{{asset('assets/mewing.jpeg')}}"width="80" height="80" />
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="block font-semibold text-sm text-gray-100">Rizzal</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">085398357935</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">Satpam</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <p class="text-sm text-gray-500">jl.kaliurang</p>
               </td>
               <td class="p-4 border-b border-gray-700 py-5">
               <button type="button" class="text-gray-500 hover:text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
               </button>
               </td>
            </tr>
           </tbody>
       </table>
   </div>
   </div>
</div>
@endsection
