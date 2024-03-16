<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create Post</title>
</head>

<body>
    <div class="w-4/5 mx-auto">
        <div class="text-center pt-16">
            <h1 class="text-3xl text-gray-700">
                Add new post
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="m-auto pt-12">
            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center gap-2">
                    <input type="checkbox" class="bg-transparent block border-b-2 text-2xl outline-none"
                        name="is_published">
                    <label for="is_published" class="text-gray-500 text-xl">
                        Is Published
                    </label>
                </div>

                <input type="text" name="title" placeholder="Title..."
                    class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

                <input type="text" name="description" placeholder="Description..."
                    class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

                <input type="number" name="min_to_read" placeholder="Minutes to read..."
                    class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

                <textarea name="body" placeholder="Body..."
                    class="py-8 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

                <div class="flex items-center">
                    <div class="bg-grey-lighter py-10">
                        <label
                            class="w-44 flex flex-col items-center px-2 py-3 bg-emerald-600 rounded-full shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                            <span class="text-base leading-normal text-gray-100 font-semibold">
                                Select a file
                            </span>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div>

                    <button type="submit"
                        class="uppercase ml-9 mt-15 bg-emerald-600 text-gray-100 text-md font-semibold py-3 px-8 rounded-full">
                        Submit Post
                    </button>
                </div>
            </form>
        </div>
</body>

</html>
