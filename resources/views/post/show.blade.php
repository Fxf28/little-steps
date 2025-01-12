@extends('app')

@section('content')
    <section>

        <div class="flex justify-between px-4 mx-auto max-w-screen-xl mt-5">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}
                    </h1>
                    <p class="text-base text-gray-500 dark:text-gray-400">Kategori: {{ $post->category->name }}</p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        @foreach ($post->tags as $tag)
                            <span class="text-xs bg-blue-100 text-blue-500 rounded px-2 py-1">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                </header>

                <figure>
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" loading="lazy">
                </figure>
                <div class="text-gray-900 dark:text-white my-5">
                    {!! $post->content !!}
                </div>
            </article>
        </div>

        <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
            <div class="px-4 mx-auto max-w-screen-xl">
                <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
                <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                    @forelse ($relatedPosts as $related)
                        <article class="max-w-xs">
                            <a href="{{ route('post.show', $related->slug) }}">
                                <img src="{{ asset('storage/' . $related->thumbnail) }}" class="mb-5 rounded-lg"
                                    alt="{{ $related->title }}">
                            </a>
                            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                <a href="{{ route('post.show', $related->slug) }}">{{ $related->title }}</a>
                            </h2>
                            <p class="mb-4 text-gray-500 dark:text-gray-400">
                                {{ \Illuminate\Support\Str::limit(strip_tags($related->content), 50) }}</p>
                        </article>
                    @empty
                        <p class="text-gray-500 dark:text-gray-400">No related articles available.</p>
                    @endforelse
                </div>
            </div>
        </aside>
    </section>
@endsection
