<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('')</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-900"> <!-- Ubah warna latar belakang menjadi hitam -->
        @include('admin.layouts.sidebar')
        <div class="p-4 xl:ml-80">
        @include('admin.layouts.navbar')
        <div class="mt-12">
            @yield('content')
            
            {{-- <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
              <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
                <div class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                  <div>
                    <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white mb-1">Projects</h6> <!-- Ubah teks menjadi putih -->
                    <p class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-gray-400"> <!-- Ubah teks menjadi warna abu-abu -->
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <strong>30 done</strong> this month
                    </p>
                  </div>
                  <button aria-expanded="false" aria-haspopup="menu" id=":r5:" class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-gray-500 hover:bg-gray-500/10 active:bg-gray-500/30" type="button"> <!-- Ubah teks menjadi warna abu-abu -->
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"></path>
                      </svg>
                    </span>
                  </button>
                </div>
                <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                  <table class="w-full min-w-[640px] table-auto text-white"> <!-- Ubah teks dalam tabel menjadi putih -->
                    <thead>
                      <tr>
                        <th class="border-b border-gray-700 py-3 px-6 text-left"> <!-- Ubah border menjadi gelap -->
                          <p class="block antialiased font-sans text-[11px] font-medium uppercase text-gray-400">companies</p>
                        </th>
                        <th class="border-b border-gray-700 py-3 px-6 text-left"> <!-- Ubah border menjadi gelap -->
                          <p class="block antialiased font-sans text-[11px] font-medium uppercase text-gray-400">budget</p>
                        </th>
                        <th class="border-b border-gray-700 py-3 px-6 text-left"> <!-- Ubah border menjadi gelap -->
                          <p class="block antialiased font-sans text-[11px] font-medium uppercase text-gray-400">completion</p>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <div class="flex items-center gap-4">
                            <p class="block antialiased font-sans text-sm leading-normal text-white font-bold">Material XD Version</p> <!-- Ubah teks menjadi putih -->
                          </div>
                        </td>
                        
                        <td class="py-3 px-5 border-b border-gray-700">
                          <p class="block antialiased font-sans text-xs font-medium text-gray-400">$14,000</p> <!-- Ubah teks menjadi warna abu-abu -->
                        </td>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <div class="w-10/12">
                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-gray-400">60%</p> <!-- Ubah teks menjadi warna abu-abu -->
                            <div class="flex flex-start bg-gray-700 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1"> <!-- Ubah warna latar belakang menjadi gelap -->
                              <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 60%;"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <div class="flex items-center gap-4">
                            <p class="block antialiased font-sans text-sm leading-normal text-white font-bold">Add Progress Track</p> <!-- Ubah teks menjadi putih -->
                          </div>
                        </td>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <p class="block antialiased font-sans text-xs font-medium text-gray-400">$3,000</p> <!-- Ubah teks menjadi warna abu-abu -->
                        </td>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <div class="w-10/12">
                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-gray-400">10%</p> <!-- Ubah teks menjadi warna abu-abu -->
                            <div class="flex flex-start bg-gray-700 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1"> <!-- Ubah warna latar belakang menjadi gelap -->
                              <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 10%;"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <div class="flex items-center gap-4">
                            <p class="block antialiased font-sans text-sm leading-normal text-white font-bold">Fix Platform Errors</p> <!-- Ubah teks menjadi putih -->
                          </div>
                        </td>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <p class="block antialiased font-sans text-xs font-medium text-gray-400">Not set</p> <!-- Ubah teks menjadi warna abu-abu -->
                        </td>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <div class="w-10/12">
                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-gray-400">100%</p> <!-- Ubah teks menjadi warna abu-abu -->
                            <div class="flex flex-start bg-gray-700 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1"> <!-- Ubah warna latar belakang menjadi gelap -->
                              <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white" style="width: 100%;"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <div class="flex items-center gap-4">
                            <p class="block antialiased font-sans text-sm leading-normal text-white font-bold">Launch our Mobile App</p> <!-- Ubah teks menjadi putih -->
                          </div>
                        </td>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <p class="block antialiased font-sans text-xs font-medium text-gray-400">$20,000</p> <!-- Ubah teks menjadi warna abu-abu -->
                        </td>
                        <td class="py-3 px-5 border-b border-gray-700">
                          <div class="w-10/12">
                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-gray-400">30%</p> <!-- Ubah teks menjadi warna abu-abu -->
                            <div class="flex flex-start bg-gray-700 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1"> <!-- Ubah warna latar belakang menjadi gelap -->
                              <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 30%;"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> --}}
        </div>
        </div>
    </div>
</body>
</html>
