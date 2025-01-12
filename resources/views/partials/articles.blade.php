<section id="article" class="bg-white dark:bg-gray-900 p-4 md:p-8 lg:p-10">
    <div class="swiper mySwiper py-10">
        <div class="swiper-wrapper">
            @foreach ($posts as $post)
                <div class="swiper-slide flex justify-center">
                    <div
                        class="flex flex-col lg:flex-row w-full max-w-6xl bg-gray-200 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg overflow-hidden mx-4 lg:mx-0">
                        <!-- Konten Kiri -->
                        <div class="flex-1 p-6">
                            <h5 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $post->title }}</h5>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                                Category: <span class="font-semibold">{{ $post->category->name }}</span>
                            </p>
                            <div class="flex flex-wrap gap-2 mt-4">
                                @foreach ($post->tags as $tag)
                                    <span
                                        class="inline-block bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-100 text-xs font-medium px-2 py-1 rounded-lg">
                                        {{ $tag->name }}
                                    </span>
                                @endforeach
                            </div>
                            <p class="mt-4 text-sm text-gray-700 dark:text-gray-300">
                                {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 50) }}
                            </p>
                            <a href="{{ route('post.show', $post->slug) }}"
                                class="inline-block mt-6 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-400">
                                Read More
                            </a>
                        </div>
                        <!-- Gambar Kanan -->
                        <div class="flex-1 h-72 lg:h-auto">
                            <img class="w-72 h-72 object-cover" src="{{ asset('storage/' . $post->thumbnail) }}"
                                alt="{{ $post->title }}" loading="lazy" />
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination mt-4"></div>
    </div>

</section>
