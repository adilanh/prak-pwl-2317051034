<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="h-screen w-screen bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ asset('images/background.jpg') }}')">

    <!-- Overlay dekorasi biar teks lebih terbaca -->
    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

    <div class="relative flex flex-col items-center justify-center h-full text-center text-white">
        <!-- Foto atau dekorasi lingkaran -->
        <div class="w-40 h-40 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center shadow-lg mb-6">
            <img src="{{ asset('images/profile.jpg') }}" alt="Foto" class="w-36 h-36 rounded-full object-cover">
        </div>

        <!-- Nama -->
        <h1 class="text-4xl font-bold tracking-wide drop-shadow-lg">{{$nama}}</h1>

        <!-- Kelas -->
        <p class="mt-3 text-lg font-medium tracking-wider bg-white/20 px-6 py-2 rounded-full shadow-md">
            Kelas: {{$kelas}}
        </p>

        <!-- NPM -->
        <p class="mt-3 text-lg font-medium tracking-wider bg-white/20 px-6 py-2 rounded-full shadow-md">
            NPM: {{$npm}}
        </p>
    </div>
</body>
</html>
