<?php
  include_once ('header.php');
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Work </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/style1.css">
    <script src="script.js"></script>

</head>

<body>
<?php include 'navbar.php';?>

    <!-- work post starts from here -->

<div class="content">

    <!-- ++++++++++++ Living expenses calculator +++++++++ -->

    <div class="workpost">

        <div style="flex-basis:35%">

            <h3> <a href="work/LEC.php"> Living Expenses Calculator </a> </h3>
            <p> Living expenses calculator is designed to caluclate one's expenses keeping the
                idea of customisation in mind.
                <br> <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis tempora nam eaque esse delectus ab
                eum exercitationem ut consequatur. Veritatis quia accusamus porro possimus quidem eligendi incidunt ipsa
                labore minima.
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis tempora nam eaque esse delectus ab
                eum exercitationem ut consequatur. Veritatis quia accusamus porro possimus quidem eligendi incidunt ipsa
                labore minima.
            </p>

        </div>

        <div id="post" style="flex-basis:60%">

            <a href="work/LEC.php">
               
                    <img src="Assets/calculator.jpg" alt="calculator" width="auto" height="333"> 
               
            </a>

        </div>
        <br> <br>


    </div>

    <div class="workpost">

                    <!-- sudoku post -->

                    <div style="flex-basis:35%">

                    <h3> <a href="work/sudoku.php"> Live Sudoku solver </a> </h3>
                    <p> Live sudoku solver helps you finish your remaining grids in fraction of a second. 
                        
                        <br> <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis tempora nam eaque esse delectus ab
                        eum exercitationem ut consequatur. Veritatis quia accusamus porro possimus quidem eligendi incidunt ipsa
                        labore minima.
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis tempora nam eaque esse delectus ab
                        eum exercitationem ut consequatur. Veritatis quia accusamus porro possimus quidem eligendi incidunt ipsa
                        labore minima.
                    </p>

                </div>

                <div id="post" style="flex-basis:60%">

                    <a href="work/sudoku.php">
                    
                            <img src="Assets/sudoku.jpg" alt="calculator" width="auto" height="333"> 
                    
                    </a>

                </div>
                   


</div>

    <?php include 'buttons.php';?>

</body>

<?php include 'footer.php';?>

</html>