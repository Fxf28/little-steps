<section id="about" class="bg-white dark:bg-gray-900 p-4 md:p-8 lg:p-10">
    <div class="max-w-screen-md mx-auto mb-8 lg:mb-16 text-center">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white text-center">
            Produk Populer
        </h2>
        <p class="text-gray-500 sm:text-xl dark:text-gray-400 text-center">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        </p>
    </div>
    @php
        $products = [
            [
                'id' => 1,
                'name' => 'Produk A',
                'price' => 10,
                'image' => asset('gambar/produk_contoh.jpg'),
                'rating' => 5.0,
            ],
            [
                'id' => 2,
                'name' => 'Produk B',
                'price' => 13,
                'image' => asset('gambar/produk_contoh.jpg'),
                'rating' => 5.0,
            ],
            [
                'id' => 3,
                'name' => 'Produk C',
                'price' => 16,
                'image' => asset('gambar/produk_contoh.jpg'),
                'rating' => 5.0,
            ],
            [
                'id' => 4,
                'name' => 'Produk D',
                'price' => 19,
                'image' => asset('gambar/produk_contoh.jpg'),
                'rating' => 5.0,
            ],
            // Add more products here
        ];
    @endphp

    <div class="px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-2 rounded-t-lg" src="{{ $product['image'] }}" alt="product image">
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ $product['name'] }}
                        </h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            @endfor
                        </div>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">
                            {{ number_format($product['rating'], 1) }}
                        </span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $product['price'] }}</span>
                        <a href="#"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>
