<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WeCare";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
ob_start();
session_start();

$sql = "SELECT * FROM users WHERE userid='$_POST[userid]' AND password= '$_POST[password]'";
$result = $conn->query($sql);
if($conn->error) exit($conn->error);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "userid: " . $row["userid"]. " - paass: " . $row["password"]. "<br>";

        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $userid = $_POST[userid];
        $_SESSION["password"] =" $_POST[password]";

         //echo "userid is " . $_SESSION["userid"] . ".<br>";
      //  echo "password is " . $_SESSION["password"] . ".";
      header("Location:http://localhost/WT%20UI/appoitment.php?id=$userid");

    
    }
} else {

    header("Location:http://localhost/WT%20UI/signup.html");
}

$conn->close();
?>
