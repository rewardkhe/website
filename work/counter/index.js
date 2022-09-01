var output = document.getElementById('out');
var y = document.getElementById("out").innerText;
var x = "x";
function plusAction()
{
    output.innerHTML = ++y;
    console.log (x + " this is x");
    console.log (y + " this is y");
}

function multAction()
{
    output.innerHTML = Math.pow(y, 2);
    y = output.innerHTML;
    console.log (x + " this is x");
    console.log (y + " this is y");
}

function rootAction()
{
    output.innerHTML = Math.sqrt(y);
    y = output.innerHTML;
    console.log (x + " this is x");
    console.log (y + " this is y");
}

function resetAction()
{
    output.innerHTML = (y=0);
    console.log (x + " this is x");
    console.log (y + " this is y");
    
}