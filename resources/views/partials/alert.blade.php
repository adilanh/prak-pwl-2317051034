{{-- SUCCESS --}}
@if (session('success'))
  <div x-data="{ show: true }"
       x-init="setTimeout(() => show = false, 3000)"
       x-show="show"
       x-transition.opacity.duration.300ms
       role="alert"
       class="mb-4 rounded-lg bg-green-50 border border-green-200 text-green-800 shadow-sm">
    <div class="flex items-start justify-between gap-4 px-4 py-3">
      <div class="text-sm font-medium">
        {{ session('success') }}
      </div>
      <button type="button"
              @click="show = false"
              aria-label="Tutup"
              class="rounded-md px-2 py-1 text-green-700/80 hover:text-green-900 hover:bg-green-100/70">
        ✕
      </button>
    </div>
  </div>
@endif

{{-- ERROR (flash) --}}
@if (session('error'))
  <div x-data="{ show: true }"
       x-init="setTimeout(() => show = false, 3500)"
       x-show="show"
       x-transition.opacity.duration.300ms
       role="alert"
       class="mb-4 rounded-lg bg-red-50 border border-red-200 text-red-800 shadow-sm">
    <div class="flex items-start justify-between gap-4 px-4 py-3">
      <div class="text-sm font-medium">
        {{ session('error') }}
      </div>
      <button type="button"
              @click="show = false"
              aria-label="Tutup"
              class="rounded-md px-2 py-1 text-red-700/80 hover:text-red-900 hover:bg-red-100/70">
        ✕
      </button>
    </div>
  </div>
@endif

{{-- VALIDATION ERRORS --}}
@if ($errors->any())
  <div x-data="{ show: true }"
       x-init="setTimeout(() => show = false, 5000)"
       x-show="show"
       x-transition.opacity.duration.300ms
       role="alert"
       class="mb-4 rounded-lg bg-yellow-50 border border-yellow-200 text-yellow-900 shadow-sm">
    <div class="flex items-start justify-between gap-4 px-4 py-3">
      <div class="text-sm">
        <span class="font-semibold">Terjadi kesalahan:</span>
        <ul class="list-disc ml-5 mt-1 space-y-0.5">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      <button type="button"
              @click="show = false"
              aria-label="Tutup"
              class="rounded-md px-2 py-1 text-yellow-800/80 hover:text-yellow-900 hover:bg-yellow-100/70">
        ✕
      </button>
    </div>
  </div>
@endif