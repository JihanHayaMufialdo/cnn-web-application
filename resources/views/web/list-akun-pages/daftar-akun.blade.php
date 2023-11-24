@extends('layout.dashboard-admin-layout')

<style>
    .action-icons a {
        margin-right: 0.5rem;
    }

    .search {
        width: 60%;
    }
</style>

@section('main')
    <div class="flex flex-wrap items-center justify-between">
        {{-- Search --}}
        <x-search.search />

        {{-- Button Add --}}
        <a type="button" href="{{ route('form-tambah-akun') }}"
            class="ml-auto active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-4 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Tambah</a>
    </div>

    {{-- Table --}}
    <div class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Nama
                            <a href="#"><span class="iconify" data-width="12"
                                    data-icon="icon-park-solid:sort"></span></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            NIP
                            <a href="#"><span class="iconify" data-width="12"
                                    data-icon="icon-park-solid:sort"></span></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="{{ route('form-edit-akun') }}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple Watch
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple iMac
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple AirPods
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        iPad Pro
                    </th>
                    <td class="px-6 py-4">
                        Gold
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Keyboard
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Smart Folio iPad Air
                    </th>
                    <td class="px-6 py-4">
                        Blue
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        AirTag
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="#" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <a href="" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25"
                                data-icon="mdi:delete-outline"></span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4"
            aria-label="Table navigation">
            <span
                class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing
                <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                    class="font-semibold text-gray-900 dark:text-white">1000</span></span>
            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
