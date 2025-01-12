<section id="article" class="bg-white dark:bg-gray-900 p-4 md:p-8 lg:p-10">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Artikel Terbaru</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore the whole collection of
                open-source web components and elements built with the utility classes from Tailwind</p>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            @foreach ($posts as $item)
                <div
                    class="flex items-center bg-gray-50 rounded-lg shadow sm:flex-row dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('posts.show', $item->slug) }}" class="flex-shrink-0">
                        <img class="max-w-[192px] max-h-[192px] rounded-lg sm:rounded-none sm:rounded-l-lg object-cover"
                            src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}" loading="lazy">
                    </a>
                    <div class="p-5 flex-grow">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">{{ $item->title }}</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">{{ $item->category->name }}</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
                            {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 50) }}</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            @foreach ($item->tags as $tag)
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                        {{ $tag->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center">
            <button type="button"
                class="items-center justify-center text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-semibold rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2"><a
                    href="{{ route('posts.all') }}">Lihat
                    semua artikel</a></button>
        </div>
    </div>
</section>
