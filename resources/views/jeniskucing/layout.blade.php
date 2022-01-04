<html>

<head>
    <title>Animolz: Data Jenis Kucing</title>

    <!-- Web Icon -->
    <link rel="icon" href="https://avatars0.githubusercontent.com/u/11747628?s=460&v=4" type="image/icon type">


    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }
    </style>

</head>

<body>

    <x-app-layout>
        <x-slot name="header">
            @section('sidebar')

            @show

            <div class="container">
                @yield('content')
            </div>
            
        </x-slot>
    </x-app-layout>
    
</body>

</html>