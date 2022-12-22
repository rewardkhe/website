document.getElementById("rent").addEventListener("input", calcj);
document.getElementById("trans").addEventListener("input", calcj);
document.getElementById("rfreq").addEventListener("input", calcj);
document.getElementById("tfreq").addEventListener("input", calcj);
document.getElementById("rfreq1").addEventListener("input", calcj);
document.getElementById("tfreq1").addEventListener("input", calcj);


function calcj(){

    var amount1 = document.getElementById("rent").value;
    var amount2 = document.getElementById("trans").value;

    var tm = document.getElementById('output');
    var tm1 = document.getElementById('toutput');
    var rt = document.getElementById('rtotal');
    var tt = document.getElementById('ttotal');
    
    var rvalue = document.getElementById('rfreq').value;
    var tvalue = document.getElementById('tfreq').value;

    var rvalue1 = document.getElementById('rfreq1').value;
    var tvalue1 = document.getElementById('tfreq1').value;
    
    var xrt = +amount1 * rvalue1;
    var xtt = +amount2 * tvalue1;
    
    tm.innerHTML = "$" + (+amount1 + +amount2);
    tm1.innerHTML = "$" + (xrt + xtt);
    
    rt.innerHTML = "$" + xrt;
    tt.innerHTML = "$" + xtt;
    console.log (xrt + xtt);

}



