document.getElementById("loan").addEventListener("input", action);
document.getElementById("rate").addEventListener("input", action);
document.getElementById("time").addEventListener("input", action);



function action() 

{
    var loan = document.getElementById('loan').value;
    var rate = document.getElementById("rate").value;
    var time = document.getElementById("time").value;
    var x = document.getElementById('output');
    x.innerHTML ="$" + (+loan + (((+rate / +100) * +loan)* +time));

    console.log(+loan + (((+rate / +100) * +loan)* +time));
}

function reset() {
    document.getElementById("form").reset();
  }

