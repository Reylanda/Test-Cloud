<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-200">
    <div class="flex justify-center">
        <div class="bg-white w-1/2 my-32 rounded-md drop-shadow-lg p-3">
            <p class="text-green-600 font-bold text-xl text-center">Login</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="">Email</label><br>
                <input type="email" class="border-2 border-slate-700" name="email" id=""><br>
                <label for="">Password</label><br>
                <input type="password" class="border-2 border-slate-700" name="password" id=""><br>
                <button class="bg-emerald-700 px-4 p-1 font-semibold text-white mt-3" type="submit">Masuk</button>
            </form>
        </div>

    </div>


</body>

</html>
