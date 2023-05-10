//x3d

//Switches x3d scene lights
function toggleLight(light, checked) {
    if (checked) {
        document.getElementById('scene__' + light).setAttribute('intensity', "1");
    }
    else {
        document.getElementById('scene__' + light).setAttribute('intensity', "0");
    }
}

//Switches x3d scene view
function changeView(view) {
    document.getElementById('scene__CA_' + view).setAttribute('bind', 'true')
}

//Switches x3d render mode
var current_mode = 0;
function changeRender(mode) {
    var e = document.getElementById('x3d');
    while(current_mode != mode) {
        e.runtime.togglePoints(true);
        current_mode++;

        if (current_mode > 2) {
            current_mode = 0;
        }
    }
}


//glTF

var viewer = document.querySelector("model-viewer");

//Shadow Intensity Slider
var shadow_slider = document.getElementById("shadow_intensity_slider");
shadow_slider.oninput = function() {
    viewer.shadowIntensity = this.value;
}

//Shadow Softness Slider
var shadow_soft_slider = document.getElementById("shadow_softness_slider");
shadow_soft_slider.oninput = function() {
    viewer.shadowSoftness = this.value;
}

//Exposure Slider
var exposure_slider = document.getElementById("exposure_slider");
var exposure_label_output = document.getElementById("exposure_label");
exposure_label_output.innerHTML = exposure_slider.value;
exposure_slider.oninput = function() {
    exposure_label_output.innerHTML = this.value;
    viewer.setAttribute("exposure", this.value);
}

//Swap background
function swapBackground(index) {
    if (index == 0){
        viewer.removeAttribute("skybox-image");
    }
    else {   
        $.getJSON("index.php/apiGetBackgrounds", function(data) {
            viewer.setAttribute("skybox-image", data[index-1].bg_url);
        });
    }
}

//Scale Slider
var scale_slider = document.getElementById("scale_slider");
scale_slider.oninput = function() {
    viewer.scale = `${this.value} ${this.value} ${this.value}`;
}

//Time Scale Slider
var time_slider = document.getElementById("time_scale_slider");
var time_scale_output = document.getElementById("time_scale_label");
time_scale_output.innerHTML = time_slider.value;
time_slider.oninput = function() {
    time_scale_output.innerHTML = this.value;
    viewer.timeScale = this.value;
}

//Plays animation for glTF cola model
function playAnimation() {
    viewer.play({repetitions: 1});  
}