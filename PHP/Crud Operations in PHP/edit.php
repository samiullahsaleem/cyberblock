<?php
    
    include("Php and Database Connection.php");
    //Getting id from url
    $id = $_GET['id'];
    
    //runs select query 
    $qry ="SELECT * FROM employee  WHERE id='$id'";
    $result = $conn->query($qry);
    if($result->num_rows>0)
         {
             while($row=$result->fetch_assoc())
                    {
                        $ID = $row['id'];
                        $fName = $row['first_name'];
                        $lName = $row['last_name'];
                        $email = $row['email'];
                        $Address = $row['address'];
                        $num = $row['number'];
                    }
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Edit </title>

    </head>
    <body>
    <form action="" method="post">
        <label for="firstName">Enter your First Name :</label>
        <input type="text" name="fname" id="firstName" value="<?php echo $fName; ?>"><br>
        <label for="lastName">Enter your Last Name :</label>
        <input type="text" name="lname" id="lastName" value="<?php echo $lName; ?>"><br>
        <label for="emailaddress">Enter your Email  :</label>
        <input type="text" name="email" id="emailaddress" value="<?php echo $email; ?>"><br>
        <label for="Address">Employee Address :</label>
        <input type="text" name="address" id="Address" value="<?php echo $Address; ?>"><br>
        <label for="c_number">Employ Number :</label>
        <input type="text" name="number" id="c_number" value="<?php echo $num; ?>"><br>
        <button type="submit" name="btn">Update</button>
    
<?php
//Functions performed as button is pressed
if(isset($_POST['btn']))

{
    //stores values of text field in variables
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $address = $_POST['address'];
    $number = $_POST['number'];

    //update query
    $sql="UPDATE employee SET first_name='$fname',last_name='$lname',email='$email',address='$address',number='$number' WHERE id='$id'";
    if($conn->query($sql)===TRUE)

        {
            echo "DATA EDITED SUCCESSFULLY";
            echo "<script>window.location = 'index.php'</script>";
        }

        else
        {
            echo "Error";
        }

}
?>
    
    
    </body>
</html>
