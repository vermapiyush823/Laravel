<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Form</title>
</head>
<body>
    <h1>Enter your Username</h1>
    <form action="{{ route('store.username') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Submit</button>
    </form>

    @if(session('username'))
        <p>Stored Username: {{ session('username') }}</p>
    @endif
</body>
</html>
