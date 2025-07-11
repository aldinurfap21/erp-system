<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ERP System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center text-gray-800">

    <div class="text-center">
        <h1 class="text-4xl font-bold mb-4">Selamat Datang di ERP System</h1>
        <p class="mb-6 text-lg text-gray-600">Sistem ini membantu mengelola produk dengan efisien.</p>

        <a href="{{ route('products.index') }}" 
           class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
            Lihat Daftar Produk
        </a>
    </div>

</body>
</html>
