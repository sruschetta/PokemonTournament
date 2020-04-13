$(document).ready(function(){

    $("#pokemon_type_filter").submit( function(event) {

        event.preventDefault();

        var form = $(this);

        var button = $(this).find("input[name='filter_type']");
        var loader = button.siblings(".loader");
        button.css("display", "none");
        loader.css("display","inline-block");

        $.ajax({
            url: location.href,
            type: "POST",
            dataType: "json",
            data: {
                "types": form.serializeArray()
            }
        }).done( function(data) {
            if(data['code'] == 0) {
                $('.team_list').html(data['teams']);
            }
            loader.removeAttr("style");
            button.removeAttr("style");
        }).fail( function(){
            loader.removeAttr("style");
            button.removeAttr("style");
        });
    });
});
