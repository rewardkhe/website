<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Living Expenses Calculator</title>
        <link rel="stylesheet" href="../CSS/style1.css">
        <link rel="icon" type="image/png" href="../Assets/favicon/lec.png"/>   

        <script src="../script.js"></script>
    </head>
    <body>
    <?php include 'navbarr.php';?>

    <div id="calculator"> 
        <h2> Living Expenditure Calculator</h2>     
        <form action="lec.php" method="POST"></form>
        <table>
            <tr>
                <th>Expenditure</th>
                <th>Amount</th>
                <th>Frequency</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Rent</td>
                <td><input type="number" id="total" name="Total"
                placeholder="$200"></td>
                <td>  <select id="Frequency">
                    <option value="weekly">Weekly</option>
                    <option value="fortnightly">Fortnightly</option>
                    <option value="monthly">Monthly</option>
                    <option value="annually">Annually</option>
                  </select></td>
                <td><input type="text" id="total" name="Total"
                placeholder="$10,400"> </td>
            </tr>
            <tr>
                <td> <button class="calulate">Calculate</button></td>
            </tr>
           
            <tr>
                <td> <button class="addmore">Add more</button></td>
            </tr>
        </table>
    </div>

    <?php include 'buttonss.php';?>


</body>
<?php include '../footer.php';?>
</html>