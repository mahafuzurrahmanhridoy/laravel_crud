<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    <nav>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('blog')}}">Recent</a>
        <a href="{{route('about')}}">About</a>
        <a href="{{route('contact')}}">Contact</a>
        <a href="{{route('user')}}">All User</a>
    </nav>

    <ol>
        @foreach ($users as $user)
        <li>
            {{$user->name}} <pre> {{$user->email}}
        </li>
        @endforeach
    </ol>
    <a href="{{route ('home')}}">Home</a>
</body>