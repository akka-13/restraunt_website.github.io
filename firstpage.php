<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<html>
    <head>
    <title>First Page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
            body{
                margin:0;
                font-family: Arial, Helvetica, sans-serif;
            }
* {box-sizing: border-box;}


           
          

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

*
{
    
    margin: 0;
    padding: 0;
}


.row
{
    max-width: 1140px;
    margin: 0 auto;
}

body
{
    font-family: tahoma;
}

.hero
{
    position:absolute;
    width: 1140px;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

body
{
    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(https://images.pexels.com/photos/684965/pexels-photo-684965.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
    height: 100vh;
    background-position: center;
    background-size: cover;
}

h1
{
    color:white;
    font-size: 60px;
}

.main-nav
{
    list-style: none;
    float: right;
    margin-right: -150px;
    margin-top: 30px;
}



.logo img
{
    float:left;
    height: 100px;
    margin-top: 30px;
    margin-left: -150px;
    
}

.btn
{
    border: 1px solid #e67e22;
    padding: 10px 30px;
    color: #e67e22;
    text-decoration: none;
    border-radius: 12px;
    margin-right: 15px;
}

.button-awesome
{
    margin-top: 40px;

}

.btn-half:hover
{
    background-color: #e67e22;
    color: white;
    transition: all 0.5s ease-in;
}

.btn-full:hover
{
    background-color: #e67e22;
    color: white;
    transition: all 0.5s ease-in;
}

            
           
        </style>
    </head>
    <body >
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
<header>
        
        <div class="row">
            
            <div class="logo">
            
            <img src="https://cdn3.iconfinder.com/data/icons/outline-amenities-icon-set/64/Food-512.png">
            
            </div>
        
        
        
        </div>
    <div class="hero">
        <h1>BLUE MOON</h1>
        <div class="button-awesome">
        <a href="about.php" class="btn btn-half">Show me more</a>
        <a href="logout.php" class="btn btn-full">Take Out</a>
        </div>
        </div>
        
    
    </header>


        
    </body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     
</html>