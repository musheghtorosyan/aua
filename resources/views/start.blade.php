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
        <header style="background: white; padding-bottom: 0">
            <a href="{{ route('index') }}"><img src="images/logo_black.svg" class="logo"></a>
            <div id="timer">30 <sub>minutes</sub></div>

        </header>
        <div id="results"></div>
        <main>

        @php
            // Map true_field values to corresponding letters
            $answerMapping = [1 => 'A', 2 => 'B', 3 => 'C', 4 => 'D'];

            // Combine questions with their true answers
            $combined = $questions->map(function ($question) use ($answerMapping) {
                return [
                    'question' => $question,
                    'answer' => $answerMapping[$question->true_field] ?? null, // Convert true_field to letter
                ];
            });

            // Shuffle the combined data
            $shuffled = $combined->shuffle();

            // Extract shuffled questions and answers
            $shuffledQuestions = $shuffled->pluck('question');
            $shuffledAnswers = $shuffled->pluck('answer')->toArray();
            $q = 0;
        @endphp


        @foreach ($shuffledQuestions as $question)
            <div class="question question{{ ++$q }}">
                <div class="question_item">
                    <p><strong>Question {{ $q }}:</strong> {!! $question->answer1 !!}</p>
                    <p><strong>{!! $question->answer2 !!}</strong></p>
                    <p><label><strong><input type="radio" name="ch{{ $q }}"> A:</strong> {{ $question->question1 }}</label></p>
                    <p><label><strong><input type="radio" name="ch{{ $q }}"> B:</strong> {{ $question->question2 }}</label></p>
                    <p><label><strong><input type="radio" name="ch{{ $q }}"> C:</strong> {{ $question->question3 }}</label></p>
                    <p><label><strong><input type="radio" name="ch{{ $q }}"> D:</strong> {{ $question->question4 }}</label></p>
                </div>
                <div class="next_btn next_btn{{ $q }}">Next</div>
            </div>
        @endforeach

        <script>
            var answerKey = {!! json_encode($shuffledAnswers) !!};
            var go_email = "{{$email}}";
            var go_phone = "{{$phone}}";
        </script>





        <!-- @ php $questions = $questions->shuffle(); $q = 0; @ endphp
        @ foreach ($questions as $question)
            <div class="question question{{++$q}}">
                <div class="question_item">
                    <p><strong>Question {{$q}}:</strong> {!! $question->answer1 !!}</p>
                    <p><strong>{!! $question->answer2 !!}</strong></p>
                    <p><label><strong><input type="radio" name="ch{{$q}}"> A:</strong> {{ $question->question1 }}</label></p>
                    <p><label><strong><input type="radio" name="ch{{$q}}"> B:</strong> {{ $question->question2 }}</label></p>
                    <p><label><strong><input type="radio" name="ch{{$q}}"> C:</strong> {{ $question->question3 }}</label></p>
                    <p><label><strong><input type="radio" name="ch{{$q}}"> D:</strong> {{ $question->question4 }}</label></p>
                </div>
                <dic class="next_btn next_btn{{$q}}">Next</dic>
            </div>
        @ endforeach -->
        </main>




    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
