$(document).ready(function() {

    //Drink Selection template
    var selection_block = "";
    selection_block += "<a href='#' class='{0} drink_button'>";
    selection_block += "   <img src='{1}' class='img-fluid' alt='{2}'>";
    selection_block += "</a>";
    
    //Format note:
    //{0} button type   e.g coke_button
    //{1} img src       e.g assets/images/coke_bottle.png
    //{2} img alt       e.g Coca Cola

    //-----Get JSON objects-----    
    var drinkInfoJson = null;
    //Object Notes:
    //  image_url
    //  image_alt

    var drinkButtonJson = null;
    //Object Notes:
    //  button_type

    $.when(
    $.getJSON("index.php/apiGetAllDrinkInfo", function(data) {
        drinkInfoJson = data;
    }),
    $.getJSON("index.php/apiGetAllDrinkButton", function(data) {
        drinkButtonJson = data;
    })).done(function() {
    //'$.when' Ensures formatting AFTER all JSON objects set/AJAX calls done

    //Copy template and format/fill in text
    var selection_cola = selection_block.format(
        drinkButtonJson[0].button_type, 
        drinkInfoJson[0].image_url, 
        drinkInfoJson[0].image_alt);
    $("#selection_cola").html(selection_cola);
    
    var selection_diet_cola = selection_block.format(
        drinkButtonJson[1].button_type, 
        drinkInfoJson[1].image_url, 
        drinkInfoJson[1].image_alt);
    $("#selection_diet_cola").html(selection_diet_cola);

    var selection_drpepper = selection_block.format(
        drinkButtonJson[2].button_type, 
        drinkInfoJson[2].image_url, 
        drinkInfoJson[2].image_alt);
    $("#selection_drpepper").html(selection_drpepper);

    var selection_fanta = selection_block.format(
        drinkButtonJson[3].button_type, 
        drinkInfoJson[3].image_url, 
        drinkInfoJson[3].image_alt);
    $("#selection_fanta").html(selection_fanta);

    var selection_oasis = selection_block.format(
        drinkButtonJson[4].button_type, 
        drinkInfoJson[4].image_url, 
        drinkInfoJson[4].image_alt);
    $("#selection_oasis").html(selection_oasis);

    var selection_sprite = selection_block.format(
        drinkButtonJson[5].button_type, 
        drinkInfoJson[5].image_url, 
        drinkInfoJson[5].image_alt);
    $("#selection_sprite").html(selection_sprite);
    });
});

//Format function - by gpvos (2011). https://stackoverflow.com/questions/1038746/equivalent-of-string-format-in-jquery
String.prototype.format = function () {
    var args = arguments;
    return this.replace(/\{(\d+)\}/g, function (m, n) { return args[n]; });
};