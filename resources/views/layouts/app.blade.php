<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Departemen App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-wide">
    <div class="container mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold mb-6 text-center">Departemen Keprofesian</h1>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>
