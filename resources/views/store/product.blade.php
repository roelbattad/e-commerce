<x-layouts.app>
<div class="max-w-screen-lg mx-auto my-8">
    <div class="grid grid-cols-12 gap-x-4">
        <div class="col-span-6">
            <img class="w-full" src="https://placehold.co/400x400/png" alt="">
        </div>
        <div class="col-span-6">
            <h2 class="text-3xl">{{ $product->name }}</h2>
            <h3 class="text-base">{{ $product->name }}</h3>
            <p class="text-2xl font-bold">$1499.00</p>

            <button class="bg-blue-200 border border-blue-700 text-blue-700 p-2 rounded-md font-bold text-sm uppercase">Add to cart</button>
        </div>
    </div>
</div>
</x-layouts.app>