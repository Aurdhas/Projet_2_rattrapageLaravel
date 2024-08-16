<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Create Task</title>
</head>

<body>
    <div class="bg-white shadow p-4 py-8">
        <div class="heading text-center font-bold text-2xl m-5 text-gray-800 bg-white">New task</div>
        <form method="POST" action="{{ route('posts.store') }} " enctype="multipart/form-data">
            @csrf
            <div
                class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">

                <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" name="title"
                    spellcheck="false" placeholder="Title" type="text">
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <textarea name="content" class="content bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false"
                    placeholder="Describe everything about this post here"></textarea>
                @if ($errors->has('content'))
                    <span class="text-danger">{{ $errors->first('content') }}</span>
                @endif
                <label for="start_date">Select a start date</label>
                <input type="date"  class="start_date bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" name="start_date"
                spellcheck="false" >

                <label for="end_date">Select an end date</label>
                <input type="date"  class="end_date bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" name="end_date"
                spellcheck="false"  >

                <label for="priority">Select a priority</label>
                <select name="priority" class="priority w-sm text-sm font-medium transition duration-75 border border-gray-800 rounded-lg shadow-sm h-9 focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600 bg-none" >
                    <option value="Important and urgent">Important and urgent</option>
                    <option value="Important only">Important only</option>
                    <option value="Urgent only">Urgent only</option>
                    <option value="No important,no urgent">No important,no urgent</option>
                  </select>

                <!-- Buttons -->
                <div class="buttons flex justify-end">
                    <button
                        class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">Create</button>
                </div>
            </div>
        </form>
    </div>


</body>

</html>
