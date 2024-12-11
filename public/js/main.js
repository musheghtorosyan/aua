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
