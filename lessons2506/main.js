$(document).ready(function() {
    $("#formSubmit").click(function() {
        // debugger;
        //e.preventDefault();  // предотвращает выполнение стандартного события JS
        var user = $('#userForm option:selected').text();
        // var email = $("#email").val(),
        //     login = $("#login").val(),
        //     password = $("#password").val(); //
        // console.log("email", email);
        // console.log("login", login);
        // console.log("password", password);
        $.ajax({
            type: 'post',
            url: 'userform.php',
            data: {user: user
            },
            dataType: 'json',
            beforeSend: function() {
                //debugger;
                //перед отправкой аякса на сервер

            },
            success: function(response){
                //успешное завершение запроса
                //alert("Success: " + responce.success)
                //debugger;
                if (response.fileExist) {
                    //$('body').html('<p>' + ttt.userInfo + '</p>' + '<img src="Васян.jpg">')
                    $('#cont').html('<p>' + response.userText + '</p>' + '<img src="' + response.userAvatar + '">');
                    //.html('<img src="Васян.jpg">')
                }
                else {
                    $('#cont').html('<p>' + response.userText + '<br></p>');
                }

            },
            error: function() {

                //debugger;
                //alert('нет изображения');
                //обработка ошибок

            },
            always: function () {
                debugger;
                console.log("user", user);
            }
        });
    });

});
/**
 * Created by User on 25.06.2017.
 */
