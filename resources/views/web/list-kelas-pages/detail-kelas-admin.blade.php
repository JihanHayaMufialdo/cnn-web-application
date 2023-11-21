@extends('layout.dashboard-admin-layout')

@section('main')
    <div
        class="block mt-5 w-full p-6 border-gray-200 rounded-lg shadow bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="w-full">
                <table class="w-full">
                    <tr>
                        <td>Mata Kuliah</td>
                        <td>:</td>
                        <td>Logika</td>
                    </tr>
                    <tr>
                        <td>Dosen Pengampu</td>
                        <td>:</td>
                        <td>Anie Rose Irawati</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td>1</td>
                    </tr>
                </table>
            </div>
            <div class="w-full">
                <table class="w-full">
                    <tr>
                        <td>Tahun Kurikulum</td>
                        <td>:</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <td>Periode</td>
                        <td>:</td>
                        <td>2023 Ganjil</td>
                    </tr>
                    <tr>
                        <td>Jumlah Mahasiswa</td>
                        <td>:</td>
                        <td>50/50</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- Button --}}
    <div class="flex justify-end">
        <a type="button" href="{{ route('admin.tambah-pertemuan') }}"
            class="mt-10 active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Tambah</a>
    </div>

    {{-- Table --}}
    <div class="mt-5 mb-5 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Pertemuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mulai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Selesai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Materi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ruang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Teori
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        2
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Teori
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        3
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Teori
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        4
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Teori
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Teori
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Praktikum
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Praktikum
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Praktikum
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Praktikum
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        07:30
                    </td>
                    <td class="px-6 py-4">
                        09:00
                    </td>
                    <td class="px-6 py-4">
                        Praktikum
                    </td>
                    <td class="px-6 py-4">
                        sifat-sifat logika
                    </td>
                    <td class="px-6 py-4">
                        GIK L1C
                    </td>
                    <td class="px-6 py-4 flex items-center">
                        <a href="{{ route('admin.edit-pertemuan') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
