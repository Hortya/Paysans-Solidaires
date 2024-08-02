<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paysans Solidaires</title>
    @vite('resources/css/header-nav.css')
</head>

<body>

    <a href="{{route('index')}}">
        <header class="flex">
            <img src="img/logo_vert.svg" alt="Logo Paysans Solidaires">
        </header>
    </a>

    <x-burger-nav />