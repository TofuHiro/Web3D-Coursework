$(window).on('load', function() {
    //Default
    $("#home_content").show();
    $("#home_image").fadeIn(800);
    $("#about").fadeIn(800);

    $("#image_display").hide();;
    $("#image_panel").hide();

    $("#x3d_model_display").hide();
    $("#x3d_model_panel").hide();

    $("#glTF_model_display").hide();
    $("#glTF_model_panel").hide();

    $("#drink_info").hide();
});

//To Home
$(document).on("click", ".home_button", function() {
    $("#home_content").show();
    $("#home_image").fadeIn(800);
    $("#about").fadeIn(800);

    $("#image_display").hide();;
    $("#image_panel").hide();

    $("#x3d_model_display").hide();
    $("#x3d_model_panel").hide();

    $("#glTF_model_display").hide();
    $("#glTF_model_panel").hide();

    $("#drink_info").hide();

    hideDrinkSelection();
    hideNavbar();
});

//To Image View
$(document).on("click", ".drink_button", function() {
    $("#home_content").hide();
    $("#home_image").hide();
    $("#about").hide();

    $("#image_display").fadeIn(800);
    $("#image_panel").fadeIn(800);

    $("#x3d_model_display").hide();
    $("#x3d_model_panel").hide();

    $("#glTF_model_display").hide();
    $("#glTF_model_panel").hide();

    $("#drink_info").fadeIn(800);

    hideDrinkSelection();
    hideNavbar();
});

//To x3d Model View
$(document).on("click", ".x3d_button", function() {
    $("#home_content").hide();
    $("#home_image").hide();
    $("#about").hide();

    $("#image_display").hide();
    $("#image_panel").hide();

    $("#x3d_model_display").fadeIn(800);
    $("#x3d_model_panel").fadeIn(800);

    $("#glTF_model_display").hide();
    $("#glTF_model_panel").hide();

    $("#drink_info").fadeIn(800);

    hideDrinkSelection();
    hideNavbar();
});

//To glTF Model View
$(document).on("click", ".glTF_button", function() {
    $("#home_content").hide();
    $("#home_image").hide();
    $("#about").hide();

    $("#image_display").hide();
    $("#image_panel").hide();

    $("#x3d_model_display").hide();
    $("#x3d_model_panel").hide();

    $("#glTF_model_display").fadeIn(800);
    $("#glTF_model_panel").fadeIn(800);

    $("#drink_info").fadeIn(800);

    hideDrinkSelection();
    hideNavbar();
});

//Hide collapsibles on select e.g drink selection
function hideDrinkSelection() {
    $("#collapseDrinks").removeClass("show");
}
function hideNavbar() {
    $("#collapsibleNavbar").removeClass("show");
}