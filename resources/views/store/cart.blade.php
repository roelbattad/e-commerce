<x-layouts.app>
<div class="max-w-screen-lg mx-auto">
    <div class="px-4 sm:px-6 lg:px-8 py-4 min-h-screen">
        <div class="h-20 -mt-20"></div>
        <div class="sm:flex sm:items-center justify-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900 text-center">Cart</h>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                <thead>
                    <tr>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">#</th>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Items</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-right">Quantity</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-left">1</td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                            <div class="flex items-center space-x-4">
                                <img src="https://placehold.co/50x50/png" alt="">
                                <a href="" class="text-xs">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a>
                            </div>
                            <p class="mt-2">{{ __('$100.00') }}</p>
                        </td>   
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">x1</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-left">2</td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                            <div class="flex items-center space-x-4">
                                <img src="https://placehold.co/50x50/png" alt="">
                                <a href="" class="text-xs">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a>
                            </div>
                            <p class="mt-2">{{ __('$200.00') }}</p>
                        </td>   
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">x2</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-left"></td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                            Subtotal:
                            <p class="mt-2">{{ __('$300.00') }}</p>
                        </td>   
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">x3</td>
                    </tr>
                </tbody>
                </table>
                
                <div class="flex justify-end space-x-4">
                    <button class="border border-red-400 text-red-400 p-2 text-sm font-bold uppercase rounded-md">Return</button>
                    <button class="bg-blue-200 border border-blue-700 text-blue-700 p-2 rounded-md font-bold text-sm uppercase">Checkout</button>
                </div>  
            </div>
        </div>
    </div>
</div>

</div>
</x-layouts.app>