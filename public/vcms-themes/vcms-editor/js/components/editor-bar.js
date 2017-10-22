/// @author Alex Antonides <{@link http://www.alex-antonides.com/}>
/// @ignore

$( document ).ready( function () {
    $(".dropdown-toggle").click( function () {
        var menu = $(this).parents(".dropdown").children(".dropdown-menu");
        var isHidden = menu.is(":hidden");

        $(".dropdown .dropdown-menu").hide();
        $(".dropdown .dropdown-toggle").removeClass("active");

        if ( isHidden ) {
             menu.toggle();
            $(this).addClass("active");
        }
    } );

    $(document).bind("click", function (e) {
        var target = $(e.target);
        if ( !target.parents().hasClass( "dropdown" ) ) {
            $(".dropdown .dropdown-menu").hide();
        }
    });

    $(document).bind("click", function (e) {
        var target = $(e.target);
        
        if ( !target.parents().hasClass( "dropdown" ) ) {
            $(".dropdown .dropdown-toggle").removeClass("active");
        }
    });
} );