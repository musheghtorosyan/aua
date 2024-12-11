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
        <header>
            <img src="images/logo.png" class="logo">
            <h1 class="montserrat-700">Find the Right Path to<br><span class="relative">
                    Education
                    <img src="images/starh2.png" class="star1">
                    <img src="images/vector_1.png" class="vector2">
                    <img src="images/starh2.png" class="star2">
                </span>
                    <br>
                <span class="relative">with Compass
                <img src="images/starh2.png" class="star3">
                </span>
            </h1>
            <p class="header-p montserrat-400">Welcome to Compass, where we empower learners to navigate their academic journey, achieve excellence, and unlock a world of opportunities. Let us guide you toward success and inspire your path to a brighter future.</p>
            <br><a href="{{ route('test') }}" class="btn btn-white montserrat-600">Take a Test</a><br>
        </header>
        <main>
            <section>
                <h2 class="montserrat-700"><span>About Us<img src="images/starh2.png" class="starh2"></span></h2>
                <p class="about_p montserrat-600">Compass Prep School is a dedicated educational center designed to empower learners of all ages with the skills and knowledge needed to achieve academic excellence and reach their goals. Our mission is to inspire and guide students as they prepare for standardized exams, enhance their English and math abilities, and pursue higher education opportunities at leading universities worldwide. At Compass Prep School, we combine expert instruction, personalized academic support, and a passion for teaching to help students succeed in their academic journey and beyond.</p>
            </section>
            <section class='content'>
                    <div class="box">
                        <h3>01<br>General English Courses</h3>
                        <p class="montserrat-600">Our General English courses are tailored to improve your reading, writing, speaking, and listening skills. Whether you're a beginner or looking to refine your fluency, our comprehensive curriculum focuses on real-world communication, grammar mastery, and vocabulary building.</p>
                        <img src="images/vector_2.png" class="vector_2">
                    </div>
                    <div class="box">
                        <h3>02<br>General Math Course</h3>
                        <p class="montserrat-600">Designed to strengthen mathematical understanding, our General Math courses cover essential concepts for all levels. From basic arithmetic to advanced problem-solving, we provide a solid foundation to help students excel in academics and beyond.</p>
                        <img src="images/vector_2.png" class="vector_2">
                    </div>
                    <div class="box">
                        <h3>03<br>IELTS Preparation</h3>
                        <p class="montserrat-600">Our IELTS preparation course equips students with the strategies and skills to succeed in all four sections of the test: Listening, Reading, Writing, and Speaking. With practice tests, expert guidance, and personalized feedback, we ensure students achieve their desired scores.</p>
                        <img src="images/vector_2.png" class="vector_2">
                    </div>
                    <div class="box">
                        <h3>04<br>TOEFL Preparation</h3>
                        <p class="montserrat-600">Focused on helping students master the TOEFL exam, this course emphasizes academic English skills such as essay writing, note-taking, and effective reading comprehension. Our structured approach boosts confidence and readiness for test day.</p>
                        <img src="images/vector_2.png" class="vector_2">
                    </div>
                    <div class="box">
                        <h3>05<br>SAT and ACT Preparation</h3>
                        <p class="montserrat-600">We specialize in preparing students for SAT and ACT exams with tailored lessons on critical reading, mathematics, and writing. Practice exams and targeted strategies help students maximize their scores and stand out in college applications.</p>
                        <img src="images/vector_2.png" class="vector_2">
                    </div>
                    <div class="box">
                        <h3>06<br>GMAT & GRE Preparation</h3>
                        <p class="montserrat-600">Our IELTS preparation course equips students with the strategies and skills to succeed in all four sections of the test: Listening, Reading, Writing, and Speaking. With practice tests, expert guidance, and personalized feedback, we ensure students achieve their desired scores.</p>
                        <img src="images/vector_2.png" class="vector_2">
                    </div>
                    <p class="clear"></p>
            </section>

            <section class="orange-box">
                <img src="images/st1.png" class="st st1">
                <img src="images/st2.png" class="st st2">
                <img src="images/st2.png" class="st st3">
                <img src="images/st3.png" class="st st4">
                <b class="subscribe_title montserrat-700">Stay Ahead with<br>Compass!</b>
                <p>Unlock exclusive tips, updates, and resources to navigate your educational journey. Be the first to know about new courses, expert advice, and success stories that inspire change and achievement.</p>
                <div class="subscribe_form">
                    <input type="text" placeholder="Type your email...">
                    <div class="subscribe-btn"></div>
                </div>
                <div class="message"></div>
            </section>
            <br><a href="{{ route('test') }}" class="btn btn-blue montserrat-600">Take a Test</a><br><br><br>
        </main>
        <footer>
            <img src="images/logo.png" class="logo_footer">
        </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
