{/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  */}


function nightmode() {
    var element = document.body;
    element.classList.toggle("work-mode");
}

function playclick() {
    var music = new Audio('Assets/sounds/click.wav');
    music.play();
}


            
var beepOne = $("#beep")[0];
$("#navbar")
.mouseover(function() {
beepOne.play();
});