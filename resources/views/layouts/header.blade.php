<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .bg-svg {
            background-image: url('{{ asset('bg.svg') }}'); /* Path to your SVG */
            background-size: cover; /* Scale to cover the entire element */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent tiling */
        }
    </style>
    <title>@yield('title')</title>
</head>
<body class="bg-black">
