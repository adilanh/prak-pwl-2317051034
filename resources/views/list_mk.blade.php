@extends('layouts.table')

@section('title','Daftar Mata Kuliah')
@section('navbar') @include('partials.navbar') @endsection
@section('footer') @include('partials.footer') @endsection

@section('table')
  <div class="flex items-center justify-between mb-4">
    <h1 class="text-lg font-semibold text-gray-800">Daftar Mata Kuliah</h1>
    <a href="{{ route('matakuliah.create') }}"
       class="inline-flex items-center rounded-lg px-4 py-2 text-sm font-medium bg-green-600 hover:bg-green-700 text-white transition">
      Tambah Mata Kuliah
    </a>
  </div>

  <div class="overflow-hidden rounded-xl shadow-md">
    <table class="w-full text-sm text-left">
      <thead class="bg-gradient-to-r from-green-500 to-blue-400 text-white text-sm uppercase tracking-wide">
        <tr>
          <th class="py-3 px-5">ID</th>
          <th class="py-3 px-5">Nama Mata Kuliah</th>
          <th class="py-3 px-5">SKS</th>
          <th class="py-3 px-5">Aksi</th>
        </tr>
      </thead>
      <tbody class="text-gray-800 bg-white/70">
        @foreach ($mks as $mk)
        <tr class="transition duration-300 hover:bg-green-100/40">
          <td class="py-3 px-5 border-b border-green-200/30">{{ $mk->id }}</td>
          <td class="py-3 px-5 border-b border-green-200/30">{{ $mk->nama_mk }}</td>
          <td class="py-3 px-5 border-b border-green-200/30">{{ $mk->sks }}</td>
          <td class="py-3 px-5 border-b border-green-200/30">
            <div class="flex items-center gap-2">
              <a href="{{ route('matakuliah.edit', $mk->id) }}"
                 class="inline-flex items-center rounded-md px-3 py-1.5 text-xs font-medium bg-blue-600 hover:bg-blue-700 text-white transition">
                Edit
              </a>
              <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="inline-flex items-center rounded-md px-3 py-1.5 text-xs font-medium bg-red-600 hover:bg-red-700 text-white transition">
                  Hapus
                </button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection