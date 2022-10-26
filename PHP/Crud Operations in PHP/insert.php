<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
        <form action="" method="post">
			<label for="firstName">Enter your First Name :</label>
			<input type="text" name="fname" id="firstName"><br>
			<label for="lastName">Enter your Last Name :</label>
			<input type="text" name="lname" id="lastName"><br>
			<label for="emailaddress">Enter your Email  :</label>
			<input type="text" name="email" id="emailaddress"><br>
            <label for="Address">Employee Address :</label>
            <input type="text" name="address" id="Address"><br>
            <label for="c_number">Employ Number :</label>
            <input type="text" name="number" id="c_number"><br>
			<button type="submit" name="btn">Submit</button>
		</form>

    <?php
    include("Php and Database Connection.php");
// When button is pressed data from text fields are stored in variables
if(isset($_POST['btn']))

{
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $address = $_POST['address'];
    $number = $_POST['number'];

//Insert Query
    $sql="INSERT INTO employee(first_name,last_name,email,address,number) VALUES('$fname','$lname','$email','$address','$number')";
    if($conn->query($sql)===TRUE)
    
            {
                echo " DATA INSERTED SUCCESSFULLY";
                echo "<script>window.location = 'index.php'</script>";
            }
    
            else
            {
                echo "error";
            }
    
}

?>



</body>
</html>
