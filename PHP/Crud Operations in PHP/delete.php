<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("Php and Database Connection.php");
    //Takes id from url and stores in $id variable
    $id = $_GET['id'];
    //delete query
    $qry = "DELETE FROM employee WHERE id ='$id'";
    $result = $conn->query($qry);
    
    if($result==true)
    {
        echo "Record deleted";
        echo "<script>window.location = 'index.php'</script>";
    }
    else 
    {
        echo "Error: ".$qry."<br>".$conn->connect_error;
    }
    ?>
</body>
</html>
