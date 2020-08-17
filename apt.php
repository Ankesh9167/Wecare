<?php
	$con = mysqli_connect("localhost","root","","bor");
    $dname = $_POST['doctor'];	
    $time = $_POST['time'];
    $adate = $_POST['date'];
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM booked WHERE  appdate='$_POST[date]' AND time = '$_POST[time]'";
    $result = $con->query($sql);
if($con->error) exit($con->error);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "userid: " . $row["userid"]. " - paass: " . $row["password"]. "<br>";

        echo "<script>alert('already booked please select diffrent timing or date ');</script>";
    }
} else {
    $sql = "insert into booked(doctor,time,appdate,user) values('$dname','$time','$adate','$userid')";
    mysqli_query($con,$sql);
    header("Location:http://localhost/WT%20UI/appoitment.php?id=$userid");
}

$con->close();

  
?>

