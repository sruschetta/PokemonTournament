$(document).ready(function(){

    $("#edit_team").submit( function(event) {

        event.preventDefault();

        var form = $(this);

        var team_name = form.find("input[name='team_name']").val();

        var button = $(this).find("input[name='team_submit']");
        var loader = button.siblings(".loader");
        button.css("display", "none");
        loader.css("display","inline-block");

        $.ajax({
            url: location.href,
            type: "POST",
            dataType: "json",
            data: {
                team_name: team_name,
            }
        }).done( function(data) {
            if( data["code"] == 0) {
                var message = form.find("input[name='team_submit']").siblings('.message');
                message.text(data['message']);

                setTimeout( function(){
                    message.text(null);
                }, 2000);
            }
            else {
                var error_field = form.find("input[name='team_name']").siblings('.field_error');
                error_field.text(data['errors']['team_name']);
                error_field.addClass("visible");
            }
            loader.removeAttr("style");
            button.removeAttr("style");
        }).fail( function(){
            loader.removeAttr("style");
            button.removeAttr("style");
        });
    });

    $("input").focus( function() {
        var field_error = $(this).siblings(".field_error");
        field_error.removeClass('visible');
        field_error.text('');
    });

});
