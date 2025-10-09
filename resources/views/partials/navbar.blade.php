<nav class="fixed top-0 left-0 w-full z-50 text-white shadow-md
            bg-gradient-to-r from-green-500 to-blue-400">
  <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
    <a href="{{ url('/') }}" class="text-lg font-semibold tracking-wide">
      Aplikasi Pengguna
    </a>
    <ul class="flex gap-2 font-medium">
      <li>
        <a href="{{ route('user.index') }}"
           @class([
              // base
              'px-3 py-1 rounded-md transition',
              // active
              'bg-white/20 text-white font-semibold shadow-sm' => request()->routeIs('user.index'),
              // inactive
              'text-white/90 hover:text-green-100' => !request()->routeIs('user.index'),
           ])> Daftar Pengguna
        </a>
      </li>
      <li>
        <a href="{{ route('user.create') }}"
           @class([
              'px-3 py-1 rounded-md transition',
              'bg-white/20 text-white font-semibold shadow-sm' => request()->routeIs('user.create'),
              'text-white/90 hover:text-green-100' => !request()->routeIs('user.create'),
           ])> Buat Pengguna
        </a>
      </li>
    </ul>
  </div>
</nav>
