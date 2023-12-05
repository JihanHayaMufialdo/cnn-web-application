<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">

    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <div class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo-unila" class="mt-5 w-16 h-16 mx-auto">
            <hr class="mt-5 mb-3 border-t-2 border-gray-400 w-52 mx-auto">
            <span class="ml-3 dark:text-white font-poppins font-semibold">
                Selamat Datang
            </span>
            <br>
            <span class="ml-3 dark:text-white font-poppins">
                MR Kamal
            </span>
            <br>
            <span class="ml-3 dark:text-white font-poppins">
                21243632
            </span>
            <hr class="mt-3 mb-5 border-t-2 border-gray-300 w-52 mx-auto">
        </div>

        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('admin-dashboard') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 active:bg-gray-200 dark:hover:bg-gray-700 group">
                    <span class="iconify" data-width="25" data-icon="ic:round-dashboard"></span>
                    <span class="ms-3">Beranda</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="iconify" data-width="25" data-icon="iconamoon:profile-fill"></span>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profil</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="iconify" data-width="25" data-icon="fa6-solid:users"></span>
                    <span class="flex-1 ms-3 whitespace-nowrap">Daftar Akun</span>
                </a>
            </li>
            <li>
                <a href="{{ route('matakuliah.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="iconify" data-width="25" data-icon="ion:book-sharp"></span>
                    <span class="flex-1 ms-3 whitespace-nowrap">Daftar Mata Kuliah</span>
                </a>
            </li>
            <li>
                <a href="{{ route('kelas.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="iconify" data-width="25" data-icon="ic:round-class"></span>
                    <span class="flex-1 ms-3 whitespace-nowrap">Daftar Kelas</span>
                </a>
            </li>
            <li>
                <a href="{{route('jadwal.index')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="iconify" data-width="25" data-icon="mingcute:time-fill"></span>
                    <span class="flex-1 ms-3 whitespace-nowrap">Daftar Jadwal</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.daftar-mahasiswa') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="iconify" data-width="25" data-icon="ph:student-bold"></span>
                    <span class="flex-1 ms-3 whitespace-nowrap">Daftar Mahasiswa</span>
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="iconify" data-width="25" data-icon="solar:logout-2-bold"></span>
                    <span class="flex-1 ms-3 whitespace-nowrap">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
