$(document).ready(function () {
    //"" is light version
    //Get stored mode, if currentMode is empty, just set to light mode ("")
    var mode = localStorage.currentMode || ""; 
    //Set initial switch state
    $("#dark_mode_switch").attr('checked', mode != ""); 
    //Set initial mode
    document.body.className = mode;
});

//Toggle between light and dark mode
function toggleDarkMode(checked) {
    if (checked) {
        localStorage.currentMode = "dark";
        document.body.className = "dark";
    }
    else {
        localStorage.currentMode = "";
        document.body.className = "";
    }
}