@extends('layout.dashboard-dosen-layout')

@section('main')
    <div class="">
        <select class="js-example-basic-multiple w-full md:w-1/2" name="states[]" multiple="multiple">
            <option value="AL">Alabama</option>
            <option value="WY">Wyoming</option>
        </select>
    </div>

    {{-- Table --}}
    <div class="mt-10 mb-5 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            NPM
                            <a href="#"><span class="iconify" data-width="12"
                                    data-icon="icon-park-solid:sort"></span></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Nama
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
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        081211212
                    </th>
                    <td class="px-6 py-4">
                        Agus
                    </td>
                    <td class="px-6 py-4">
                        <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
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

@push('script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: 'Select', // Placeholder yang ditampilkan
                allowClear: true
            });
        });
    </script>
@endpush
