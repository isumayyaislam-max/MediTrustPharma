
<?php
$conn = mysqli_connect('localhost','root','','meditrustpharma');





if(isset($_GET['search_text'])){
 $search_text = $_GET['search_text'];
$sql= "SELECT * FROM mymedicine WHERE Name LIKE '$search_text'";
     $query = mysqli_query($conn, $sql);

   if( mysqli_num_rows($query) > 0){
    
     echo "<p><center>Your Medicine is available</center></p>" ;
   }
else{
  echo "<p><center>Sorry, not available now</center></p>";
}
}

?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediTrustPharma</title>
    <!--bootstrap css link-->
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--font awesome link!-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

<!-- css file-->
 <link rel="stylesheet" href ="style.css">
</head>

<body>

<!--Navbar-->
<div class="container-fluid p-0">
<!--first child-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logoPic.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-cart-plus"><sup>1</sup></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price</a>
        </li>
      </ul>
      <form action="<?php $_SERVER['PHP_SELF']?>" METHOD="GET">
        <input type="text" name="search_text">
       
        <input type="submit" value="search" class="btn btn-outline-light">
      </form>
    </div>
  </div>
</nav>

<!--second child-->
<!--third child-->
<div class="bg-success">
<h3 class="text-center">MediTrustPharma</h3>
<p class="text-center">Supporting your journey to health,every step of the way </p>
</div>
<!--fourth child-->
<div class="row">
    <div class="col-md-10">
        <!--products-->
        <div class="row">
<div class="col-md-4 mb-2 ">
<div class="card">
  <img src="./images/Firstaidkit.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">First Aid Products</h5>
    <p class="card-text">Price Range:500-2000 BDT</p>
   <!-- <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-success">view more</a>-->
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
<div class="card">
  <img src="./images/logoPic2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pressure gauge and other home care products</h5>
    <p class="card-text">Price Range:800-12000 BDT</p>
    <!--<a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-success">view more</a>-->
  </div>
</div>
</div>
 
<div class="col-md-4 mb-2">
<div class="card">
  <img src="./images/Babykit.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Baby care products</h5>
    <p class="card-text">Price Range:1500-5000 BDT</p>
   <!-- <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-success">view more</a>-->
  </div>
</div>
</div>

<div class="col-md-4 mb-2">
<div class="card">
  <img src="./images/womens.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Women Care products</h5>
    <p class="card-text">Premium Quality products</p>
    <p class="card-text">Price Range:Depends on what product you are purchasing</p>
   <!-- <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-success">view more</a>-->
  </div>
</div>
</div>

<div class="col-md-4 mb-2">
<div class="card">
  <img src="./images/logoPic1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Medicines</h5>
    <p class="card-text">All common and prescribed medicines</p>
    <p class="card-text">Price Range: Depends on what medicine you want</p>
   <!-- <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-success">view more</a>-->
  </div>
</div>
</div>

<div class="col-md-4 mb-2">
<div class="card">
  <img src="./images/saline.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hospital Products</h5>
    <p class="card-text">All kinds of required products for any health center</p>
    <!--<a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-success">view more</a>-->
  </div>
</div>
</div>

        </div>
    </div>
    <div class="col-md-2 bg-success p-0" >
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Categories of ITEMs</h4></a>
            </li>

            <li class="nav-item ">
                <a href="#" class="nav-link text-light">First Aid Products</a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-light">Home care Products</a>
            </li>

            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Baby Care</a>
            </li>

            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Women's Care</a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-light">Medicines</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Hospital Products</a>
            </li>
        </ul>

    </div>
    
        <!--sidenav-->
    </div>
</div>
<!--last child-->
<!--<div class="bg-info p-3 text-center">
<p>All rights are preserved"</p>
</div>-->


</div>


    
    <!--bootstrap js link-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>