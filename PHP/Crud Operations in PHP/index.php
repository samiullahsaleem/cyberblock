<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <style>
            table {
                border-collapse:collapse;
                border: 1px solid black;
            }
            td,th{  border: 1px solid black;
                border-collapse:border;
            }
        </style>
</head>
<body>
    
<table>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Address</th>
                <th>Number</th>
                <th>Delete</th>
                <th>update</th>

            </tr>
            <?php
            include("Php and Database Connection.php");
    // select query showing data
            $qry = "SELECT * FROM employee";
            $result =  $conn->query($qry);
            if($result->num_rows>0){
                while ($row = $result->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['first_name']."</td>";
                        echo "<td>".$row['last_name']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['number']."</td>";
                        echo "<td><a onclick = 'return confirm(\"are you sure?\") 'href= 'delete.php?id=".$row['id']."'>Delete</a> </td>";
                        echo "<td><a onclick = 'return confirm(\"are you sure?\") 'href= 'edit.php?id=".$row['id']."'>update</a> </td>";
                    echo "<tr>";
                }
            }
            ?>

        </table>
        <h3><a href="insert.php"><br>Add new record</a></h3>


</body>
</html>
