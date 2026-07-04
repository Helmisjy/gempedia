<!DOCTYPE html>
<html>
<head>
    <title>Gamepedia Admin</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>
<body>

<div class="container mx-auto p-6">

    @if(session('success'))
        <div class="mb-4 bg-green-100 p-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>