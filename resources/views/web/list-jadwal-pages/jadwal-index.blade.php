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

    {{-- <form action="">
        @csrf
        <div class="periode mb-6 mt-10 flex items-center">
            <label for="periode" class="block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">Periode</label>
            <select id="dropdownSelect" name="periode"
                class="text-black bg-gray-50 hover:bg-gray-100 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-xs px-5 py-1.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                <option value="{{old('periode')}}">Pilih</option>
                @foreach (App\Models\Kelas::getPeriodeValues() as $periode)
                    <option value="{{ $periode }}">{{ $periode }}</option>
                @endforeach
            </select>
            <button type="submit" id="pilih"
            class="ml-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-2.5 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Pilih</button>
        </div>
    </form> --}}

    {{-- Button --}}
    <div class="flex justify-end">
        <a type="button" href="{{ route('jadwal.create') }}"
            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
            Tambah
        </a>
    </div>

    {{-- Table --}}
    <div class="mt-5 mb-5 relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="mb-3">
            @if (session('error'))
            <x-alert.error-alert message="{{session('error')}}"/>
            @endif
            @if (session('success'))
            <x-alert.success-alert message="{{session('success')}}"/>
            @endif
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            No
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mata Kuliah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kelas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ruangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis
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
                @forelse ($data_jadwal as $jadwal)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$i++}}
                    </th>
                    <td class="px-6 py-4">
                        {{$jadwal->kelas->matakuliah->nama_mk}}
                    </td>
                    <td class="px-6 py-4">
                        {{$jadwal->kelas->nama}}
                    </td>
                    <td class="px-6 py-4">
                        {{$jadwal->hari}}
                    </td>
                    <td class="px-6 py-4">
                        {{\Carbon\Carbon::parse($jadwal->mulai)->format('H:i')}} - {{\Carbon\Carbon::parse($jadwal->selesai)->format('H:i')}}
                    </td>
                    <td class="px-6 py-4">
                        {{$jadwal->ruangan}}
                    </td>
                    <td class="px-6 py-4">
                        {{$jadwal->jenis}}
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        {{-- <a href="{{route('jadwal.show', $jadwal->id)}}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:eye"></span>
                        </a> --}}
                        <a href="{{route('jadwal.edit', $jadwal->id)}}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <form action="{{route('jadwal.destroy', $jadwal->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mt-3.5" onclick="return confirm
                            ('Anda yakin ingin menghapus data jadwal kelas {{$jadwal->kelas->matakuliah->nama_mk}} ({{$jadwal->kelas->nama}}) ?')">
                                <span class="iconify hover:text-neutral-300" data-width="25" data-icon="mdi:delete-outline"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8">Tidak Ada Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
