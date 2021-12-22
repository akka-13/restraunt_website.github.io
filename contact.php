<?php 
error_reporting(0);

session_start();


$server = "localhost";
$user = "root";
$pass = "";
$database = "about";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}



if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$comments = $_POST['comments'];

  $sql = "INSERT INTO `submit` (`name`, `email`, `country`, `comments`) VALUES ('$full_name', '$email', '$country', '$comments')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Thankyou! Our team will try to contact you soon')</script>";
			
	} 
  else{
    echo"<script>alert('You ran into some problem')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
            body{
                margin:0;
                font-family: Arial, Helvetica, sans-serif;
            }
* {box-sizing: border-box;}


.our_menu{
    float:left;
    padding-left: 100px;
    margin-left:800px;
    border:1px solid black;
    border-radius:25px;

}
.user_name{
    float:left;
    text-height:10px;
    display:inline;
    padding-top:10px;
    margin-top:0px;
    height:10px;
}


.contact-image {
  height:170px;
  width:100%;
  background-size:cover;
}
    .logout{
  width:auto;
  height:auto;
  cursor:pointer;
  border:1px solid #ddd;
  display:inline-block;
  padding:14px 25px;
  text-align:center;
  margin-left:50%;
  margin-bottom:30px;
  text-decoration:none;
  color:black;
  border-radius:3px;
  background-color:#6495ED;
}
.logout:hover{
  color:black;
  text-decoration:none;
 
  background-color:#4169E1;
}
.avatar {
  width: 25px;
  height: 20px;
  border-radius: 50%;
}
.navigation1:hover{
  background-color: none;
}

</style>

<body>
<?php
if(isset($_SESSION['cart']))
  {
      $count=count($_SESSION['cart']);

  }
  else{
      $count=0;
  }
?>
<nav class="navbar navbar-inverse navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BLUE MOON</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="firstpage.php"> Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">  Contact</a>
      </li>
      <li class="nav-item ">
      <a class="nav-link" href="about.php">  About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mycart.php">My Cart(<?php echo $count; ?>)</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right ">
      <li class="nav-item navigation1"><a class="nav-link " href="main_menu.php"> Our Menu</a></li>
      <li class="nav-item"><a href="#" data-toggle="tooltip"title="<?php echo  $_SESSION['username']; ?>"><img src="images.png" alt="Avatar" class="avatar"></a></li>
    </ul>
  </div>
</nav>
<div>
<div class="container">
			<div class="row">
				<div class="col-sm text-center">
                    <BR>
				  <h1 class="div-heading display-4" style="font-size:40px">Contact us</h1>
				</div>
			</div>
            <br>
            <br>
			<div class="row">
				<div class="col-md-6">
					<form action="/programs/contact.php" method="POST">
					  <div class="form-group">
						  <input type="name" name="full_name" id="full_name" class="form-control" id="exampleInputName" placeholder="Your Full Name..." >
					  </div>
                      <br>
            <div class="form-group">
						  <input type="email" name="email" id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email Address...">
					  </div>
                      <br>
					  <div class="form-group">
                      <input type="country" name="country" id="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Country..." >
					  </div>
                      <br>
            <div class="form-group">
              <textarea class="form-control" name="comments"id="comments" aria-label="With textarea" placeholder="Any Comments..."  ></textarea>
            </div>
            <br>
					  <button type="submit"name="submit" class="btn btn-warning btn-sm btn-block">Submit</button>
					</form>
			  </div>
			  <div  class="col-md-6">
          <h5>Address: <small class="text-muted">Nawagarhi,Near Tilha Dharamshala,Gaya,Bihar 823001</small></h5>
          <h5>Email: <small class="text-muted">akankshaa150@gmail.com</small></h5>
          <h5>Contact: <small class="text-muted">+91 628XXXXXXX || +91 930XXXXXXXX</small></h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14423.619122215012!2d86.5320662300979!3d25.340976041270398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f1e9797ee02685%3A0x33dce3f91367f2ae!2z4KSo4KWM4KSF4KSX4KS-4KSw4KWN4KS54KWALCDgpKzgpL_gpLngpL7gpLA!5e0!3m2!1shi!2sin!4v1630775269739!5m2!1shi!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
	  		</div>
        
			</div>
		</div>
</div>
        <br>
        <br>
        <div class="body">
            <a class="logout" href="logout.php">Logout</a>
        </div>

        

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<!--value="<?php echo $comments; ?>" required-->