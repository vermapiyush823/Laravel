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
        <form action="{{ route('update', $car->id) }}" method="post" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            @csrf
            @method('PUT')
            <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Edit Car Details</h2>

            <div class="mb-4">
                <input type="text" name="name" value="{{ $car->name }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <input type="text" name="model" value="{{ $car->model }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <input type="text" name="price" value="{{ $car->price }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <input type="text" name="description" value="{{ $car->description }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200">
                Update
            </button>
            <a href="{{ route('add-car') }}" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200 block text-center mt-4">
                Add New Car
            </a>
        </form>


    </div>

</body>




</html>