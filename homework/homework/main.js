$(document).ready(function () {

    $(".field").on("keyup paste blur", function (e) {
        var fieldName = e.currentTarget.id,
            fieldVal = e.currentTarget.value;

        window.currentTarget = e.currentTarget;
        $.ajax({
            type: 'post',
            url: 'index.php',
            data: {
                fieldName: fieldName,
                fieldVal: fieldVal
            },
            dataType: 'json',
            beforeSend: function () {
            },
            success: function (response) {
                var $valid = $(window.currentTarget).closest('.label').find('.valid');
                response.success ? $valid.html("&#10004;") : $valid.html(" ");
            },
            error: function () {
            }
        });
    });

});