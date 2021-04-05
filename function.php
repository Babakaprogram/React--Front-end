 <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $mydatabase="details";
    
    $conn=new mysqli($servername,$username,$password,$mydatabase);
   
    $a=$_GET["sender1"];
    $b=$_GET["receiver"];
    $am=$_GET['amt'];

    // echo "<html><body>".$_GET['sender1']."</body></html>";

    $sql="SELECT bankbalance FROM member_details WHERE firstname='".$a."'";
    $result = mysqli_query($conn,$sql);

  //  echo $result["bankbalance"];
    
    
	if (mysqli_num_rows($result) > 0) {
        // output data of each row
       $row = mysqli_fetch_assoc($result);
        // echo "jafh";
$s=$row["bankbalance"]-$am;
        //  echo "'".$s."'"; 
        $sql = "UPDATE member_details SET bankbalance='".$s."' WHERE firstname='".$a."'";

if ($conn->query($sql) === TRUE) {
 //echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
        }
        else{
            echo "Record Not Found:".mysqli_error($conn);
    }
  $sql1="SELECT bankbalance FROM member_details WHERE firstname='".$b."'";
    $result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($result1);
 $s1= $row["bankbalance"]+$am;
// echo $s1;
 $sql1 = "UPDATE member_details SET bankbalance='".$s1."' WHERE firstname='".$_GET["receiver"]."'";

if ($conn->query($sql1) === TRUE) {
//echo "<script>window.open('next.php','_self');</script>";
} 
        else{
           echo "Record Not Found:".mysqli_error($conn);
    }

 $sql = "INSERT INTO transaction (sender, receiver, amount)
VALUES ('$a','$b',$am)";

if ($conn->query($sql) === TRUE) 
{
                                                                            // DOUBT
                                                                            // DOUBT
                                                                            // DOUBT
                                                                            // DOUBT
                                                                            // DOUBT
                                                                            // This 
  echo "<script>window.open('next.php','_self');</script>";        
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>