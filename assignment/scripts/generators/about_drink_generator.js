$(document).ready(function() {
    //-----Drink About Template-----
    var about_block = "";
    about_block += "<div class='drink_container row'>";
    about_block += "   <div class='col-xs-12'>";
    //Image
    about_block += "       <div class='image-display {0} col-sm-4 shadow'>";
    about_block += "           <img src='{1}' class='img-fluid modal_image' alt='{2}'>";
    about_block += "       </div>"
    //Text
    about_block += "       <div class='{3} col-sm-8 p-4'>";
    about_block += "           <h3>{4}</h3>";
    about_block += "           <p>{5}</p>";
    about_block += "           <a href='#' class='{6} drink_button {0} btn btn-danger'>More</a>";
    about_block += "       </div>";
    about_block += "   </div>";
    about_block += "</div>";
        
    //Formatting notes:
    //{0} image float   e.g float-start
    //{1} img src       e.g assets/images/coke_bottle.png
    //{2} img alt       e.g Coca Cola
    //{3} text float    e.g float-end
    //{4} title         e.g Coca Cola
    //{5} text          e.g This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
    //{6} button type   e.g coke_button

    //-----Get JSON objects-----    
    var drinkInfoJson = null;
    //Object Notes:
    //  image_url
    //  image_alt
    //  title
    
    var drinkAboutLayoutJson = null;
    //Object Notes:
    //  image_float
    //  text_float

    var drinkButtonJson = null;
    //Object Notes:
    //  button_type

    var drinkAboutJson = null;
    //Object Notes:
    //  about_info

    $.when(
    $.getJSON("index.php/apiGetAllDrinkInfo", function(data) {
        drinkInfoJson = data;
        console.log(drinkInfoJson);
    }),
    $.getJSON("index.php/apiGetAllDrinkAboutLayout", function(data) {
        drinkAboutLayoutJson = data;
        console.log(drinkAboutLayoutJson);
    }),
    $.getJSON("index.php/apiGetAllDrinkButton", function(data) {
        drinkButtonJson = data;
        console.log(drinkButtonJson);
    }),
    $.getJSON("index.php/apiGetAllDrinkAboutInfo", function(data) {
        drinkAboutJson = data;
        console.log(drinkAboutJson);
    })
    ).done(function() {
    //'$.when' Ensures formatting AFTER all JSON objects set/AJAX calls done
        
    //-----Copy template and format/fill in text-----
    var about_cola = about_block.format(
        drinkAboutLayoutJson[0].image_float, 
        drinkInfoJson[0].image_url, 
        drinkInfoJson[0].image_alt, 
        drinkAboutLayoutJson[0].text_float, 
        drinkInfoJson[0].title, 
        drinkAboutJson[0].about_info, 
        drinkButtonJson[0].button_type);
    $("#about_cola").html(about_cola);
    
    var about_diet_cola = about_block.format(
        drinkAboutLayoutJson[1].image_float, 
        drinkInfoJson[1].image_url, 
        drinkInfoJson[1].image_alt, 
        drinkAboutLayoutJson[1].text_float, 
        drinkInfoJson[1].title, 
        drinkAboutJson[1].about_info, 
        drinkButtonJson[1].button_type);
    $("#about_diet_cola").html(about_diet_cola);

    var about_drpepper = about_block.format(
        drinkAboutLayoutJson[2].image_float, 
        drinkInfoJson[2].image_url, 
        drinkInfoJson[2].image_alt, 
        drinkAboutLayoutJson[2].text_float, 
        drinkInfoJson[2].title, 
        drinkAboutJson[2].about_info, 
        drinkButtonJson[2].button_type);
    $("#about_drpepper").html(about_drpepper);

    var about_fanta = about_block.format(
        drinkAboutLayoutJson[3].image_float, 
        drinkInfoJson[3].image_url, 
        drinkInfoJson[3].image_alt, 
        drinkAboutLayoutJson[3].text_float, 
        drinkInfoJson[3].title, 
        drinkAboutJson[3].about_info, 
        drinkButtonJson[3].button_type);
    $("#about_fanta").html(about_fanta);

    var about_oasis = about_block.format(
        drinkAboutLayoutJson[4].image_float, 
        drinkInfoJson[4].image_url, 
        drinkInfoJson[4].image_alt, 
        drinkAboutLayoutJson[4].text_float, 
        drinkInfoJson[4].title, 
        drinkAboutJson[4].about_info, 
        drinkButtonJson[4].button_type);
    $("#about_oasis").html(about_oasis);

    var about_sprite = about_block.format(
        drinkAboutLayoutJson[5].image_float, 
        drinkInfoJson[5].image_url, 
        drinkInfoJson[5].image_alt, 
        drinkAboutLayoutJson[5].text_float, 
        drinkInfoJson[5].title, 
        drinkAboutJson[5].about_info, 
        drinkButtonJson[5].button_type);
    $("#about_sprite").html(about_sprite);
    });
});

//Format function - by gpvos (2011). https://stackoverflow.com/questions/1038746/equivalent-of-string-format-in-jquery
String.prototype.format = function () {
    var args = arguments;
    return this.replace(/\{(\d+)\}/g, function (m, n) { return args[n]; });
};