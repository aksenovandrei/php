$(document).ready(function () {
    $('#changePass').on('click', '#submit', function () {
        var email = $('#email').val(),
            oldPass = $('#oldPass').val(),
            newPass = $('#newPass').val();
            $.ajax({
                type: 'post',
                url: 'change.php',
                data: {
                    email: email,
                    oldPass: oldPass,
                    newPass: newPass
                },
                dataType: 'json',
                beforeSend: function () {
                    console.log('before');
                },
                success: function (ttt) {
                    console.log('success');
                    if (ttt.yyy) {
                        $('body').html('<p>Пароль успешно изменен </p><br>' +
                            '<a href="index.html">На главную</a>');
                    } else {
                        $('#changePass').append('<p>Логин или пароль не верный </p>');
                    }
                },
                error: function () {
                    console.log('error');
                },
                complete: function () {
                    console.log('complete');
                }
        })
    });

    $('#sighIn').on('click', '#submit', function () {
        var email = $('#email').val(),
            password = $('#password').val();
        $.ajax({
            type: 'post',
            url: 'signin.php',
            data: {
                email: email,
                password: password
            },
            dataType: 'json',
            beforeSend: function () {
                console.log('before');
            },
            success: function (ttt) {
                console.log('success');
                if (ttt.yyy) {
                    $('body').html('<p>Вход выполнен</p><br>' +
                        '<button><a href="index.html">На главную</a></button>' +
                        '<br>' +
                        '<br>' +
                        '<button><a href="changepass.html">Изменить пароль</a></button>');
                } else {
                    $('#sighIn').next().html('Логин или пароль не верный');
                }
            },
            error: function () {
                console.log('error');
            },
            complete: function () {
                console.log('complete');
            }
        })
    });

    $('#signUp').on('click blur paste', '#submit, input', function (e) {
        var email = $('#email').val(),
            name = $('#name').val(),
            surname = $('#surname').val(),
            password = $('#password').val(),
            repeatpass = $('#repeatpass').val();
            fieldName = e.currentTarget.id;
            fieldValue = e.currentTarget.value;
        window.currentTarget = e.currentTarget;
        $.ajax({
            type: 'post',
            url: 'signup.php',
            data: {
                email: email,
                name: name,
                surname: surname,
                password: password,
                repeatpass: repeatpass,
                fieldName: fieldName,
                fieldValue: fieldValue
            },
            dataType: 'json',
            beforeSend: function () {
                console.log('before');
            },
            success: function (ttt) {
                console.log('success');
                if (ttt.yyy) {
                    $('body').html('<p>Регистрация выполнена</p><br>' +
                        '<button><a href="index.html">На главную</a></button>' +
                        '<br>' +
                        '<br>' +
                        '<button><a href="changepass.html">Изменить пароль</a></button>');
                } else {
                    $('#submit').next().html('пароли не совпадают');
                }
                if (ttt.uuu == false) {
                    $('#submit').next().html('Заполните корректно все поля');
                }
                // var $valid = $(window.currentTarget).next();
                // ttt.yyy ? $valid.html('OK') : $valid.html('not OK');
            },
            error: function () {
                console.log('error');
            },
            complete: function () {
                console.log('complete');
            }
        })
    });



});

// $(document).ready(function () {
//     $('#sighIn').on('click', '#submit', function () {
//         var email = $('#email').val(),
//             password = $('#password').val();
//         $.ajax({
//             type: 'post',
//             url: 'change.php',
//             data: {
//                 email: email,
//                 password: password
//             },
//             dataType: 'json',
//             beforeSend: function () {
//                 console.log('before');
//             },
//             success: function (ttt) {
//                 console.log('success');
//                 if (ttt.yyy) {
//                     $('body').html('<p>Вход выполнен</p><br>' +
//                         '<a href="http://localhost:8080/homework0607/">На главную</a>');
//                 } else {
//                     $('#changePass').append('<p>Логин или пароль не верный </p>');
//                 }
//             },
//             error: function () {
//                 console.log('error');
//             },
//             complete: function () {
//                 console.log('complete');
//             }
//         })
//     })
// });





