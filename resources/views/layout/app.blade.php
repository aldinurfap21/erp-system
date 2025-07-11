<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'ERP System')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-4xl mx-auto p-6">
        {{-- Tampilkan flash message sekali saja di sini --}}
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

</body>
</html>
