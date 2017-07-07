/**
 * Created by Admin on 18.06.2017.
 */

$(document).ready(function() {
    $("#formSubmit").click(function() {
        // debugger;
        //e.preventDefault();  // предотвращает выполнение стандартного события JS
        var email = $("#email").val(),
            login = $("#login").val(),
            password = $("#password").val(); //
        console.log("email", email);
        console.log("login", login);
        console.log("password", password);
        $.ajax({
            type: 'post',
            url: 'regform.php',
            data: {cfbfgb: email,
                   login: login,
                   password: password
                  },
            dataType: 'json',
            beforeSend: function() {
                //debugger;
                //перед отправкой аякса на сервер
            },
            success: function(ttt){
                //успешное завершение запроса
                //alert("Success: " + responce.success)
                //debugger;
                if (ttt.yyy) {
                    $('body').append('<p>' + ttt.userInfo + '</p>')
                }

            },
            error: function() {
                //debugger;
                //обработка ошибок
            },
            always: function () {
                //debugger;
                console.log("email", email);
                console.log("login", login);
                console.log("password", password);
            }
        });
    });

});