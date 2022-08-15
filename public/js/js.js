$(function() {
    $('.error').hide();
    $(".button").click(function() {
        $('.error').hide();
        var name = $("input#name").val();
        if (name == "") {
            $("label#name_error").show();
            $("input#name").focus();
            return false;
        }
        var review = $("textarea#review").val();
        if (review == "") {
            $("label#review_error").show();
            $("textarea#review").focus();
            return false;
        }

        var dataString = 'action=add_review&name='+ name + '&review=' + review;
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: dataString,
            success: function(res) {45
                $('.reviews').prepend(res.result);
            }
        });
        return false;
    });
});