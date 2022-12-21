<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>About Us</title>
</head>
<body>
    <nav>
        <div class="container d-flex">
            <div class="logo">
                <h1>{{$saluto}} {{$name}}</h1>
            </div>

            <ul>
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="/chi-siamo">CHI SIAMO</a>
                </li>
                <li>
                    <a href="/contatti">CONTATTI</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">

        <h2>{{$title}}</h2>

        <div class="card-wrapper d-flex">
            @foreach ($teams as $team )
                <div class="card">
                    <img src="{{$team['photo']}}" alt="{{$team['name']}}" name="{{$team['name']}}<p>{{$team['surname']}}</p>">
                    <p>Nome: <span>{{$team['name']}}</span></p>
                    <p>Cognome: <span>{{$team['surname']}}</span></p>
                    <p>Email: <span>{{$team['email']}}</span></p>
                </div>
            @endforeach
        </div>

    </div>
</body>
</html>
