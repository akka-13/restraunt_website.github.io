<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(isset($_POST['add'])){
        if(isset($_SESSION['cart']))
        {
            $my_items=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$my_items))
            {
                echo"<script>alert('Item Already Added');
                window.location.href='main_menu.php';
                </script>";
            }
            else{
                $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['price'],'Quantity=>1');
            echo"<script>alert('Item Added');
                window.location.href='mycart.php';
                </script>";
            
            }

            

        }
        else{
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['price'],'Quantity=>1');
            echo"<script>alert('Item Added');
                window.location.href='mycart.php';
                </script>";
        }

    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key =>$value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                alert('Item Removed');
                window.location.href='mycart.php';
                </script>";

            }
            


        }
    }

}



?>

<html>
    <head>
        <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <title> OUR RESTRAUNT</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"-->
        <title>My cart</title>
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
.topnav {
  text-align: center;
  overflow: hidden;
  background-color: black;
}
.topnav .a .image{
    float:left;


}
.topnav a {
    float:left;
    display:block;
    text-align:center;
    color:#f2f2f2;
    padding:14px 16px ;
    text-decoration:none;
    font-size:17px;
    

}
.topnav img{
    float:right;

}
.topnav a:hover{
    color:white;
   


}
.topnav .icon{
    display:none;

}
@media screen and (max-width:600px){
    .topnav.responsive{position:relative;}
    .topnav.responsive .icon{
        position:absolute;
        right:0;
        text-align:center;
    }
    .topnav.responsive a{
        float:none;
        display:block;
        text-align:center;
    }
    
}
.image{
    float:left;

}
.body{
   

}
.our_menu{
    float:left;
    padding-left: 100px;
    margin-left:800px;
    border:1px solid black;
    border-radius:25px;



}
.title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
.user_name{
    float:left;
    text-height:10px;
    display:inline;
    padding-top:10px;
    margin-top:0px;
    height:10px;
}

            
           
        </style>
 <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border-style:hidden;
}

td, th {
    border-bottom: 1px solid black;
    border-top: 1px solid black;
  text-align: left;
  padding: 8px;
  color: black;
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


<h3 class="title2">Shopping Cart Details</h3>
<div class="container">
    <div class="row">
    
<div class="col-lg-8">
        <table class="table table-striped">
  <thead class="text-center">
    <tr>
      <th scope="row">Serial no.</th>
      <th scope="row">Item Name</th>
      <th scope="row">Price</th>
      <th scope="row">Quantity</th>
      <th scope="row">Total</th>
      <th scope="row"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
        <?php
        $total=0;
        if(isset($_SESSION['cart']))
        {
            foreach($_SESSION['cart'] as $key =>$value)
        {
            $sr=$key+1;
            $total=$total+$value['Price'];
            
            echo"
            <tr>
            <td>$sr</td>
            <td>$value[Item_Name]</td>
            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
            <td><input class='text-center iquantity' type='number' onchange='subtotal()' value=1   min='1' max='20'></td>
            <td class='itotal'></td>
            <td><form method='POST'>
            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>   
            </form></td>
            </tr>
            ";
            
        }
        echo"
            <tr>
            <td></td>
            <td>Total:</td>
            <td> $total</td>
            <td></td>
            <td></td>

            ";

        }
        
        ?>

      
    
  </tbody>
</table>

               
        
    </div>
</div>

<div class="body">
<a class="logout" href="mycart.php">Proceed to Payment</a>
</div>


        
    </body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script>
     var iprice=document.getElementsByClassName('iprice');
     var iquantity=doccument.getElementsByClassName('iquantity');
     var itotal=document.getElementsByClassName('itotal');
     function subtotal(){
         for(i=0;i<iprice.length;i++)
         {
             itotal[i].innerHTML=(iprice[i].value)*(iquantity[i].value);

         }
     }
     subtotal();

 </script>   
    

</html>