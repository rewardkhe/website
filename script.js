var rent = document.querySelector('#rent');
var trans = document.querySelector('#trans');

var tm = document.querySelector('#totaloutput');
function calcj()
{
   
    tm.value = +rent.value + +trans.value;
    // tm.value = parseInt(rent.value) + parseInt(trans.value);
    // console.log (parseInt("234.34"), "console log message");
}

