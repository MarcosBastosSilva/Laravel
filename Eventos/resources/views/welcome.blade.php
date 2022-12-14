<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1>oi</h1>
        @if ($nome == 'Pedro' && $idade == 24)
            <p> O nome é pedro</p>
        @elseif($nome == 'Marcos' && $idade == 24)
            <p>meu nome é: {{ $nome }} e tenho {{$idade}} anos e minha função é {{$profissão}}</p>
        @else
            <p>O nome não é pedro e nem Marcos</p>
        @endif

        @for ($i = 0; $i < count($arr); $i++)
         <p> {{$arr[$i]}} - {{$i}} </p>
        @if ($i == 2)
        <p>o I é 2</p>
        @endif
        @endfor

        @php
            $name = 'João';
            echo $name;
        @endphp
       {{-- Comentario do blade --}}

       @foreach ($nomes as $nome)
           <p>{{ $nome }}</p>
       @endforeach
    </body>
</html>
