<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Living Expenses Calculator</title>
        <link rel="stylesheet" href="../CSS/style1.css">
        <script src="../script.js"></script>
    </head>
    <body>
        <div class="navbar"> 
            <a id="navlogo" href="../home.php"><img src="../Assets/wflogo3.png" alt="Reward Khe"></a>
            <ul> 
                <li><a href="../home.php">Home</a></li>
                <li><a href="../work.php">Work</a></li>
                <li><a href="../about.php">About</a></li>
            </ul>
        </div>

        <button id="workmode" onclick="nightmode()"> Work mode</button>
        <a href="index.html"> 
        <button id="logout"> log out</button>
        </a> 

    <div id="calculator"> 
        <center> <h2> Living Expenses Calculator</h2> </center>
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


    <a href="../index.html"> 
        <button id="logout" class="btn btn-primary" > log out</button>
    </a> 
</body>
<?php include '../footer.php';?>
</html>