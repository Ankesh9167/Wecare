
<?php include("db.php");
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $info="select * from users where userid='$id'";
  $query=$conn->query($info);
  while($row=mysqli_fetch_array($query)){
$name=$row['name'];
$email=$row['email'];
$dob=$row['dob'];
$gender=$row['gender'];

  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

 <!-- <script>$(function() { alert('hello') });</script> -->


    
    
    <!-- <script>
    $(document).onload(function() {
      $( "#date" ).hide(1000);
    } );
    </script>   -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/appointment.css"> 
    <script src="/js/login.js"></script>
    <title>We Care | Appointment  </title>
  </head> 
  <body>
<!--nav bar on top-->  
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
      <a class="navbar-brand" href="index.html"><img src="logo.jpg"  height="50" width="50" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">    Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#Doctors">   Doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">   Get Appointment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">   Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">   Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#followus">   Follow Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">   About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="logout.php">   logout</a>
            </li>
        </ul>
        <!-- to add search bar 
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search . . .">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      -->
      </div> 
      </div>
    </nav>

<!--Appointment form-->   
<ul class="nav nav-pills  my-5">
  
  <li class="nav-item my-5">
    <a class="nav-link" data-toggle="pill" href="#dashboard"><i class="fa fa-tachometer " aria-hidden="true"> Dashboard</i></a>
  </li>
  <li class="nav-item my-5">
    <a class="nav-link" data-toggle="pill" href="#newappoint"><i class="fa fa-plus " aria-hidden="true"> New Appointment</i></a>
  </li>
  <li class="nav-item my-5">
    <a class="nav-link" data-toggle="pill" href="#allappoint"><i class="fa fa-check-square-o" aria-hidden="true"> All Appointment</i> </a>
  </li>
  <li class="nav-item my-5">
    <a class="nav-link" data-toggle="pill" href="#setting"><i class="fa fa-cog" aria-hidden="true"> Settings</i></a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content text-justify text-white ">
<!--Dashboard tab--> 
  <div class="tab-pane container fade dashboard" id="dashboard">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-body py-4">
              <div class="row">
                <div class="col-md-12 lead">User profile<hr></div>
              </div>
              <div class="row">
                <div class="col-md-4 text-center">
                  <img class="img-circle" src="http://digitalmedianetwork.in/digitalmedianetwork/assets/images/users/avatar-guest.png">
                </div>
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-12">
                      <h1 class="only-bottom-margin"><?php echo"$name"; ?></h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                    <form>

                      <span class="text-dark">Email:</span><?php echo"$email"; ?><br> </td>
                      <span class="text-dark">Birth date:</span><?php echo"$dob"; ?> <br>
                      <span class="text-dark">Gender:</span> <?php echo"$gender"; ?><br><br>
                      <small class="text-dark">Created: 17.10.2018</small>
                     </form>
                

                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <hr><button  class="btn btn-primary pull-right"><i class="fa fa-pencil" aria-hidden="true"> Edit</i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--New appointment tab-->
  <div class="tab-pane container fade dashboard" id="newappoint">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-body py-4">
              <div class="row">
                <div class="col-md-12 lead">User profile<hr></div>
              </div>
              <!--new appointment form-->
              <div class="row">
                <div class="col-md-12">
                  <span>Fill the following to get your appointment</span><hr>
                  
                  <form class="form" action="apt.php" method="post">
                    Select Doctor:<input name="doctor" type="text" class="form-control" list="Dr" placeholder="Select Doctor" style="width:250px">
                     <datalist id="Dr">
                       <option>Dr. Jaiswal Ashwin</option>
                       <option>Dr. Phapale Ankesh</option>
                       <option>Dr. Pawar Shubham</option>
                       <option>Dr. Gole Sumedh</option>
                       <option>Dr. swag Omkar</option>
                     </datalist>
                     Select time:<input name="time" type="text" class="form-control" list="tm" placeholder="Select time" style="width:250px">
                     <datalist id="tm">
                       <option>10AM</option>
                       <option>11AM</option>
                       <option>12PM</option>
                       <option>1PM</option>
                       <option>3pM</option>
                       <option>4AM</option>
                       <option>5PM</option>
                       <option>6PM</option>
                       <option>7PM</option>
                       <option>8AM</option>
                       <option>9PM</option>
                       <option>10PM</option>
                     
                     </datalist>
                       <br><div class="md-form">
                       select appointment date:<input name ="date" type="text" class="form-control" placeholder="appointment date" onfocus="(this.type='date')" required> <br>
                      <!-- <input placeholder="Selected time" type="date" id="input_starttime" class="form-control timepicker"> -->
                          <!-- <label for="input_starttime">Light version, 12hours</label> -->
                      </div>
                      <input name="userid" type="text" class="form-control" placeholder="Enter user id" required> <br>
                      <button type="submit" class="btn btn-success mb-4"><b>BookAppointment</b></button> <br>
                         
                      
                      
                         </form> 
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--All appointment tab-->  
  <div class="tab-pane container fade dashboard" id="allappoint">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, reiciendis!
  </div>
</div>











<!--Footer-->
    <div class="container-fluid mt-5 "  >
      <div class="row bg-dark text-white" style="border-radius: 5px;">
          <div class="col-lg-4">
            <div id="services">
              <table class="table mt-3">
                  <tr><td><span class="display-4">Our Services</span></td></tr>
                  <tr><td>Consultant</td></tr>
                  <tr><td>HealthCheckup</td></tr>
                  <tr><td>FamilyDoctors</td></tr>
                  <tr><td>PersonalConsultant</td></tr>
                  <tr><td>medical Test</td></tr>
              </table>
            </div>  
          </div>

          <div class="col-lg-4">
            <div id="contact">
              <table class="table mt-3">
                  <tr><td><span class="display-4">Contact Us</span></td></tr>
                  <tr>
                      <td>
                        <form class="form" action="contact.php" method="post" >
                          <input name="name"  type="text" placeholder="Name" class="form-control mb-2">
                          <input name="contact" type="text" placeholder="contact number" class="form-control mb-2">
                          <button class="btn btn-primary">Submit</button>
                              </form>
                      </td>
                  </tr>
              </table>
            </div>  
          </div>

          <div class="col-lg-4">
            <div id="followus">
              <table class="table mt-3">
                  <tr><td><span class="display-4">Follow US</span></td></tr>
                  <tr>
                      <td>
                          <a href="#" class="nav-link"><button class="btn btn-primary btn-block d-flex"><i class="fa fa-facebook fa-2x pr-3" aria-hidden="true"></i><b> &nbsp; Facebook</button></a>
                          <a href="#" class="nav-link"><button class="btn btn-info btn-block d-flex"><i class="fa fa-twitter fa-2x pr-3"></i><b> Twitter</b></button></a>
                          <a href="#" class="nav-link"><button class="btn btn-danger btn-block d-flex"><i class="fa fa-youtube fa-2x pr-3"></i> <b> YouTube</b></button></a>
                          <a href="#" class="nav-link"><button class="btn btn-success btn-block d-flex"><i class="fa fa-linkedin fa-2x pr-3"></i> <b> Linkedin</b></button></a>
                      </td>
                  </tr>
              </table>
            </div>  
          </div>
      </div>
  </div>
  </div>
 
  <div class="jumbotron text-dark  text-center" style=" background:rgb(206, 204, 204);">
      <p><b> &copy; We Care Web Team 2018 </b></p>
      <a href="index.html"><h3>we care</h3></a>
  </div>
  


   
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>
<?php
if(isset($_POST['submit'])){
  echo "<script>alert('yes');</script>";
$con = mysqli_connect("localhost","root","","bor");
$dname= $_POST['doctor'];	
$atime = $_POST['time'];
$sql = "insert into appointment(doctor,time) values('$dname' ,'$atime')";
$run=mysqli_query($con,$sql);
if($run){
echo "<script>alert('yes');</script>";
}
else {
  
echo "<script>alert('no');</script>";
}
}
?>
