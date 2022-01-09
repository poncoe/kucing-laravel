@extends('homey.layoutguest')

<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="Table_Fixed_Header/vendor/bootstrap/css/bootstrap.css">


    <!-- Web Icon -->
    <link rel="icon" href="https://avatars0.githubusercontent.com/u/11747628?s=460&v=4" type="image/icon type">

    <!-- Title -->
    <title>Animolz: Detail {{ $homey->judul}}</title>

    <!-- Style -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .awallist h1 {
            text-align: center;
        }

        .awal {
            height: 40vh;
            max-width: 120%;
            margin: 0 auto;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url("/img/{{ $homey->url_gambar }}");
            background-size: cover;
            background-position: right;
            margin-left: -15px;
            margin-right: -15px;
        }

        .awal h1 {
            position: absolute;
            top: 28%;
            left: 50%;
            right: -30%;
            transform: translate(-50%, -50%);
            color: white;
        }

        article {
            padding-left: 5%;
        }
    </style>

    <!-- Style -->

</head>

<body>

    <!-- Artikel -->

    <br>
    <article>
        <div>
        <img src="/img/{{ $homey->url_gambar }}" class="rounded mx-auto d-block" alt="gambar">
        <br>

            <div class="row">
                <div class="">
                    <div class="tab-content" id="nav-tabContent" style="text-align: center;">
                        <div class="">
                        <h1>{{ $homey->judul}}</h1>
                            <br>
                            <p>{{ $homey->deskripsi}}</p>
                        </div>
                    </div>
                </div>
            </div>
    </article>
    <br><br><br>
    <!-- End Artikel -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>