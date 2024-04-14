// for subpage header
function changeColor() {
    document.getElementById("header").className = "subpage-header";
}


// slideshow display
let slideIndex = 1;
let width = 98;
let numSlide = 5;

function nextSlide() {
    if (slideIndex !== numSlide) { // check if it's the last slide
        slideIndex += 1; // if not, slide by one image
    }
    else{
        slideIndex = 1; // if it is, then back to the first image
    }

    document.getElementById('slides').style.left = -width*(slideIndex-1) + 'vw'; // display corresponding image
}

function prevSlide() {
    if (slideIndex !== 1) { // check if it's the first slide
        slideIndex -= 1; // if not, slide by one image
    }
    else {
        slideIndex = 5; // if it is, go to the last image
    }

    document.getElementById('slides').style.left = -width*(slideIndex-1) + 'vw'; // display corresponding image
}


// for processing quiz
function checkAnswer() {

    let selected = document.querySelector('input[name="radAnswer"]:checked');
    let button = document.getElementById('quizbtn');

    if (selected.id == "correct") {
       button.style.backgroundColor = "green";
       button.innerHTML = "Correct";
    }

    else {
        button.style.backgroundColor = "#EA3546";
        button.innerHTML = "Wrong";
    }
   
    setTimeout(function() {quizReset(selected, button)}, 3000);
}

function quizReset(selected, button) {

    selected.checked = false;
    button.innerHTML = "Check";
    button.style.backgroundColor = "#4A4E69";

}
