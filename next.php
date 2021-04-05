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
$det=array();
$i=0;                                                               
                                                                    // $i

$conn=new mysqli($servername,$username,$password,$mydatabase);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}


$sql= "SELECT * from member_details";
$result = mysqli_query($conn,$sql);


    if (mysqli_num_rows($result) > 0)
     {

    // output data of each row
    echo "<table width='600' border=2>";
   // echo "id: " . $row["Name"]. " - Name: " . $row["Phone"]. " " . $row["Email"]. "<br>";
    while($row = mysqli_fetch_assoc($result))
    {
        $det[$i]=$row["firstname"];
        echo "<tr>";
        echo "<td>" . $row["firstname"]. "</td><td>" . $row["email"]. "</td><td> " . $row["bankbalance"]. "</td><td>" . $row["reg_date"]."</td><td><a href='money.php'>Transfer</a></td>
        <td><a href='detail.php?firstname=".$det[$i]."'>Details</a></td>";
                                                                        // <a href='detail.php?firstname=".$det[$i]."'>Details</a>
                                                                        // <a href='detail.php?firstname=".$det[$i]."'>Details</a>
                                                                        // <a href='detail.php?firstname=".$det[$i]."'>Details</a>
                                                                        // <a href='detail.php?firstname=".$det[$i]."'>Details</a>
         $i=$i+1;
    } 
    echo "</table>";
}
    else
    {
        echo "0 results";
    }
		

    





$conn->close();
?>
</body>
</html>