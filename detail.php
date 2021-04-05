<!DOCTYPE html>
<html>
<body>





<!-- <style>

.sandeep{
    background-color: cadetblue;
    width: 599px;
    position: absolute;
}



</style> -->

<?php
$servername="localhost";
$username="root";
$password="";
$mydatabase="details";

$conn=new mysqli($servername,$username,$password,$mydatabase);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$a=$_GET["firstname"];

$sql= "SELECT * from transaction WHERE sender='".$a."'";
$result = mysqli_query($conn,$sql);


    if (mysqli_num_rows($result) > 0)
     {
    // output data of each row
    echo "<table width='600' border=2>";
   // echo "id: " . $row["Name"]. " - Name: " . $row["Phone"]. " " . $row["Email"]. "<br>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row["sender"]. "</td><td>" . $row["receiver"]. "</td><td> " . $row["amount"]. "</td><td>" . $row["tdate"]."</td>";
        // echo "<option> " . $row["name"]. "</option>";
        echo "</tr>";
    } 
    echo "</table>";
}
    else
    {
        echo "Not transacted yet";
    }
		

    





$conn->close();
?>
</body>
</html>