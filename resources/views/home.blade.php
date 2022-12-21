<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Home</title>
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

        <h2>HOME</h2>
        <div class="card">
            <h3>Purtroppo non c'è nulla da vedere qua, ritorna quando sarò in grado di fare un Hello Word! <br>
                Nel frattempo puoi navigare per scopire 'chi siamo' e i nostri 'contatti'!
            </h3>
        </div>
    </div>
</body>
</html>
