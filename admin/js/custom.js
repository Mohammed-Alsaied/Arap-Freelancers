$(document).ready(function() {
    $('.find').keyup(function() {
        var key = $(this).val();
        if (key != '') {
            // Request
            $.ajax({
                url: 'search.php',
                tybe: 'GET',
                data: 'K=' + key,
                // Response
                success: function(show) {
                    $('.result').show();
                    $('.result').html(show);
                }
            });
        } else {
            $('.result').hide();
        }
    });
});


$(document).ready(function() {
    $('#free').change(function() {
        var fid = $(this).val();
        $.ajax({
            url: 'showfreelancers.php',
            tybe: 'GET',
            data: 'ID=' + fid,
            success: function(response) {
                $('.result').show();
                $('.result').html(response);
            }
        });
    });
});

$('#create').click(function() {
    /* var input = $('.form-control').val(),
          input = $('#Last_Name').val(),
          input = $('#User_Name').val(),
          input = $('#email').val(),
          input = $('#password').val(),
          input = $('#confirm password').val();
         if (input == val()) {*/
    $('.message').animate({
        right: '50%'
    }, 2000, function() {
        $(this).delay(2000).fadeOut();
    })

})

function checkPassword() {
    var pass = document.getElementById("password").value,
        confirm = document.getElementById("confirm password").value;
    if (pass != confirm) {
        var msg = "Password and Confirm Password Dose not match.";
        document.getElementById("pass_error").innerHTML = msg;
    }
}

function clearTxt() {
    var elements = document.getElementsByTagName('input');
    for (var el = 0; el < elements.length; el++) {
        if (elements[el].type == 'text' || elements[el].type == 'password' ||
            elements[el].type == 'email') {
            elements[el].value = '';
        }
    }

}

function validate() {
    var pass = document.getElementById("password").value,
        confirm = document.getElementById("confirm password").value,
        frName = document.getElementById('Frist_Name').value,
        laName = document.getElementById('Last_Name').value,
        usName = document.getElementById('User_Name').value,
        errors = [];
    if (frName == '') {
        var frError = 'Frist Name Field is required.';
        document.getElementById('fristName').innerHTML = frError;

    } else if (laName == '') {
        var lsError = 'Last Name Field is required.';
        document.getElementById('lastName').innerHTML = lsError;


    } else if (usName == '') {
        var usError = 'User Name Field is required.';
        document.getElementById('userName').innerHTML = usError;

    } else {
        document.getElementById("fristName").innerHTML = '';
        document.getElementById("lastName").innerHTML = '';
        document.getElementById("userName").innerHTML = '';

        /* window.fristName.style.display = 'none';
         window.lastName.style.display = 'none';
         window.userName.style.display = 'none';
         document.getElementById('fristName').style.display = 'none';
         document.getElementById('lastName').style.display = 'none';
         document.getElementById('userName').style.display = 'none';*/
    };
    if (pass != confirm) {
        var msg = "Password and Confirm Password Dose not match.";
        document.getElementById("pass_error").innerHTML = msg;
    } else {
        document.getElementById("pass_error").innerHTML = '';
    }
}
$(document).ready(function() {
    $('#create').click(function() {
        var email = $('#email').val();
        if (email == '') {
            $('#email_val').fadeIn(2000).html('Email is required').delay(1000).fadeOut(2000);
        }
    })
})