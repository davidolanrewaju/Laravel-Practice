<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite('resources/css/app.css')
    <title>
        Laravel App
    </title>
</head>

<body class="w-full h-full bg-gray-100">
    <div class="w-4/5 mx-auto">
        <div class="text-center pt-16">
            <h1 class="text-3xl text-gray-700">
                All Articles
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="py-10 sm:py-14">
            <a class="primary-btn inline text-base sm:text-md bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
                href="{{ route('blog.create') }}">
                New Article
            </a>
        </div>
    </div>

    @forelse ($posts as $post)
        <div class="w-4/5 mx-auto pb-10">
            <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
                <div class="w-11/12 mx-auto pb-10">
                    <h2 class="text-gray-900 text-xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                        <a href="{{ route('blog.show', ['id' => $post->id]) }}">
                            {{ $post->title }}
                        </a>
                    </h2>

                    <p class="text-gray-900 text-md py-8 w-full break-words">
                        {{ $post->description }}
                    </p>

                    <span class="text-gray-500 text-sm sm:text-base">
                        Made by:
                        <a href=""
                            class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all">
                            Dary
                        </a>
                        on {{ $post->updated_at }}
                    </span>
                </div>
            </div>
        </div>
    @empty
        <h1>No post added yet</h1>
    @endforelse

</body>

</html>
