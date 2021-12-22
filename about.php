<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<html>
    <head>
    <title>About Page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
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


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}



.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.social_media {
  display: inline-block;
  padding: 0 5px;
  margin: 0;
}
.atag{
    
    text-decoration: none;
    color:white;
    background-color: #000;
    text-align:center;
    padding:8px;
    width:100%;
    cursor:pointer;

}
.atag:hover{
    background-color:gray;
    color:white;
    text-decoration:none;
}
</style>
</head>
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

<div class="about-section">
  <h1>About Us Page</h1>
  <p></p>
  <p></p>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="akka.jpeg" alt="akka" width="225" height="225">
      <div class="container">
        <h2>Akanksha</h2>
        <p class="title">Web Developer</p>
        <p>Hey folks,I am akanksha and i am interested in web develpment.</p>
        <p>akankshaa150@gmail.com</p>
        <p><a class="atag" href="mailto:akankshaa150@gmail.com">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="ankita.jpeg" alt="ankita" width="225" height="225">
      <div class="container">
        <h2>Ankita Sinha</h2>
        <p class="title">Web Developer</p>
        <p>Hey folks,I am ankita and i am interested in web develpment.</p>
        <p>me10iamas@gmail.com</p>
        <p><a class="atag" href="mailto:akankshaa150@gmail.com">Contact</a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="tanuja.jpeg" alt="tanuja" width="225" height="225">
      <div class="container">
        <h2>Tanuja Patel</h2>
        <p class="title">Web Developer</p>
        <p>Hey folks,I am tanuja and i am interested in web develpment.</p>
        <p>tanujapatel@example.com</p>
        <p><a class="atag" href="mailto:akankshaa150@gmail.com">Contact</a></p>
      </div>
    </div>
  </div>
</div>
<ul class="social-networks">
            <li class="social_media"><a href=""><img src="https://i.imgur.com/7k6PAPj.png" alt="facebook icon" height="48"></a></li>
            <li  class="social_media"><a href=""><img src="https://i.imgur.com/70vkuLH.png" alt="twitter icon" height="48"></a></li>
            <li  class="social_media"><a href=""><img src="https://i.imgur.com/6UfUwAm.png" alt="google+ icon" height="48"></a></li>
          </ul><!-- end social-networks -->
</div>


<div class="body">
    <a class="logout" href="logout.php">Logout</a>
</div>

</body>
</html>
