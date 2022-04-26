<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">home</a></li>
                <li><a href="/about-us">about us</a></li>
                <li><a href="/contacts">contacts</a></li>
                <li><a href="/products">products</a></li>
            </ul>
        </nav>
    </header>
    <h1>Hello {{ $name }}</h1>
    {{-- <h1>Hello <?= $name; ?></h1> --}}

    <style>
        ul{
            padding: 0px;
            font-size: 1.5rem;
            text-transform: uppercase
        }
        ul li{
            display: inline;
            list-style: none;
            margin-right: 1rem;
        }

        ul li a{
            padding: .5rem;
            color: black;
            text-decoration: none;
        }

        ul li a:hover{
            background-color: gray;
        }

        ul li a:active{
            background-color: rgb(58, 58, 58);
            color: white
        }
    </style>
</body>
</html>
