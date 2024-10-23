<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Username</title>
</head>
<body>
    <h1>Stored Username</h1>

    @if($username)
        <p>Username: {{ $username }}</p>
    @else
        <p>No username found in session.</p>
    @endif

    <!-- Clear Session Button -->
    <form action="{{ route('clear.username') }}" method="POST">
        @csrf
        <button type="submit">Clear Session</button>
    </form>

    <a href="{{ route('show.form') }}">Go back to form</a>
</body>
</html>
