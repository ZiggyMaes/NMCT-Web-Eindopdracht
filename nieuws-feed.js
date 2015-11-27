var fadeTimer;

var element;
var fadeDuratie = 1000;
var steps = 20;
var weergaveTijd = 4000;

function setOpacity(level) {
    element.style.opacity = level;
}

function fadeIn(childIndex) {
    element = document.getElementById('news-slide').children[childIndex];
    element.style.display = "block";
    for (i = 0; i <= 1; i += (1 / steps)) {
        setTimeout("setOpacity(" + i + ")", i * fadeDuratie);
    }
    fadeTimer = setTimeout("fadeOut(" + childIndex + ")", weergaveTijd);
}

function fadeOut(childIndex) {
    element = document.getElementById('news-slide').children[childIndex];;
    for (i = 0; i <= 1; i += (1 / steps)) {
        if (i == 1) {
            element.style.display = "none";
        }
        setTimeout("setOpacity(" + (1 - i) + ")", i * fadeDuratie);
    }
    childIndex++;
    if (childIndex == document.getElementById('news-slide').children.length) { childIndex = 0; }
    fadeTimer = setTimeout("fadeIn(" + childIndex + ")", fadeDuratie);
}

function stopFading() {
    window.clearInterval(fadeTimer);
    element.style.opacity = 1.0;
}

function startFading() {
    fadeIn(0);
}