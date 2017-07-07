$(document).ready(function () {
    $('#getUserInfo').on('keyup', 'input', function (e) {
        var fieldName = e.currentTarget.id,
            fieldValue = e.currentTarget.value;
            window.currentTarget = e.currentTarget;
        $.ajax({
            type: 'post',
            url: 'regform.php',
            data: {
                fieldName: fieldName,
                fieldValue: fieldValue
            },
            dataType: 'json',
            beforeSend: function () {

            },
            success: function (ttt) {

                var $valid = $(window.currentTarget).next();
                ttt.yyy ? $valid.html('OK') : $valid.html('not OK');
            },
            error: function () {
                debugger;

            },
            complete: function () {

            }

        });
    });
});


//$('body').append('<p>' + ttt.rrr + '</p>').find('p').attr('id', ttt.rrr);  рабочий вариант
//$(this).attr('id', ttt.rrr);

// if (ttt.yyy) {
//
//     $('[id = ttt.rrr]').css('background', 'green');
//
//     //$('input').append('<p>jrtgnb</p>')
//
//     //$('#getUserInfo').append('<p>fdjgbjg</p>');
//     //$('#getUserInfo').children('input').each(function() {
//         //$(this).css('background', 'green')
//         //console.log(this)
//     //});
//
//
//
// }















// $(document).ready(function () {
//     function qwer(data) {
//         $.ajax({
//             type: 'post',
//             url: 'regform.php',
//             data:  data,
//             dataType: 'json',
//             beforeSend: function () {
//
//             },
//             success: function () {
//
//             },
//             error: function () {
//
//             },
//             complete: function () {
//
//             }
//
//         });
//
//     }
//     $('body').on('keyup blur', '#getUserInfo, #formSubmit', function () {
//         var login = $('#login').val(),
//             name = $('#name').val(),
//             email = $('#email').val(),
//             password = $('#password').val(),
//             repeatpass = $('#repeatpass').val();
//         console.log("email", email);
//         qwer({ login: login,
//             name: name,
//             email: email,
//             password: password,
//             repeatpass:repeatpass
//         })
//         $.ajax({
//             type: 'post',
//             url: 'regform.php',
//             data: { login: login,
//                 name: name,
//                 email: email,
//                 password: password,
//                 repeatpass:repeatpass
//             },
//             dataType: 'json',
//             beforeSend: function () {
//
//             },
//             success: function () {
//
//             },
//             error: function () {
//
//             },
//             complete: function () {
//
//             }
//
//         });
//     });
//
// });












/**
 * Created by User on 28.06.2017.
 */
