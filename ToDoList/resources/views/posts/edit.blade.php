<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Update Task</title>
</head>

<body>
    <div class="bg-white shadow p-4 py-8">
            <div class="heading text-center font-bold text-2xl m-5 text-gray-800 bg-white">Update task</div>
            <form method="POST" action="{{ route('posts.update',$post->id) }} " enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div
                    class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
                    <label for="title" class="mb-2 dark:text-gray-900">Title</label><br>
                    <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" name="title"
                        spellcheck="false" value="{{ $post->title }}" type="text">
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <label for="content" class="mb-2 dark:text-gray-900">Content</label><br>
                    <textarea name="content" class="content bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false"
                    value="{{ $post->content }}">{{ $post->content }}</textarea>
                    @if ($errors->has('content'))
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                    @endif

                    <label for="priority" class="mb-2 dark:text-gray-900">Priority</label><br>
                    <input class="priority bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" name="priority"
                        spellcheck="false" value="{{ $post->priority }}" type="text">
                    @if ($errors->has('priority'))
                        <span class="text-danger">{{ $errors->first('priority') }}</span>
                    @endif
                    <label for="start_date" class="mb-2 dark:text-gray-900">Start date</label><br>
                    <input class="start_date bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" name="start_date"
                        spellcheck="false" value="{{ $post->start_date }}" type="date">
                    @if ($errors->has('start_date'))
                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                    @endif

                    <label for="end_date" class="mb-2 dark:text-gray-900">End date</label><br>
                    <input class="end_date bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" name="end_date"
                        spellcheck="false" value="{{ $post->end_date }}" type="date">
                    @if ($errors->has('end_date'))
                        <span class="text-danger">{{ $errors->first('end_date') }}</span>
                    @endif

                    <!-- Buttons -->
                    <div class="buttons flex justify-end">
                        <button
                            class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">Update</button>
                    </div>
                </div>
            </form>
            
    </div>


</body>

</html>
