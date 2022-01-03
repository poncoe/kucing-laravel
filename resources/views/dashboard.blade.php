<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Web Icon -->
    <link rel="icon" href="https://avatars0.githubusercontent.com/u/11747628?s=460&v=4" type="image/icon type">

    <!-- Title Web -->
    <title>Animolz : Dashboard</title>

  </head>
  <body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Halo {{ Auth::user()->name }}, Selamat Datang di Animolz Dashboard!
        </h2>
    </x-slot>

    

</x-app-layout>
</body>
</html>
