<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-gray-200">
    <nav class="bg-gray-700 p-5 flex justify-between text-white">
        <p class="font-bold text-lg">Logo</p>
        <div class="flex">
            <a href="">Beranda</a>
            <a href="" class="mx-5">Info</a>
            <a href="" class="mr-5">Kontak</a>
            <a href="{{ route('logout') }}">
                <div class="bg-red-500 p-1 rounded-sm">
                    Logout
                </div>
            </a>
        </div>

    </nav>
    <div class="p-4">
        <p>dashboard</p>
    </div>
</body>

</html>
