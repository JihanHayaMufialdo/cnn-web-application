@extends('layout.dashboard-admin-layout')

@section('main')
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="mb-6 ">
            <label for="pertemuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Pertemuan Ke-
            </label>
            <input type="text" id="pertemuan" name="pertemuan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{$pertemuan->pertemuan}}" readonly>
        </div>
        <div class="mb-6">
            <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Tanggal Pertemuan
            </label>
            {{-- <div class="relative"> --}}
                {{-- <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div> --}}
                {{-- <input datepicker datepicker-format="dd/mm/yyyy" type="text" id="tanggal"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Pilih tanggal" required> --}}
            {{-- </div> --}}
            <input type="date" name="tanggal" id="tanggal" value="{{$pertemuan->tanggal}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            readonly>
        </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="mb-6">
            <label for="mulai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Waktu Mulai
            </label>
            <input type="time" id="mulai" name="mulai"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{$pertemuan->mulai}}" readonly>
        </div>
        <div class="mb-6">
            <label for="ruangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Ruang Kuliah
            </label>
            <input type="text" name="ruangan"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800"
                value="{{$pertemuan->ruangan}}" readonly>
        </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="mb-6">
            <label for="selesai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Waktu Selesai
            </label>
            <input type="time" id="selesai" name="selesai"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{$pertemuan->selesai}}" readonly>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="mb-6">
                <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Jenis Pertemuan
                </label>
                <input type="text" name="jenis"
                    class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800"
                    value="{{$pertemuan->jenis}}" readonly>
            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="mb-6">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Status
            </label>
            <input type="text" name="status"
                    class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800"
                    value="{{$pertemuan->status}}" readonly>
        </div>
        <div class="mb-6">
            <label for="materi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Materi</label>
            {{-- <input type="text" id="materi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required> --}}
            <textarea name="materi" id="materi" rows="4" cols="50"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            readonly>{{ $pertemuan->materi }}</textarea>
        </div>
    </div>

    <div class="flex justify-end space-x-3 mt-5">
        <a href="{{ route('kelas.pertemuan.index', ['kela' => $kelas->id])}}"
            class="active:outline-none text-gray-500 bg-gray-100 hover:bg-gray-200 active:ring-4 active:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:active:ring-gray-800">
            Kembali
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
@endsection
