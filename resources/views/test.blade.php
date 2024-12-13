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
    <body style="background: var(--blue)">
        <header>
            <a href="{{ route('index') }}"><img src="images/logo.png" class="logo"></a>
            <h1 class="montserrat-700">
                Discover Your
                <span class="relative">
                    Potential!
                    <img src="images/vector_1.png" class="vector2">
                </span>
                    <br>
                Take the First Step with<br>Compass!
            </h1>
            <p class="header-p montserrat-400">Welcome to the first step in your academic journey! Please provide your phone number and email address to access your test. Your information is securely stored and will only be used to send your test results and updates regarding your progress. Let's get started and see where your strengths lie!</p>
            <form method="post" class="form_two">
                @csrf
                <div class="w40"><input type="email" placeholder="Email" required></div>
                <div class="w40"><input type="number" placeholder="Tel." required></div>
                <div class="w20"><button class="btn_two">NEXT</button></div>
                <p class="clear"></p>
            </form>

        </header>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
