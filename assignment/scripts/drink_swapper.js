var currentDrinkId = 0;

//Image carousel buttons
$(document).on("click", "#previous_drink", function() {
    currentDrinkId--;

    //Loop around
    if (currentDrinkId < 0){
        currentDrinkId = 5;
    }

    switchToDrink(currentDrinkId);
});
$(document).on("click", "#next_drink", function() {
    currentDrinkId++;

    //Loop around
    if (currentDrinkId > 5){
        currentDrinkId = 0;
    }

    switchToDrink(currentDrinkId);
});
function switchToDrink(id){
    switch(id) {
        case 0: 
            switchToCola();
            break;
        case 1: 
            switchToDiet();
            break;
        case 2: 
            switchToPepper();
            break;
        case 3: 
            switchToFanta();
            break;
        case 4: 
            switchToOasis();
            break;
        case 5: 
            switchToSprite();
            break;
    }
}

//Drink buttons
$(document).on("click", ".coke_button", switchToCola);
function switchToCola() {
    currentDrinkId = 0;
    resetBackground();
    switchBackground("coke");
    switchDrinkContent("CocaCola");
    switchModel("0");
};
$(document).on("click", ".diet_coke_button", switchToDiet);
function switchToDiet() {
    currentDrinkId = 1;
    resetBackground();
    switchBackground("diet_coke");
    switchDrinkContent("DietCoke");
    switchModel("1");
};
$(document).on("click", ".drpepper_button", switchToPepper);
function switchToPepper() {
    currentDrinkId = 2;
    resetBackground();
    switchBackground("drpepper");
    switchDrinkContent("DrPepper");
    switchModel("2");
};
$(document).on("click", ".fanta_button", switchToFanta);
function switchToFanta() {
    currentDrinkId = 3;
    resetBackground();
    switchBackground("fanta");
    switchDrinkContent("Fanta");
    switchModel("3");
};
$(document).on("click", ".oasis_button", switchToOasis);
function switchToOasis() {
    currentDrinkId = 4;
    resetBackground();
    switchBackground("oasis");
    switchDrinkContent("Oasis");
    switchModel("4");
};
$(document).on("click", ".pepsi_button", switchToSprite);
function switchToSprite() {
    currentDrinkId = 5;
    resetBackground();
    switchBackground("sprite");
    switchDrinkContent("Sprite");
    switchModel("5");
};



//Switches background colour
function switchBackground(drink_name) {
    $("#image_display").addClass(drink_name);
}

//Switches content based on given drink
function switchDrinkContent(drink_name) {
    $.getJSON("index.php/apiGet" + drink_name + "DrinkInfo", function(data) {
        $("#image_display").children().children("img").attr('src', data.image_url);
        $("#image_display").children().children("img").attr('alt', data.image_alt); 
        $("#image_panel").children().children().children("h3").html(data.title);
        $("#nutrition").html(data.nutrition);
        $("#info").html(data.info);
    });
    //Drink info
    //Json notes:
    //  image_url
    //  image_alt
    //  title
    //  nutrition
    //  info

    $.getJSON("index.php/apiGet" + drink_name + "ImageInfo", function(data) {
        $("#image_panel").children().children().children("p").html(data.image_info);
    });
    //Image info
    //Json notes:
    //  image_info
    
    $.getJSON("index.php/apiGet" + drink_name + "ModelInfo", function(data) {
        //x3d
        $("#x3d_model_info").children("p").html(data.x3d_info);
        //Set in switchModel function
        $("#x3d_model_info").children("h3").html(data.x3d_creation_method);

        //glTF
        $("#glTF_model_info").children("p").html(data.glTF_info);
        $("#glTF_model_info").children("h3").html(data.glTF_creation_method);
        //Reset scale before switching models
        document.getElementById("scale_slider").value = 1;
        document.querySelector("model-viewer").scale = '1 1 1';
        $("model-viewer").attr("src", data.glTF_model);
    });
    //Model info
    //Json notes:
    //  x3d_info
    //  x3d_model
    //  x3d_creation_method
    //  glTF_info
    //  glTF_model
    //  glTF_creation_method
}

//Switch x3d model
function switchModel(index) {
    $("#modelswitcher").attr('whichChoice', index);
}

//Removes active drink style
function resetBackground() {
    $("#image_display").removeClass("coke");
    $("#image_display").removeClass("diet_coke");
    $("#image_display").removeClass("drpepper");
    $("#image_display").removeClass("fanta");
    $("#image_display").removeClass("oasis");
    $("#image_display").removeClass("sprite");
}

//Format function - by gpvos (2011). https://stackoverflow.com/questions/1038746/equivalent-of-string-format-in-jquery
String.prototype.format = function () {
    var args = arguments;
    return this.replace(/\{(\d+)\}/g, function (m, n) { return args[n]; });
};