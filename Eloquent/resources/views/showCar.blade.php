<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Car Details</h2>
            <div class="mb-4">
                <p class="text-gray-800">Name: {{ $car->name }}</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-800">Model: {{ $car->model }}</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-800">Price: {{ $car->price }}</p>
            </div>
            <div class="mb-6">
                <p class="text-gray-800">Description: {{ $car->description }}</p>
            </div>
            <a href="{{ route('edit', $car->id) }}" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200 block text-center">
                Edit
            </a>
        </div>
    </div>

</body>




</html>