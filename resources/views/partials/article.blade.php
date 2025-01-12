<section id="article" class="bg-white dark:bg-gray-900 p-4 md:p-8 lg:p-10">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container ">
        <div class="slide">
            @foreach ($posts as $post)
                <div class="item" style="background-image: url({{ asset('storage/' . $post->thumbnail) }});">
                    <div class="content">
                        <div class="name">{{ $post->title }}</div>
                        <div class="des">{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 50) }}</div>
                        <button><a href="{{ route('post.show', $post->slug) }}">See More</a></button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="button">
            <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>
    <script src="{{ asset('js/style.js') }}"></script>

</section>
