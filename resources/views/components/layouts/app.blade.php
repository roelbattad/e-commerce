<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('E commerce website') }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="w-full bg-black text-white">
        <div class="max-w-7xl flex justify-around mx-auto py-8">
            <h1>Logo</h1>
            <ul class="flex items-center  space-x-4">
                <li><a href="">Home</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">Categories</a></li>
            </ul>
            <div class="flex items-center space-x-1">
                <a href="">Cart</a>
                <div class="bg-white border rounded-lg text-red-300 px-2">1</div>
            </div>
            
        </div>
    </nav>
    <div>
        {{ $slot }}
    </div>
</body>
</html>