
@extends('web.dashboards.dashboard-admin')

@section('main')
    <form action="{{route('kelas.update', $kelas->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="id_matkul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Mata Kuliah
            </label>
            <select id="dropdownSelect" name="id_matkul"
            class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
            @error('id_matkul') border-red-500 @enderror">
            <option value="{{ (old('id_matkul') ?? $kelas->id_matkul) ? '' : 'selected' }}">Pilih Mata Kuliah</option>
            @foreach (App\Models\Kelas::getMataKuliahValues() as $id => $nama_mk)
                <option value="{{ $id }}" {{ (old('id_matkul') ?? $kelas->id_matkul) == $id ? 'selected' : '' }}>
                    {{ $nama_mk }}
                </option>
            @endforeach
            </select>
            @error('id_matkul')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
            {{-- <select id="dropdownSelect" name="semester"
            class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
            @error('semester') border-red-500 @enderror">
            <option value="{{ (old('semester') ?? $matakuliah->semester) ? '' : 'selected' }}">Pilih semester</option>
            @foreach (App\Models\MataKuliah::getSemesterValues() as $semester)
                <option value="{{ $semester }}" {{ (old('semester') ?? $matakuliah->semester) == $semester ? 'selected' : '' }}>
                    {{ $semester }}
                </option>
            @endforeach
        </select> --}}
        <div class="mb-2">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Kelas
            </label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('nama') border-red-500 @enderror"
                placeholder="Masukkan nama kelas" value="{{ (old('nama') ?? $kelas->nama) }}">
        </div>
        @error('nama')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="id_dosen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Dosen Pengampu
            </label>
            <select id="dropdownSelect" name="id_dosen"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                @error('id_dosen') border-red-500 @enderror">
                <option value="{{ (old('id_dosen') ?? $kelas->id_dosen) ? '' : 'selected' }}">Pilih dosen pengampu</option>
                @foreach (App\Models\Kelas::getDosenValues() as $id => $nama)
                <option value="{{ $id }}" {{ (old('id_dosen') ?? $kelas->id_dosen) == $id ? 'selected' : '' }}>{{ $nama }}</option>
                @endforeach
            </select>
        </div>
        @error('id_dosen')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="periode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Periode
            </label>
            <select id="dropdownSelect" name="periode"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                @error('periode') border-red-500 @enderror">
                <option value="{{(old('periode') ?? $kelas->periode) ? '' : 'selected'}}">Pilih periode</option>
                @foreach (App\Models\Kelas::getPeriodeValues() as $periode)
                <option value="{{ $periode }}" {{(old('periode') ?? $kelas->periode) == $periode ? 'selected' : ''}}>{{ $periode }}</option>
                @endforeach
            </select>
        </div>
        @error('periode')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="kurikulum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Kurikulum
            </label>
            <select id="dropdownSelect" name="kurikulum"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                @error('kurikulum') border-red-500 @enderror">
                <option value="{{(old('kurikulum') ?? $kelas->kurikulum) ? '' : 'selected'}}">Pilih kurikulum</option>
                @foreach (App\Models\Kelas::getKurikulumValues() as $kurikulum)
                <option value="{{ $kurikulum }}" {{(old('kurikulum') ?? $kelas->kurikulum) == $kurikulum ? 'selected' : ''}}>{{ $kurikulum }}</option>
                @endforeach
            </select>
        </div>
        @error('kurikulum')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="kuota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Kuota
            </label>
            <input type="text" id="kuota" name="kuota"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('kuota') border-red-500 @enderror"
                placeholder="" value="{{old('kuota') ?? $kelas->kuota}}">
        </div>
        @error('kuota')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="flex justify-end space-x-3 mt-5">
            <button type="submit" class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                Simpan
            </button>
            <a href="{{route('kelas.index')}}"
                class="active:outline-none text-gray-500 bg-gray-100 hover:bg-gray-200 active:ring-4 active:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:active:ring-gray-800">
                Kembali</a>

        </div>
    </form>
@endsection
