@extends('layouts.table')

@section('title','Daftar Pengguna')
@section('navbar') @include('partials.navbar') @endsection
@section('footer') @include('partials.footer') @endsection

@section('table')
  <div class="overflow-hidden rounded-xl shadow-md">
    <table class="w-full text-sm text-left">
      <thead class="bg-gradient-to-r from-green-500 to-blue-400 text-white text-sm uppercase tracking-wide">
        <tr>
          <th class="py-3 px-5">ID</th>
          <th class="py-3 px-5">Nama</th>
          <th class="py-3 px-5">NPM</th>
          <th class="py-3 px-5">Kelas</th>
        </tr>
      </thead>
      <tbody class="text-gray-800">
        @foreach ($users as $user)
        <tr class="transition duration-300 hover:bg-green-100/40">
          <td class="py-3 px-5 border-b border-green-200/30">{{ $user->id }}</td>
          <td class="py-3 px-5 border-b border-green-200/30">{{ $user->nama }}</td>
          <td class="py-3 px-5 border-b border-green-200/30">{{ $user->npm }}</td>
          <td class="py-3 px-5 border-b border-green-200/30">{{ $user->nama_kelas }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
