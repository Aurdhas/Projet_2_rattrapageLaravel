<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="flex items-center justify-between h-16 bg-white border-b border-gray-200">
                <div class="flex items-center px-4">
                    <h3>Home Page</h3>

                </div>


                <!-- notification -->
                <div class="flex items-center space-x-4 mr-4">

                    <a href="{{ route('register-user') }}" class="flex items-center text-gray-600 hover:text-gray-800">

                        <span class="font-bold">Register</span>
                    </a>

                    <!-- logout -->
                    <a href="{{ route('login') }}" class="flex items-center text-gray-600 hover:text-gray-800">

                        <span class="font-bold">Login</span>
                    </a>

                </div>
            </div>

           
        </div>

        </div>
    </header>
<body>
    <div class="relative h-screen w-full">
        <img src="https://images.unsplash.com/photo-1494783367193-149034c05e8f" alt="Background Image" class="absolute inset-0 w-full h-full object-cover filter blur-sm">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-4xl text-white font-bold">Hello, World!</h1>
            <p class="text-xl text-white mt-4">This is a task's application</p>
        </div>
    </div>
</body>
</html>
