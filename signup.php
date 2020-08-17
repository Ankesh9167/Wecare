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
    $username = $_POST['fullname'];	
    $userid = $_POST['userid'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $medicalbg = $_POST['medicalbg'];
    
   
    $sql = "insert into users(name,userid,email,phoneno,dob,gender,password,medical) values('$username' ,'$userid','$email','$phoneno','$dob','$gender','$password','$medicalbg')";
    
	 mysqli_query($con,$sql);
  //       echo $username;
  //       echo $userid;
  //       echo $email;
  //       echo $phoneno;
  //       echo $gender;

  //     echo $dob;
  header("Location:http://localhost/WT%20UI/login.html");

?>

