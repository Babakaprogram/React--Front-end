<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOney transfer</title>

    <style>
        .sendrev{
            position: absolute;
    left: 47%;
    bottom: 40%;
    padding: 0px;
        }
    </style>
<!--  -->

<?php
$servername="localhost";
$username="root";
$password="";
$mydatabase="details";

$conn=new mysqli($servername,$username,$password,$mydatabase);

if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}

?>




</head>
<body>

<form action="function.php" method="get"><table class="sendrev" border="1" cellspacing="0">  
    
<!--  -->                                              
                                                                    <!-- NAME OF SENDER -->
                                                                    <!-- NAME OF SENDER -->
                                                                    <!-- NAME OF SENDER -->
                                                                    
<tr>
    <td>Name of sender</td>              
    <td><select name="sender1" >
        
<?php

$conn=new mysqli($servername,$username,$password,$mydatabase);

$sql= "SELECT firstname FROM member_details";
$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
      echo "<option>".$row["firstname"]."</option>"; 
	}
	}
	else
    {
		echo "Record Not Found:".mysqli_error($conn);
    }
    ?></select>
    
</td>
    
</tr>


    <tr>
                                                                    <!-- NAME OF receiver -->
                                                                    <!-- NAME OF receiver -->
                                                                    <!-- NAME OF receiver -->
                                                                    <!-- NAME OF receiver -->

    <td>Receiver name</td>
    <td>
    <select name="receiver" >
        
        <?php
        
        $conn=new mysqli($servername,$username,$password,$mydatabase);
        

        $sql= "SELECT firstname FROM member_details";
        $result = mysqli_query($conn, $sql);
        
        
            if (mysqli_num_rows($result) > 0) 
            {
            // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
              echo "<option>".$row["firstname"]."</option>"; 
            }

            }
            else
            {
                echo "Record Not Found:".mysqli_error($conn);
            }
        ?></select>
    </td>

    <tr>
        <!-- Amount -->
        <!-- Amount -->
        <!-- Amount -->
        <!-- Amount -->
        <!-- Amount -->

        <td>Amount</td>
        <td>
            <input type="number" name="amt"></input>
        </td>
    </tr>


    <tr>
        <td colspan="2" align="center">
        <input type="submit" />
        </td>
    </tr>


</tr>







</table>


</form>
    










</body>
</html>


