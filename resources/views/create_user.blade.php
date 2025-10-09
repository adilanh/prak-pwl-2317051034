@extends('layouts.app')

@section('title','Buat Pengguna Baru')
@section('navbar') @include('partials.navbar') @endsection
@section('footer') @include('partials.footer') @endsection

@section('content')
<section class="flex justify-center items-start pt-20">
  <div class="w-full max-w-md p-8 rounded-2xl bg-white/60 backdrop-blur-xl
              shadow-2xl border border-white/30">
    <h1 class="text-2xl font-semibold text-green-700 text-center mb-6">Buat Pengguna Baru</h1>

    <form action="{{ route('user.store') }}" method="POST" class="space-y-5">
      @csrf
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
        <input id="nama" name="nama" type="text"
          class="mt-1 w-full rounded-lg border border-green-200 bg-white/70
                 focus:ring-2 focus:ring-green-400 focus:border-green-400 px-3 py-2">
      </div>

      <div>
        <label for="npm" class="block text-sm font-medium text-gray-700">NPM</label>
        <input id="npm" name="npm" type="text"
          class="mt-1 w-full rounded-lg border border-green-200 bg-white/70
                 focus:ring-2 focus:ring-green-400 focus:border-green-400 px-3 py-2">
      </div>

      <div>
        <label for="kelas_id" class="block text-sm font-medium text-gray-700">Kelas</label>
        <select id="kelas_id" name="kelas_id"
          class="mt-1 w-full rounded-lg border border-green-200 bg-white/70
                 focus:ring-2 focus:ring-green-400 focus:border-green-400 px-3 py-2">
          @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit"
        class="w-full py-2.5 rounded-lg font-semibold text-white
               bg-gradient-to-r from-green-500 to-blue-400 shadow-md hover:opacity-90 transition">
        Submit
      </button>
    </form>
  </div>
</section>
@endsection
