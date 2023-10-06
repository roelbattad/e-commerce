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
        <!-- <div class="flex justify-around2xl mx-auto"> -->
        <div class="max-w-screen-lg flex justify-between mx-auto py-8">
            <h1>Logo</h1>
            <ul class="flex items-center space-x-8">
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

    <footer class="w-full bg-black text-white mt-8 py-8">
        <div class="max-w-screen-lg mx-auto">
            <div class="mb-8">
                <ul class="flex items-center text-lg justify-between">
                    <li>Brand 1</li>
                    <li>Brand 2</li>
                    <li>Brand 3</li>
                    <li>Brand 4</li>
                    <li>Brand 5</li>
                    <li>Brand 6</li>
                </ul>
            </div>
            <div class="mx-auto flex items-center justify-between">
                <p>{{ __('© 2023 E-Commerce') }}</p>
                <ul class="flex items-center  space-x-8">
                    <li><a href="">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>