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



$('.next_btn1').click(function(){
    $('.question1').hide(); $('.question2').show();
});

$('.next_btn2').click(function(){
    $('.question2').hide(); $('.question3').show();
});

$('.next_btn3').click(function(){
    $('.question3').hide(); $('.question4').show();
});

$('.next_btn4').click(function(){
    $('.question4').hide(); $('.question5').show();
});

$('.next_btn5').click(function(){
    $('.question5').hide(); $('.question6').show();
});

$('.next_btn6').click(function(){
    $('.question6').hide(); $('.question7').show();
});

$('.next_btn7').click(function(){
    $('.question7').hide(); $('.question8').show();
});

$('.next_btn8').click(function(){
    $('.question8').hide(); $('.question9').show();
});

$('.next_btn9').click(function(){
    $('.question9').hide();
    getScore();
});



// // Answer key
// const answerKey = ['B', 'B', 'B', 'B', 'B', 'A', 'A', 'C', 'A'];
//
// function getScore() {
//     let correctAnswers = 0;
//     let totalQuestions = answerKey.length;
//     for (let i = 1; i <= totalQuestions; i++) {
//         let selectedAnswer = $(`input[name="ch${i}"]:checked`).parent().text().trim().charAt(0);
//         if (selectedAnswer === answerKey[i - 1]) {
//             correctAnswers++;
//         }
//     }
//     let percentage = ((correctAnswers / totalQuestions) * 100).toFixed(2);
//     $('.question').show();
//     $('.next_btn, #timer').hide();
//     $('#results').html("TEST RESULTS<br>Correct Answers: "+correctAnswers+"/"+totalQuestions+"<br>Score: "+percentage+"%");
// }

const answerKey = ['B', 'B', 'B', 'B', 'B', 'A', 'A', 'C', 'A'];

// function getScore() {
//     let correctAnswers = 0;
//     let totalQuestions = answerKey.length;
//
//     // Loop through each question to check the selected answers
//     for (let i = 1; i <= totalQuestions; i++) {
//         // Find the selected radio button for the question
//         let selectedInput = $(`input[name="ch${i}"]:checked`);
//         let selectedAnswer = selectedInput.parent().text().trim().charAt(0);
//
//         // Determine if the answer is correct
//         let isCorrect = selectedAnswer === answerKey[i - 1];
//
//         // Update the corresponding radio button's parent with the image
//         if (isCorrect) {
//             correctAnswers++;
//             selectedInput.parent().html(`<img src="images/true.png" alt="Correct" style="height: 20px;">`);
//         } else {
//             selectedInput.parent().html(`<img src="images/false.png" alt="Incorrect" style="height: 20px;">`);
//         }
//     }
//
//     // Calculate the percentage score
//     let percentage = ((correctAnswers / totalQuestions) * 100).toFixed(2);
//
//     $('.question').show();
//     $('.next_btn, #timer').hide();
//     $('#results').html("TEST RESULTS<br>Correct Answers: "+correctAnswers+"/"+totalQuestions+"<br>Score: "+percentage+"%");
// }


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
                $(this).parent().html(`${optionText}: <img src="images/true.png" alt="Correct" style="height: 20px;">`);
            } else if ($(this).is(':checked')) {
                // Incorrect selected answer gets a red cross
                $(this).parent().html(`${optionText}: <img src="images/false.png" alt="Incorrect" style="height: 20px;">`);
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
}


$(document).ready(function() {
    // Set the timer duration (in minutes)
    var timerDuration = 30; // 30 minutes

    function updateTimerDisplay() {
        $('#timer').html(
            timerDuration + ' <sub>minutes</sub>'
        );
    }

    function startTimer() {
        var countdown = setInterval(function() {
            if (timerDuration <= 0) {
                clearInterval(countdown);
                getScore();
            } else {
                timerDuration--;
                updateTimerDisplay();
            }
        }, 60000);
    }
    updateTimerDisplay();
    startTimer();
});
