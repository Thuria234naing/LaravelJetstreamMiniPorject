<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    this  is the view admin
    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}" class="relative px-6 py-2 font-bold text-center text-white transition duration-300 bg-purple-600 rounded-full shadow-md left-10 bottom-28 hover:bg-purple-700" onclick="event.preventDefault(); this.closest('form').submit();">
            Logout
        </a>
    </form>
@endauth
</body>
</html>
