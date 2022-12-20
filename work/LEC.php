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
                    <td>  <select id="Frequency">
                        <option value="weekly">Weekly</option>
                        <option value="fortnightly">Fortnightly</option>
                        <option value="monthly">Monthly</option>
                        <option value="annually">Annually</option>
                    </select></td>

                    <td><input type="text" id="total" name="Total" placeholder="$10,400"> </td>
                    <td>  <select id="Frequency">
                        <option value="weekly">Monthly</option>
                        <option value="fortnightly">Quarterly</option>
                        <option value="monthly">Biannually</option>
                        <option value="annually">Annually</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Transportation</td>
                    <!-- working -->
                    
                    <td><input type="text" id="trans" name="Total" placeholder="$80"></td>
                    <td>  <select id="Frequency">
                        <option value="weekly">Weekly</option>
                        <option value="fortnightly">Fortnightly</option>
                        <option value="monthly">Monthly</option>
                        <option value="annually">Annually</option>
                    </select></td>
                    <td><input type="text" id="total" name="Total" placeholder="$4,160"> </td>
                    <td>  <select id="Frequency">
                        <option value="weekly">Monthly</option>
                        <option value="fortnightly">Quarterly</option>
                        <option value="monthly">Biannually</option>
                        <option value="annually">Annually</option>
                    </select></td>
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
                    <td> <input id="totaloutput" type=""> </td>
                    <td> </td>
                    <td> <input type=""> </td>
                    <td> </td>
                </tr>
        
            
                
                 </table>
        </div>

    </div>

<script src="../script.js"></script>


</body>

<!-- <?php include '../footer.php';?> -->
</html>