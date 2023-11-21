@extends('layout.dashboard-admin-layout')

<style>
    .action-icons a {
        margin-right: 0.5rem;
    }

    @media (min-width: 768px) {
        #default-search {
            width: 50%;
        }

        #search-button {
            right: calc(50% + 1rem);
        }
    }
</style>

@section('main')
    {{-- Search --}}
    <x-search.search />

    <div class="periode mb-6 mt-10 flex items-center">
        <label for="role" class="block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">Periode</label>
        <select id="dropdownSelect" name="dropdown"
            class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-xs px-5 py-1.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
            <option value="2023-ganjil">2023 ganjil</option>
            <option value="2023-genap">2023 genap</option>
        </select>
    </div>

    {{-- Table --}}
    <div class="mt-10 mb-5 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Mata Kuliah
                            <a href="#"><span class="iconify" data-width="12"
                                    data-icon="icon-park-solid:sort"></span></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Kelas
                            <a href="#"><span class="iconify" data-width="12"
                                    data-icon="icon-park-solid:sort"></span></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Semester
                            <a href="#"><span class="iconify" data-width="12"
                                    data-icon="icon-park-solid:sort"></span></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Mahasiswa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Logika
                    </th>
                    <td class="px-6 py-4">
                        A
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        50
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.detail-kelas') }}"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Logika
                    </th>
                    <td class="px-6 py-4">
                        A
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        45
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Logika
                    </th>
                    <td class="px-6 py-4">
                        B
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        50
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Logika
                    </th>
                    <td class="px-6 py-4">
                        C
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        50
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Logika
                    </th>
                    <td class="px-6 py-4">
                        D
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        50
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Logika
                    </th>
                    <td class="px-6 py-4">
                        A
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        50
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Matematika Diskrit
                    </th>
                    <td class="px-6 py-4">
                        A
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        50
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Matematika Diskrit
                    </th>
                    <td class="px-6 py-4">
                        A
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        50
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Matematika Diskrit
                    </th>
                    <td class="px-6 py-4">
                        A
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        50
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Matematika Diskrit
                    </th>
                    <td class="px-6 py-4">
                        A
                    </td>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        50
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Detail</a>
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
