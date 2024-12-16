$('.subscribe-btn').click(function(){

    var email = $('.subscribe_form input').val();

    var apiUrl = "/subscribe";
    const requestData = {
        "email": email,
    }

    $.ajax({
        url: apiUrl,
        type: 'POST',
        data: requestData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (res) {
          $('.message').text(res);
            $('.subscribe_form input').val('');
          setTimeout(function(){
              $('.message').text('');
          },5000);
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error: ' + status + ' - ' + error);
        }
    });
});


// $('.next_btn1').click(function(){
//     $('.question1').hide(); $('.question2').show();
// });

// $('.next_btn2').click(function(){
//     $('.question2').hide(); $('.question3').show();
// });

// $('.next_btn3').click(function(){
//     $('.question3').hide(); $('.question4').show();
// });

// $('.next_btn4').click(function(){
//     $('.question4').hide(); $('.question5').show();
// });

// $('.next_btn5').click(function(){
//     $('.question5').hide(); $('.question6').show();
// });

// $('.next_btn6').click(function(){
//     $('.question6').hide(); $('.question7').show();
// });

// $('.next_btn7').click(function(){
//     $('.question7').hide(); $('.question8').show();
// });

// $('.next_btn8').click(function(){
//     $('.question8').hide(); $('.question9').show();
// });

// $('.next_btn9').click(function(){
//     $('.question9').hide();
//     getScore();
// });


// Handle "Next" button clicks dynamically
$('.next_btn').click(function () {
    var currentQuestion = $(this).closest('.question');
    var nextQuestion = currentQuestion.next('.question');

    if (nextQuestion.length > 0) {
        currentQuestion.hide();
        nextQuestion.show();
    } else {
        getScore(); // No more questions, calculate the score
    }
});

// const answerKey = ['B', 'B', 'B', 'B', 'B', 'A', 'A', 'C', 'A'];



function getScore() {
    let correctAnswers = 0;
    let totalQuestions = answerKey.length;

    // Loop through each question to check the selected answers
    for (let i = 1; i <= totalQuestions; i++) {
        // Find the selected radio button for the question
        let selectedInput = $(`input[name="ch${i}"]:checked`);
        let selectedAnswer = selectedInput.parent().text().trim().charAt(0);

        // Mark all options and determine correctness
        $(`input[name="ch${i}"]`).each(function () {
            let optionText = $(this).parent().text().trim().charAt(0);

            if (optionText === answerKey[i - 1]) {
                // Correct answer gets a green check
                $(this).parent().html(`${optionText}: <img src="images/true.png" alt="Correct" style="height: 20px; float: left; margin-right: 10px">`);
            } else if ($(this).is(':checked')) {
                // Incorrect selected answer gets a red cross
                $(this).parent().html(`${optionText}: <img src="images/false.png" alt="Incorrect" style="height: 20px; float: left; margin-right: 10px">`);
            } else {
                // Unselected incorrect options remain unmarked
                $(this).parent().html(`${optionText}`);
            }
        });

        // Increment score if the user's selection was correct
        if (selectedAnswer === answerKey[i - 1]) {
            correctAnswers++;
        }
    }

    // Calculate the percentage score
    let percentage = ((correctAnswers / totalQuestions) * 100).toFixed(2);

    // Show results
    $('.question').show();
    $('.next_btn, #timer').hide();
    $('#results').html("TEST RESULTS<br>Correct Answers: " + correctAnswers + "/" + totalQuestions + "<br>Score: " + percentage + "%");


    const requestData = {
        email: go_email, // Ask for email
        phone: go_phone, // Ask for phone
        score: percentage
    };

    console.log(requestData,'--------');

    // Send the data via AJAX
    $.ajax({
        url: '/save-result',
        type: 'POST',
        data: requestData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            console.log(response.message);
        },
        error: function (xhr, status, error) {
            console.error('Error saving result: ' + xhr.responseText);
        }
    });
}


$(document).ready(function () {
    // Set the timer duration (in minutes)
    var timerDuration = 30 * 60; // 30 minutes in seconds

    function updateTimerDisplay() {
        var minutes = Math.floor(timerDuration / 60);
        var seconds = timerDuration % 60;
        $('#timer').html(
            minutes + ' <sub>minutes</sub> ' + seconds.toString().padStart(2, '0') + ' <sub>seconds</sub>'
        );
    }

    function startTimer() {
        var countdown = setInterval(function () {
            if (timerDuration <= 0) {
                clearInterval(countdown);
                getScore();
            } else {
                timerDuration--;
                updateTimerDisplay();
            }
        }, 1000);
    }

    updateTimerDisplay();
    startTimer();
});





$('.which_test').click(function(){
    $('.which_test').removeClass('active_test');
    $(this).addClass('active_test');
});



function getTest(id){
    $('#test_value').val(id);
}