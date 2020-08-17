<?php
//    $con = mysqli_connect("localhost","root","","bor");
//	$fullname = $_POST['fullname'];	
//	$userid = $_POST['userid'];
//	$email = $_POST['email'];
//	$phoneno = $_POST['phoneno'];
//	$dob = $_POST['dob'];
  //  $gender = $_POST['gender'];
    //$password = $_POST['password'];
    //$medicalbg = $_POST['medicalbg'];

  //$sql = "insert into users('name') values('$fullname')";
    //mysqli_query($con,$sql);
    //echo 'Successful';
	$con = mysqli_connect("localhost","root","","WeCare");
    $name = $_POST['name'];	
    $em = $_POST['contact'];
    //$ms = $_POST['message'];
    

    $sql = "insert into contact(name,phoneno) 
    values('$name','$em')";
    
    mysqli_query($con,$sql);
    header("Location:http://localhost/HospitalWebsite");
    

?>

