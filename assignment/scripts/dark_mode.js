$(document).ready(function () {
    //"" is light version
    //Get stored mode
    var mode = localStorage.cssTemplate || ""; 
    //Set initial switch state
    $("#dark_mode_switch").attr('checked', mode != ""); 
    //Set initial mode
    document.body.className = mode;
});

function toggleDarkMode(checked) {
    if (checked) {
        localStorage.cssTemplate = "dark";
        document.body.className = "dark";
    }
    else {
        localStorage.cssTemplate = "";
        document.body.className = "";
    }
}