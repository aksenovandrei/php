$(document).ready(function () {
    $('#getUserInfo').on('keyup blur', 'input', function (e) {
        var repeatpass = $('#repeatpass').val(),
            password = $('#password').val();

        $.ajax({
            type: 'post',
            url: 'checkpass1.php',
            data: {
                repeatpass: repeatpass,
                password: password
            },
            dataType: 'json',
            beforeSend: function () {

            },
            success: function (response) {
                // console.log('before fuck yeah')
                // if (response.xer != false) {
                //     console.log('fuck yeah')
                // }
                // else {
                //     console.log('shit')
                // }
                if (response.eee) {
                    console.log("hui");
                    $('#repeatpass').next().html('OKK');
                } else {
                    console.log("pizdec");
                    $('#repeatpass').next().html('not OKK');
                }
                //ttt.eee ? $valid.html('OKK') : $valid.html('not OKK');
            },
            error: function () {
                debugger;
            }
        })
    })
});





/**
 * Created by User on 01.07.2017.
 */
