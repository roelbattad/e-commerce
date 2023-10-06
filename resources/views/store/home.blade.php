<x-layouts.app>
<div class="max-w-screen-lg mx-auto">
    <!-- Banner Section -->
    <!-- Slider main container -->
    <div class="swiper navigation-swiper">
    <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img  class="w-full object-fit" src="https://images.samsung.com/ph/smartphones/galaxy-z-fold4/images/galaxy-z-fold4_highlights_kv.jpg" alt=""></div>
            <div class="swiper-slide"><img  class="w-full object-center" src="https://images.samsung.com/ph/smartphones/galaxy-z-fold4/images/galaxy-z-fold4_highlights_kv.jpg" alt=""></div>
            <div class="swiper-slide"><img class="w-full bject-center" src="https://images.samsung.com/ph/smartphones/galaxy-z-fold4/images/galaxy-z-fold4_highlights_kv.jpg" alt=""></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <div>
        <h1 class="text-4xl text-center my-8">{{ __('Featured Products') }}</h1>
        <div class="grid grid-cols-12 gap-2">
            <div class="col-span-3 bg-blue-100 h-72">1</div>
            <div class="col-span-3 bg-blue-100 h-72">2</div>
            <div class="col-span-3 bg-blue-100 h-72">3</div>
            <div class="col-span-3 bg-blue-100 h-72">4</div>
        </div>
    </div>

    <div>
        <h1 class="text-4xl text-center my-8">{{ __('Best Sellers') }}</h1>
        <div class="grid grid-cols-12 gap-2">
            <div class="col-span-3 bg-blue-100 h-72">1</div>
            <div class="col-span-3 bg-blue-100 h-72">2</div>
            <div class="col-span-3 bg-blue-100 h-72">3</div>
            <div class="col-span-3 bg-blue-100 h-72">4</div>
        </div>
    </div>
</div>
</x-layouts.app>
