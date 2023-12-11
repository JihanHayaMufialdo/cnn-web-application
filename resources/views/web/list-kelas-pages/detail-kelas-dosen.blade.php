@extends('layout.dashboard-dosen-layout')

@section('main')
    <a href="{{route('dosen-kelas.index')}}" class="flex items-center font-semibold text-blue-500 hover:underline">
        <span class="iconify mr-2" data-icon="ep:back"></span>
        Daftar Kelas
    </a>
    <div
        class="block mt-5 mb-5 w-full p-6 border-gray-200 rounded-lg shadow bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="w-full">
                <table class="w-full">
                    <tr>
                        <td>Mata Kuliah</td>
                        <td>:</td>
                        <td>{{$kelas->matakuliah->nama_mk}}</td>
                    </tr>
                    <tr>
                        <td>Dosen Pengampu</td>
                        <td>:</td>
                        <td>{{$kelas->dosen->nama}}</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>{{$kelas->nama}}</td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td>{{$kelas->matakuliah->semester}}</td>
                    </tr>
                </table>
            </div>
            <div class="w-full">
                <table class="w-full">
                    <tr>
                        <td>Tahun Kurikulum</td>
                        <td>:</td>
                        <td>{{$kelas->kurikulum}}</td>
                    </tr>
                    <tr>
                        <td>Periode</td>
                        <td>:</td>
                        <td>{{$kelas->periode}}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Mahasiswa</td>
                        <td>:</td>
                        <td>{{$kelas->kelasmahasiswa->count()}}/{{$kelas->kuota}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- <div class="mb-3">
        @if (session('error'))
        <x-alert.error-alert message="{{session('error')}}"/>
        @endif
        @if (session('success'))
        <x-alert.success-alert message="{{session('success')}}"/>
        @endif
    </div> --}}

    {{-- <form action="{{route('kelasmahasiswa.store')}}" method="POST">
        @csrf
        <input type="hidden" name="id_kelas" value="{{ $kelas->id }}">
        <div class="flex flex-wrap items-center justify-start">
            <div class="mr-2 mb-2">
                <select id="dropdownSelect" name="id_mahasiswa"
                    class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                    @error('id_mahasiswa') border-red-500 @enderror">
                    <option value="{{old('id_mahasiswa')}}">Pilih mahasiswa</option>
                    @foreach ($mahasiswa as $mahasiswa)
                    <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama }}</option>
                    @endforeach
                </select>
                @error('id_mahasiswa')
                <div class="text-red-500 text-sm mb-2">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="mb-2 active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                Tambah
            </button>
            <a href="{{route('kelasmahasiswa.index')}}" class="ml-auto mb-2  active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                Lihat Mahasiswa
            </a>
        </div>
    </form> --}}
    <div class="mb-3">
        @if (session('error'))
        <x-alert.error-alert message="{{session('error')}}"/>
        @endif
        @if (session('success'))
        <x-alert.success-alert message="{{session('success')}}"/>
        @endif
    </div>

    <div class="flex flex-wrap items-center justify-start">
        <div class="">
            <a href="{{route('kelasmahasiswa.index')}}" class="ml-auto  active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                Lihat Mahasiswa
            </a>
        </div>
        <a href="{{ route('dosen-kelas.dosen-pertemuan.create', ['dosen_kela' => $kelas->id])}}" class="ml-auto active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
            Tambah
        </a>
    </div>

    {{-- <form action="{{route('dosen-kelas.dosen-pertemuan.create', ['dosen_kela' => $kelas->id])}}" method="GET">
        @csrf
        <input type="hidden" name="id_kelas" value="{{ $kelas->id }}">
        <div class="flex flex-wrap items-center justify-start">
            <div class="mr-2">
                <a href="{{route('kelasmahasiswa.index')}}" class="ml-auto mb-2  active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                    Lihat Mahasiswa
                </a>
            </div>
                <select id="dropdownSelect" name="jenis"
                    class="ml-auto mr-2 text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800
                    @error('jenis') border-red-500 @enderror
                    ">
                    <option value="{{old('jenis')}}">Jenis Pertemuan</option>
                    @foreach ($jenis as $jenis)
                    <option value="{{ $jenis }}">{{ $jenis }}</option>
                    @endforeach
                </select>
                @error('jenis')
                <div class="text-red-500 text-sm mb-2">
                    {{$message}}
                </div>
                @enderror
            <button type="submit" class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                Tambah
            </button>
        </div>
    </form> --}}

    {{-- Table --}}
    <div class="mt-3 mb-5 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Pertemuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Mulai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Selesai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ruangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @forelse ($pertemuan as $pertemuan)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$pertemuan->pertemuan}}
                    </th>
                    <td class="px-6 py-4">
                        {{$pertemuan->tanggal}}
                    </td>
                    <td class="px-6 py-4">
                        {{-- {{\Carbon\Carbon::parse($pertemuan->kelas->jadwal->first()->mulai)->format('H:i')}} --}}
                        {{\Carbon\Carbon::parse($pertemuan->mulai)->format('H:i')}}
                    </td>
                    <td class="px-6 py-4">
                        {{-- {{\Carbon\Carbon::parse($pertemuan->kelas->jadwal->first()->selesai)->format('H:i')}} --}}
                        {{\Carbon\Carbon::parse($pertemuan->selesai)->format('H:i')}}
                    </td>
                    <td class="px-6 py-4">
                        {{$pertemuan->ruangan}}
                    </td>
                    <td class="px-6 py-4">
                        {{$pertemuan->jenis}}
                    </td>
                    <td class="px-6 py-4">
                        {{$pertemuan->status}}
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="{{route('dosen-kelas.dosen-pertemuan.show',['dosen_kela'=>$kelas->id, 'dosen_pertemuan'=>$pertemuan->id])}}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>

                        </a>
                        <a href="{{route('dosen-kelas.dosen-pertemuan.edit',['dosen_kela'=>$kelas->id, 'dosen_pertemuan'=>$pertemuan->id])}}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <form action="{{route('dosen-kelas.dosen-pertemuan.destroy',['dosen_kela'=>$kelas->id, 'dosen_pertemuan'=>$pertemuan->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="" onclick="return confirm('Anda yakin ingin menghapus data ?')">
                                <span class="iconify hover:text-neutral-300" data-width="25" data-icon="mdi:delete-outline"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">Tidak Ada Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
