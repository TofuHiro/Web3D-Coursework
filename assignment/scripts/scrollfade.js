var text = document.getElementById('main_text');

//Add function to invoke on scroll event
window.addEventListener('scroll', scrollHandler);

function scrollHandler() {
    fadeOutOnScroll(text);
}

//Fades element based on scrolled amount
function fadeOutOnScroll(element) {
    if (!element) {
        return;
    }   
  
    //Determine opacity based on currently scroll
    var opacity = 1 - (document.documentElement.scrollTop / window.screen.height * 2);

    //Set opacity
    element.style.opacity = opacity;
}