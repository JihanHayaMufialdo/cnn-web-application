@extends('web.dashboards.dashboard-admin')

@section('main')
    <form>
        <div class="mb-6">
            <label for="pertemuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pertemuan Ke-</label>
            <input type="text" id="pertemuan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6">
            <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Jadwal</label>
            <input type="text" id="tanggal"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6">
            <label for="waktu-mulai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu
                Mulai</label>
            <input type="text" id="waktu-mulai"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6">
            <label for="waktu-selesai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu
                Selesai</label>
            <input type="text" id="waktu-selesai"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6">
            <label for="ruang-kuliah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang
                Kuliah</label>
            <input type="text" id="ruang-kuliah"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
            <select id="dropdownSelect" name="dropdown"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                <option value="admin">Selesai</option>
                <option value="dosen">Belum</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                Pertemuan</label>
            <select id="dropdownSelect" name="dropdown"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                <option value="admin">Teori</option>
                <option value="dosen">Praktikum</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="ruang-kuliah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Materi</label>
            <input type="text" id="ruang-kuliah"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>


        <div class="flex justify-end space-x-3 mt-5">
            <a href="#"
                class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Tambah</a>
            <a href="{{ route('admin.detail-kelas') }}"
                class="active:outline-none text-gray-500 bg-gray-100 hover:bg-gray-200 active:ring-4 active:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:active:ring-gray-800">Kembali</a>
        </div>
    </form>
@endsection
