<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap core CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Web Icon -->
    <link rel="icon" href="https://avatars0.githubusercontent.com/u/11747628?s=460&v=4" type="image/icon type">

    <!-- Title Web -->
    <title>Animolz : Dashboard</title>

  </head>
  <body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Halo, {{ Auth::user()->name }}
        </h2>

    </x-slot>

    <div class="text-center">
                    <img class="d-block mx-auto" src="{{url('/img/animal.png')}}" alt="" width="300" height="300">
                    <h1 class="display-5 fw-bold">Selamat Datang di Animolz Dashboard!</h1>
                    <div class="col-lg-9 mx-auto">
                        <p class="lead mb-4">Silahkan Pilih Menu pada sisi sebelah Atas (Desktop) atau Menu Humberger pada pojok kanan atas (Mobile).
                        </p>
                    </div>
                </div>

    

</x-app-layout>
</body>
</html>
