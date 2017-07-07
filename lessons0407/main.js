$(document).ready(function () {
    $('#formReg').on('click', '#submit', function () {
        var email = $('#email').val(),
            password = $('#password').val();
        $.ajax({
            type: 'post',
            url: 'sql.php',
            data: {
                email: email,
                password: password
            },
            dataType: 'json',
            beforeSend: function () {
                console.log('before');
            },
            success: function (ttt) {
                //debugger;
                if (ttt.yyy) {
                    alert('Такой пользователь НЕ существует');
                } else {

                    alert('Такой пользователь существует');
                }
            },
            error: function () {
                console.log('error');
            },
            complete: function () {
                console.log('complete');
            }
        })
    })
});
/**
 * Created by User on 04.07.2017.
 */
