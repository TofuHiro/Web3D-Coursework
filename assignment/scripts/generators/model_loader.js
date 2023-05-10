$(document).ready(function() {

    $.getJSON("index.php/apiGetAllDrinkModelInfo", function(data) {
        $("#model_cocacola").attr('url', data[0].x3d_model);
        $("#model_dietcoke").attr('url', data[1].x3d_model);
        $("#model_drpepper").attr('url', data[2].x3d_model);
        $("#model_fanta").attr('url', data[3].x3d_model);
        $("#model_oasis").attr('url', data[4].x3d_model);
        $("#model_sprite").attr('url', data[5].x3d_model);
    });
});