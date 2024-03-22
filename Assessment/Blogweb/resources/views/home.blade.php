<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <style>
        * {
            background-color: rgb(200, 194, 194);
            font-size: 18px;
            font-family: sans-serif;
        }
        .box{
            margin: 50px auto;
            width: 30%;
        }
        table {
            margin: 50px auto;
            width: 50%;
            border: 1px solid black;
        }
        td {
            border: 1px solid black;
        }
        a {
            color: blue;
            text-decoration: none;
        }
        ul {
            list-style: none;
        }
        li {
            margin-top: 3px;
        }

        img {
            max-width: 100%;
            object-fit: cover;
        }
        article {
            width: 100%;
            max-width: 320px;
            border: 2px solid black;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 10px 10px -5px rgba(0, 0, 0, 0.1);
            animation: slide-in-right-to-left 0.5s ease-in-out forwards;
        }
        article h2 {
            margin: 0.5rem 0;
            padding: 2px;
            font: 600 24px sans-serif;
            color: #1f2021;
            animation: fadetext 2s ease-in-out forwards;
        }
        article p {
            margin-bottom: 1rem;
            padding: 2px;
            color: #242323;
            font-family: sans-serif;
            animation: fadetext 2.2s ease-in-out forwards;
        }
        article button {
            padding: 0.5rem 0.7rem;
            display: block;
            background-color: #e24b26;
            border: none;
            border-radius: 5px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s all;
            animation: slide-in-top-to-bottom 1.5s;
        }
        article button:hover {
            background-color: #29b6f6;
            transform: translatey(-2px);
            box-shadow: 0 7px 7px rgba(0, 0, 0, 0.1);
        }
        article button:active {
            transform: translatey(0);
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);
        }
        @keyframes slide-in-right-to-left {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }
        @keyframes slide-in-top-to-bottom {
            0% {
                opacity: 0;
                transform: translatey(100%);
            }
            50% {
                opacity: 0;
                transform: translatey(100%);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fade {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }

            50% {
                opacity: 0;
                transform: translateX(-100%);
            }

            100% {
                opacity: 1;
            }
        }
        @keyframes fadetext {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body>
    <ul>
        <li><a href="home">HOME</a></li>

        @guest
            <li><a href="verify-author">LOGIN</a></li>
            <li><a href="add-author">REGISTER</a></li>
        @else
            <li><a href="logout">LOGOUT</a></li>
        @endguest
        <li><a href="add-article">ADD ARTICLE</a></li>


    </ul>

    <hr>

    <div class="box">

        @foreach ($articlelist as $item)

        <article>
            <h2>{{ $item->name }}</h2>
            <p>{{ $item->category }}</p>
            <p>{{ $item->description }}</p>

            <button type="submit" >comment</button> <br>
            <form action="/delete/{{$item->id  }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" name="delete" value="{{ $item->id }}">delete</button>
            </form>
        </article>

        @endforeach
    </div>

</body>

</html>
