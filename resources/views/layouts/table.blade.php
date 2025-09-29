@extends('layouts.app')

@section('content')
  <section class="flex justify-center items-start pt-20">
    <div class="w-full max-w-2xl p-6 rounded-2xl bg-white/60 backdrop-blur-xl
                shadow-2xl border border-white/30">
      <h1 class="text-center text-2xl font-semibold text-green-700 mb-5">@yield('title')</h1>
      @yield('table')
    </div>
  </section>
@endsection
