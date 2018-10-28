<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VeSafe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html,
            body {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .grid-system {
                display: grid;
                grid-template-rows: 8% 2.5% 81.5% 8%;
            }

            .full-height {
                height: 100vh;
            }

            .top-right {
                position: absolute;
                right: 10px;
                margin-left: auto;
                margin-right: auto;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links>a {
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

            .top-div {
                grid-row-start: 1;
                background-color: #2F3131;
                color: #F8F1E5;
            }

            .top-second-div {
                grid-row-start: 2;
                background-color: #426E86;
            }

            .img-max {
                grid-row-start: 3;
            }

            .low-div {
                grid-row-start: 4;
                background-color: #F9BA32;
            }

            a,
            a:visited {
                color: #F8F1E5 !important;
            }
            
            .img-max > img {
                margin:auto; 
                display:block;
                width: 40%;
                height: auto;
            }
            
            @media only screen and (min-width: 700px) {
                .img-max > img {
                    margin:auto; 
                    display:block;
                    width: 33%;
                    height: auto;
                }
            }
            .img-max > .veSafe-text {
                text-align: center;
                font-size: 500%;
                margin: auto;
                display: block;
            }
        </style>
    </head>

    <body>
        <div class="grid-system full-height">
            <div class="top-div pull-right">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Inicio</a>
                    @else
                    <a href="{{ route('login') }}">Iniciar Sesión</a>
                    <a href="{{ route('register') }}">Registrase</a>
                    @endauth
                </div>
                @endif
            </div>
            <div class="top-second-div"></div>

            <div class="img-max">
                <img src="{{URL::asset('../resources/images/VeSafe.png')}}" style="">
                <label class="veSafe-text">VeSafe</label>
            </div>

            <div class="low-div"></div>
        </div>
    </body>

</html>
