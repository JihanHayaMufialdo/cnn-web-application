@extends('layout.dashboard-admin-layout')

@section('main')
    <form action="{{route('jadwal.store')}}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="id_kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Kelas
            </label>
            <select id="dropdownSelect" name="id_kelas"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                @error('id_kelas') border-red-500 @enderror">
                <option value="{{old('id_kelas')}}">Pilih kelas</option>
                @foreach (App\Models\Jadwal::getKelasValues() as $id => $kelas)
                    <option value="{{ $id }}">{{ $kelas }}</option>
                @endforeach
            </select>
        </div>
        @error('id_kelas')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Hari
            </label>
            <select id="dropdownSelect" name="hari"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                @error('hari') border-red-500 @enderror">
                <option value="{{old('hari')}}">Pilih hari</option>
                @foreach (App\Models\Jadwal::getHariValues() as $hari)
                <option value="{{ $hari }}">{{ $hari }}</option>
                @endforeach
            </select>
        </div>
        @error('hari')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="mulai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Waktu Mulai
            </label>
            <input type="time" id="mulai" name="mulai"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('mulai') border-red-500 @enderror"
                placeholder="" value="{{old('mulai')}}">
        </div>
        @error('mulai')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="selesai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Waktu Selesai
            </label>
            <input type="time" id="selesai" name="selesai"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('selesai') border-red-500 @enderror"
                placeholder="" value="{{old('selesai')}}">
        </div>
        @error('selesai')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="ruangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Ruangan
            </label>
            <select id="dropdownSelect" name="ruangan"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                @error('ruangan') border-red-500 @enderror">
                <option value="{{old('ruangan')}}">Pilih ruangan</option>
                @foreach (App\Models\Jadwal::getRuanganValues() as $ruangan)
                <option value="{{ $ruangan }}">{{ $ruangan }}</option>
                @endforeach
            </select>
        </div>
        @error('ruangan')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Jenis
            </label>
            <select id="dropdownSelect" name="jenis"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                @error('jenis') border-red-500 @enderror">
                <option value="{{old('jenis')}}">Pilih jenis perkuliahan</option>
                @foreach (App\Models\Jadwal::getJenisValues() as $jenis)
                <option value="{{ $jenis }}">{{ $jenis }}</option>
                @endforeach
            </select>
        </div>
        @error('jenis')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="flex justify-end space-x-3 mt-5">
            <button type="submit" class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                Tambah
            </button>
            <a href="{{route('jadwal.index')}}"
                class="active:outline-none text-gray-500 bg-gray-100 hover:bg-gray-200 active:ring-4 active:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:active:ring-gray-800">
                Kembali</a>
        </div>
    </form>
@endsection
