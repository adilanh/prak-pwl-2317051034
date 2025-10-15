<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>@yield('title','Aplikasi Pengguna')</title>
</head>
<body class="min-h-dvh flex flex-col overflow-x-hidden bg-transparent">

  <div class="fixed inset-0 -z-10 bg-fixed bg-cover bg-center"
       style="background-image:url('/images/background.jpg');"></div>
  <div class="fixed inset-0 -z-10 bg-black/25 backdrop-blur-sm"></div>

  @yield('navbar')
  <main class="flex-1 pt-16">
    @include('partials.alert')
    @yield('content')
  </main>

  {{-- FOOTER dinamis --}}
  @yield('footer')

</body>
</html>
