<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>My Blog</title>
</head>

<body class="bg-gray-100">
    <header class="bg-gray-800 text-white p-4">
        <h1 class="text-2xl">Мій Блог</h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>
