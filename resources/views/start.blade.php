<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>COMPASS PREP SCHOOL</title>
        <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body>
        <header style="background: white">
            <a href="{{ route('index') }}"><img src="images/logo_black.png" class="logo"></a>


        </header>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
