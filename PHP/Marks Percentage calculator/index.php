<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Percentage  calculator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Front-end code -->
    <div class="container" align="center">
        <form action="" method="post">
        <h1>Find Percentage &percnt; Of Your Marks</h1>
        <input type="number" name="obtainedmarks" required placeholder="Please Enter your obtained marks"> <br><br>
        <input type="number" name="totalmarks" required placeholder="Please Enter your total Marks"> <br><br>
        <input type="submit" value="Find Percentage" name="submit" class="submitbutton">
        </form>
    </div>
</body>
</html>
<!-- Backend code in PHP -->
<?php
if(!empty($_POST['submit'])){
    $obtainedmarks=$_POST['obtainedmarks'];
    $totalmarks=$_POST['totalmarks'];

    $percentage=$obtainedmarks*100/$totalmarks;
    echo "Your Total Percentage is".$percentage; 
}

?>