$(document).ready(function(){

    $("#add_pokemon").click( function(event) {

        event.preventDefault();

        var button = $(this);
        var loader = $(this).siblings(".loader");
        button.css("display", "none");
        loader.css("display","inline-block");

        $.ajax({
            url: "/pokemon/random"
        }).done( function(data) {

            var pokemon_list = $(".pokemon_list");
            pokemon_list.children(".placeholder").remove();
            pokemon_list.append(data.item);

            $('html,body').animate({scrollTop: pokemon_list.height()}, 1000);

            loader.removeAttr("style");
            button.removeAttr("style");
        }).fail(function(){
            loader.removeAttr("style");
            button.removeAttr("style");
        });

    });

    $("#create_team").submit( function(event) {

        event.preventDefault();

        var form = $(this);

        var pokemon_id = form.find("input[name='pokemon_id[]']").map(function(){return $(this).val();}).get();
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
                pokemon_id: pokemon_id
            }
        }).done( function(data) {
            if(data["code"] == 0) {
                window.location.href = form.attr('redirect');
            }
            else {
                var error_field = form.find("input[name='team_name']").siblings('.field_error');
                error_field.text(data['errors']['team_name']);
                error_field.addClass("visible");

                error_field = form.find("input[name='team_submit']").siblings('.field_error');
                error_field.text(data['errors']['team_composition']);
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
