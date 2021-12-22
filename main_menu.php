<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
require_once('db.php');

?>

<html>
    <head>
    <head>
    <title>Main Menu</title>
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


           
            .sidenav{
            height:100%;
            width:0;
            position:fixed;
            z-index:1;
            top:0;
            left:0;
            background-color:#111;
            overflow-x:hidden;
            padding-top:60px;
            transition:0.5s;
        }
        .sidenav a{
            padding:8px 8px 8px 32px;
            text-decoration:none;
            font-size:25px;
            display:block;
            transition:0.3s;
        }
        .sidenav a:hover{
            color:#f1f1f1;
        }
        .sidenav .closebtn{
            top:0;
            right:25px;
            position:absolute;
            margin-left:50px;
            font-size:36px;
        }
        table, th, td {
  border: 1px solid black;
  border-left:none;
  border-right:none;
  padding:15px;

  border-collapse: collapse;
  color:white;
  border-color:white;



}
.search-container{
    float:right;
    padding-right: 250px;
    cursor:pointer;
    border:none;
    padding-top:10 px


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
.main_menu{
  
    background-repeat:no-repeat;

}
.main_men{
  
    padding:30px;
    padding-left:700px;
    background-repeat:no-repeat;
    width:100%;
    background-size:100% 100%;
}
.button1{
  border:1px solid black;
  outline:none;
  background-color:#e6001a;
  cursor:pointer;
  padding:5px 3px 1px 1px;
  padding-bottom:-50px;
  padding-top:0px;
  margin-top:3px;
  width:100;
  border:none;
  background-image: radial-gradient(maroon,red 80%,maroon);
  animation-name:cart;
  animation-duration:4s;


}

.btn{
  border:1px solid #ddd;
  outline:none;
  padding:12px 16px;
  background-color:white;
  cursor:pointer;

}
.btn:hover{
  background-color:#ddd;
}
.btn.active{
  color:white;
  background-color:#666;
}
.show{
  display:block;
}
.coloumn{
  float:left;
  width:25%;
  

}
.row{
  margin:10px -16px;
}
.row,
.row > .coloumn{
  padding:10px;
}
.row:after{
  content:"";
  display:table;
  clear:both;
}
.content{
  background-color:#ddd;
  padding:10px
}
.button{
  float:left;
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
<div class="main_men">
    <h1 >Featured Food</h1>
    
</div>

<div class="main">

<div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')">Show All</button>
    <button class="btn" onclick="filterSelection('indian')">Indian</button>
    <button class="btn" onclick="filterSelection('chinese')">Chinese</button>
    <button class="btn" onclick="filterSelection('pizzas')">Pizza</button>
</div>
<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-4 ">
      <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="dosa23.jpg" width="10px" height="100" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Dosa</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$90</s></small>
              <span class="price" value="<?php echo $price; ?>">$110</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Dosa">
            <input type="hidden" name="price" value="110">
          </div>
        </div> 
      </form>
    </div>
    <div class="col-md-3 col-sm-4 ">
    <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="iddli23.jpg" width="10px" height="100" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Iddli</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$64</s></small>
              <span class="price" value="<?php echo $price; ?>">$60</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Iddli">
            <input type="hidden" name="price" value="60">
          </div>
        </div> 
      </form>
      
    </div>
    <div class="col-md-3 col-sm-4 ">
    <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="chole_bhature23.jpg" width="10px" height="100" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Chole Bhature</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$70</s></small>
              <span class="price" value="<?php echo $price; ?>">$85</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Chole Bhature">
            <input type="hidden" name="price" value="85">
          </div>
        </div> 
      </form>
      
    </div>
    <div class="col-md-3 col-sm-4">
    <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="pannernan.jpg" width="10px" height="300" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Butter Panner with Nan</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$185</s></small>
              <span class="price" value="<?php echo $price; ?>">$170</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Butter Panner with Nan">
            <input type="hidden" name="price" value="170">
          </div>
        </div> 
      </form>
      
    </div>
  </div>  
</div>




<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-4 ">
      <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="noodles23.jpg" width="10px" height="100" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Noodles</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$90</s></small>
              <span class="price" value="<?php echo $price; ?>">$100</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Noodles">
            <input type="hidden" name="price" value="100">
          </div>
        </div> 
      </form>
    </div>
    <div class="col-md-3 col-sm-4 ">
    <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="manchurian23.jpg" width="10px" height="100" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Manchurian</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$110</s></small>
              <span class="price" value="<?php echo $price; ?>">$125</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Manchurian">
            <input type="hidden" name="price" value="125">
          </div>
        </div> 
      </form>
      
    </div>
    <div class="col-md-3 col-sm-4 ">
    <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="sprin_roll.jpg" width="10px" height="100" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Spring Roll</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$30</s></small>
              <span class="price" value="<?php echo $price; ?>">$40</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Spring Roll">
            <input type="hidden" name="price" value="40">
          </div>
        </div> 
      </form>
      
    </div>
    <div class="col-md-3 col-sm-4">
    <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="pannerchilli23.jpg" width="10px" height="300" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Panner Chilli</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$120</s></small>
              <span class="price" value="<?php echo $price; ?>">$150</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Panner Chilli">
            <input type="hidden" name="price" value="150">
          </div>
        </div> 
      </form>
      
    </div>
  </div>  
</div>




<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-4 ">
      <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="pizza_onion.jpg" width="10px" height="100" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body"> 
            <h5 class="card-title" value="<?php echo $item_name; ?>">Onion Pizza</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$89</s></small>
              <span class="price" value="<?php echo $price; ?>">$110</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Onion Pizza">
            <input type="hidden" name="price" value="110">
          </div>
        </div> 
      </form>
    </div>
    <div class="col-md-3 col-sm-4 ">
    <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="pizza_panner.jpg" width="10px" height="100" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Paneer Pizza</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$110</s></small>
              <span class="price" value="<?php echo $price; ?>">$115</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Paneer Pizza">
            <input type="hidden" name="price" value="115">
          </div>
        </div> 
      </form>
      
    </div>
    <div class="col-md-3 col-sm-4 ">
    <form action="mycart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="pizza_cheese.jpg" width="10px" height="100" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title" value="<?php echo $item_name; ?>">Cheese Pizza</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$99</s></small>
              <span class="price" value="<?php echo $price; ?>">$105</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Cheese pizza">
            <input type="hidden" name="price" value="105">
            
          </div>
        </div> 
      </form>
      
    </div>
    <div class="col-md-3 col-sm-4">
    <form action="manage_cart.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="pizza_corn.jpg" width="10px" height="300" alt="image" style="width:100%" class="img-fluid card-img-top"> 
          </div> 
          <div class="card-body">
            <h5 class="card-title"value="<?php echo $item_name; ?>">Corn Pizza</h5>
            <h6>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>

            </h6>
            <h5>
              <small><s class="text-secondary">$125</s></small>
              <span class="price" value="<?php echo $price; ?>">$110</span>
            </h5> 
            <button type="submit" class="btn btn-outline-info" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="Item_Name" value="Corn Pizza">
            <input type="hidden" name="price" value="110">
          </div>
        </div> 
      </form>
      
    </div>
  </div>  
</div>


<div class="body">
        
        
    <a class="logout" href="logout.php">Logout</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
  filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("coloumn");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}



</script>





        
    </body> 
    
  

</html>