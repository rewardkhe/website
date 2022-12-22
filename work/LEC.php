<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Living Expenses Calculator</title>
        <link rel="stylesheet" href="../CSS/style1.css">
        <link rel="icon" type="image/png" href="../Assets/favicon/lec.png"/>   
    </head>
    <body>
    <?php include 'navbarr.php';?>

    <div id="calculator"> 
        <h2> Living Expenses Calculator</h2>     
       <div id= calculator-box>  
           <form action="lec.php" method="POST"></form>
             <table>
                <tr>
                    <th>Expenditure</th>
                    <th>Amount</th>
                    <th>Frequency</th>
                    <th>Total</th>
                    <th>Total Frequency</th>

                </tr>
                <tr>
                    <td>Rent</td>
                    <!-- working -->

                    <td><input type="number" id="rent" name="Total" placeholder="$200"></td>
                    <td><form> <select id="rfreq">
                        <option value="7">Weekly</option>
                        <option value="14">Fortnightly</option>
                        <option value="30">Monthly</option>
                        <option value="365">Annually</option>
                    </select></form>
                    </td>

                    <td><output type="number" id="rtotal"> </td>
                    <td><form>  <select id="rfreq1">
                        <option value="30">Monthly</option>
                        <option value="90">Quarterly</option>
                        <option value="182">Biannually</option>
                        <option value="365">Annually</option>
                    </select></form>
                    </td>
                </tr>

                <tr>
                    <td>Transportation</td>
                    <!-- working -->
                    
                    <td><input type="number" id="trans" name="Total" placeholder="$80"></td>
                    <td><form>  <select id="tfreq">
                        <option id="frent" value='7'>Weekly</option>
                        <option value='14'>Fortnightly</option>
                        <option value='30'>Monthly</option>
                        <option value='365'>Annually</option>
                        </select></form>
                    </td>
                    <td><ouput type="number" id="ttotal"> </td>
                    <td><form>  <select id="tfreq1">
                        <option value="30">Monthly</option>
                        <option value="90">Quarterly</option>
                        <option value="182">Biannually</option>
                        <option value="365">Annually</option>
                    </select></form>
                </td>
                </tr>
                
              

                <tr>
                    <td> <button class="addmore">More overhead </button></td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>

                <tr>
                    <!-- working -->
                    
                <td> <button id="calulate" onclick="calcj()" >Calculate Total</button></td>
                    <td><div> <output id="output" type="number"></div> </td>
                    <td> </td>
                    <td> <output id= "toutput" type="number"> </td>
                    <td> </td>
                </tr>
        
            
                
                 </table>
        </div>

    </div>

<script src="../script.js"></script>


</body>

<!-- <?php include '../footer.php';?> -->
</html>