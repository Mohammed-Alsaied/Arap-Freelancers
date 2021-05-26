$(document).ready(function() {
    $('#fsearch').keyup(function() {
        var key = $(this).val();
        if (key != '') {
            // Request
            $.ajax({
                url: 'freesearch.php',
                tybe: 'GET',
                data: 'F=' + key,
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
// Message Created Successfuly
/*$('#create').click(function() {
    $('.done').animate({
        right: '50%'
    }, 2000, function() {
        $(this).delay(2000).fadeOut();
    })

});*/
$(document).ready(function() {
    $('#submit').click(function() {
        $('.done').animate({
            right: '50%'
        }, 2000, function() {
            $(this).delay(2000).fadeOut();
        })
    })
});

function clearTxt() {
    var elements = document.getElementsByTagName('input');
    for (var el = 0; el < elements.length; el++) {
        if (elements[el].type == 'text' || elements[el].type == 'password' ||
            elements[el].type == 'email') {
            elements[el].value = '';
        }
    }

}