@extends('layout.dashboard-admin-layout')

@section('main')
    <form action="{{ route('mahasiswa.update', $data_mahasiswa->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('nama') border-red-500 @enderror"
                placeholder="Masukan nama mahasiswa" value="{{ old('nama') ?? $data_mahasiswa->nama }}">
                @error('nama')
                    <div class="text-red-500 text-sm mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        <div class="mb-6">
            <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPM</label>
            <input type="text" id="npm" name="npm"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('npm') border-red-500 @enderror"
                placeholder="Masukan NPM mahasiswa" value="{{ old('npm') ?? $data_mahasiswa->npm }}">
                @error('npm')
                    <div class="text-red-500 text-sm mb-2">
                        {{ $message }}
                    </div>
                @enderror
        </div>

        <div class="flex justify-end space-x-3 mt-5">
            <button type="submit"
                class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Simpan</button>
            <a href="{{ route('mahasiswa.index') }}"
                class="active:outline-none text-gray-500 bg-gray-100 hover:bg-gray-200 active:ring-4 active:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:active:ring-gray-800">Kembali</a>
        </div>
    </form>
@endsection
