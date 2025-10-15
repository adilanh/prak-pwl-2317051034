@extends('layouts.app')

@section('title','Edit Mata Kuliah')
@section('navbar') @include('partials.navbar') @endsection
@section('footer') @include('partials.footer') @endsection

@section('content')
<section class="flex justify-center items-start pt-20">
  <div class="w-full max-w-md p-8 rounded-2xl bg-white/60 backdrop-blur-xl
              shadow-2xl border border-white/30">
    <h1 class="text-2xl font-semibold text-green-700 text-center mb-6">Edit Mata Kuliah</h1>

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST" class="space-y-5">
      @csrf
      @method('PUT')

      <div>
        <label for="nama_mk" class="block text-sm font-medium text-gray-700">Nama Mata Kuliah</label>
        <input id="nama_mk" name="nama_mk" type="text" value="{{ $mk->nama_mk }}" required
          class="mt-1 w-full rounded-lg border border-green-200 bg-white/70
                 focus:ring-2 focus:ring-green-400 focus:border-green-400 px-3 py-2">
      </div>

      <div>
        <label for="sks" class="block text-sm font-medium text-gray-700">SKS</label>
        <input id="sks" name="sks" type="number" value="{{ $mk->sks }}" required
          class="mt-1 w-full rounded-lg border border-green-200 bg-white/70
                 focus:ring-2 focus:ring-green-400 focus:border-green-400 px-3 py-2">
      </div>

      <button type="submit"
        class="w-full py-2.5 rounded-lg font-semibold text-white
               bg-gradient-to-r from-green-500 to-blue-400 shadow-md hover:opacity-90 transition">
        Update
      </button>
    </form>
  </div>
</section>
@endsection
