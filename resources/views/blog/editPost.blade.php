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
                Edit Post
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="m-auto pt-12">
            <form action="{{ route('blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex items-center gap-2">
                    <input type="checkbox" {{ $post->is_published === true ? 'checked' : '' }}
                        class="bg-transparent block border-b-2 text-2xl outline-none" name="is_published">
                    <label for="is_published" class="text-gray-500 text-xl">
                        Is Published
                    </label>
                </div>

                <input type="text" name="title" value="{{ $post->title }}"
                    class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">
                @error('title')
                    <span class="text-md text-red-500">{{ $message }}</span>
                @enderror

                <input type="text" name="description" value="{{ $post->description }}"
                    class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">
                @error('description')
                    <span class="text-md text-red-500">{{ $message }}</span>
                @enderror

                <input type="number" name="min_to_read" value="{{ $post->min_to_read }}"
                    class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

                <textarea name="body" class="py-8 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
                    {{ $post->body }}
                </textarea>
                @error('body')
                    <span class="text-md text-red-500">{{ $message }}</span>
                @enderror

                <div class="flex items-center">
                    <div class="bg-grey-lighter py-10">
                        <label
                            class="w-44 flex flex-col items-center px-2 py-3 hover:bg-emerald-400 bg-emerald-600 rounded-full shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                            <span class="text-base leading-normal text-gray-100 font-semibold">
                                Select a file
                            </span>
                            <input type="file" name="image" class="hidden">
                        </label>
                        @error('image')
                            <span class="text-md text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit"
                        class="uppercase ml-9 mt-15 hover:bg-emerald-400 bg-emerald-600 text-gray-100 text-md font-semibold py-3 px-8 rounded-full">
                        Update Post
                    </button>
                </div>
            </form>
        </div>
</body>

</html>
