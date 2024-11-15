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
    <script>
    </script>
</head>

<body
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form action="{{ route('store') }}" method="post" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Add Car Details</h2>

        <div class="mb-4">
            <input type="text" name="name" placeholder="Name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <input type="text" name="model" placeholder="Model" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <input type="text" name="price" placeholder="Price" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-6">
            <input type="text" name="description" placeholder="Description" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200">
            Submit
        </button>
    </form>
    </div>