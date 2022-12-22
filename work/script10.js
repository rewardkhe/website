document.getElementById("loan-form").addEventListener("submit", computeResults);

function computeResults(e) {
  // UI

  var UIamount = document.getElementById("amount").value;
  var UIinterest = document.getElementById("interest").value;
  var UIyears = document.getElementById("years").value;

  // Calculate

  var principal = parseFloat(UIamount);
  var CalculateInterest = parseFloat(UIinterest) / 100 / 12;
  var calculatedPayments = parseFloat(UIyears) * 12;

  //Compute monthly Payment

  var x = Math.pow(1 + CalculateInterest, calculatedPayments);
  var monthly = (principal * x * CalculateInterest) / (x - 1);
  var monthlyPayment = monthly.toFixed(2);

  //Compute Interest

  var totalInterest = (monthly * calculatedPayments - principal).toFixed(2);

  //Compute Total Payment

  var totalPayment = (monthly * calculatedPayments).toFixed(2);

  //Show results

  document.getElementById("monthlyPayment").innerHTML = "$" + monthlyPayment;

  document.getElementById("totalInterest").innerHTML ="$" + totalInterest;

  document.getElementById("totalPayment").innerHTML = "$" + totalPayment;

  e.preventDefault();
}
