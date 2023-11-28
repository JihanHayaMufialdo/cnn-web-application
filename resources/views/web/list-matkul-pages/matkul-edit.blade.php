@extends('web.dashboards.dashboard-admin')

@section('main')
    <form action="{{route('matakuliah.update', $matakuliah->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="kode_mk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Kode Mata Kuliah
            </label>
            <input type="text" id="kode_mk" name="kode_mk"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('kode_mk') border-red-500 @enderror"
                value="{{old('kode_mk') ?? $matakuliah->kode_mk}}">
        </div>
        @error('kode_mk')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="nama_mk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Mata Kuliah
            </label>
            <input type="text" id="nama_mk" name="nama_mk"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('nama_mk') border-red-500 @enderror"
                value="{{old('nama_mk') ?? $matakuliah->nama_mk}}" >
        </div>
        @error('nama_mk')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Semester
            </label>
            <select id="dropdownSelect" name="semester"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                @error('semester') border-red-500 @enderror">
                <option value="{{ (old('semester') ?? $matakuliah->semester) ? '' : 'selected' }}">Pilih semester</option>
                @foreach (App\Models\MataKuliah::getSemesterValues() as $semester)
                    <option value="{{ $semester }}" {{ (old('semester') ?? $matakuliah->semester) == $semester ? 'selected' : '' }}>
                        {{ $semester }}
                    </option>
                @endforeach
            </select>
        </div>

        @error('semester')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="sks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                SKS
            </label>
            <input type="text" id="sks" name="sks"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('password') border-red-500 @enderror"
                placeholder="Masukkan bobot SKS" value="{{old('sks') ?? $matakuliah->sks}}">
        </div>
        @error('sks')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Status
            </label>
            <select id="dropdownSelect" name="status"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                @error('status') border-red-500 @enderror">
                <option value="" {{ (old('status') ?? $matakuliah->status) ? '' : 'selected' }}>Pilih status</option>
                @foreach (App\Models\MataKuliah::getStatusValues() as $status)
                    <option value="{{ $status }}" {{ (old('status') ?? $matakuliah->status) == $status ? 'selected' : '' }}>
                        {{ $status }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('status')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="flex justify-end space-x-3 mt-5">
            <button type="submit" class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
               Simpan
            </button>
            <a href="{{route('matakuliah.index')}}"
                class="active:outline-none text-gray-500 bg-gray-100 hover:bg-gray-200 active:ring-4 active:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:active:ring-gray-800">
                Kembali
            </a>
        </div>
    </form>
@endsection
