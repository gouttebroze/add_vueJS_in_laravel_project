<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    @yield('css')

    <style>
        header{

text-align: center; 
border-radius: 20px;
border: 3px solid black;
font-size: 15px;
padding: 0 50px 4px 50px;
font-family: 'Indie Flower', cursive;
color: rgb(187, 175, 10);
background-image:url(../images/images.jpeg);
background-repeat:no-repeat;
background-size: cover;

}

footer{
text-align: center;
}


nav{
font-family: 'Indie Flower', cursive;
}


body
{
width: 85%;
margin: 0 auto;
background-color: grey;
padding: 0 20px 20px 20px;
border-radius: 15px;

}

html{

background-image:url(../images/serveimage2.jpeg);
background-repeat:no-repeat;
background-size: cover;
}



.navbar-nav .nav-link {

color:rgba(237, 241, 11, 0.959);
font-weight:bold;
font-size:18px;
}

.navbar-nav .active > .nav-link{

width:100%;
height:51px;

border-bottom: .25rem solid transparent;
border-bottom-color: #ed4137;

}







.card-body{
font-family: 'Indie Flower', cursive;
}

h1{
color:white;
font-family: 'Indie Flower', cursive;

}

    </style>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg">

<ul class="navbar-nav">
      <li class="active">
          <a href="usersController.php" class="nav-link">Home</a>
      </li>

      <li class="nav-item">
            <a href="usersController.php" class="nav-link">Connexion</a>
      </li>

      <li class="nav-item">
          <a href="productsController.php" class="nav-link">Vinyls</a>
      </li>
        
      <li class="nav-item">
          <a href="productsController.php" class="nav-link">CDs</a>
      </li>

      <li class="nav-item">
          <a href="productsController.php" class="nav-link">Graphzines</a>
      </li>
            
      <li class="nav-item">
          <a href="panierslug">
          <a href="paiement.html" class="nav-link">Paiement</a>
      </li>

        
    </ul>

</nav>

<header class="page-header">
                    
                        
    <h1 class=".h1">Alternative Vintage Disc</h1>
                
    <h2 class="h2">Vente de vinyls, CD et Graphzines</h2>

    <a href="panierController.php"><img src="images/shopping-cart-solid.svg" alt="go to Basket" style=width:30px height=30px title= "go to basket"></a>
                    
                   
</header><br> 

    <main class="section">
        <div class="container">
            @yield('content')
        </div>
    </main>

    
    <!--<div class="card-group">
                      <div class="card">
                          <img class="card-img-top" src="images/RAMONES-Mondo-Bizzaro.jpg" alt="Card image" title="RAMONES Mondo Bizzaro (band from New-York)">
                          <div class="card-body">
                              <h4 class="card-title">RAMONES</h4>
                              <p class="card-text">Album: Mondo Bizzaro</p>
                              <p class="card-text">Année: 1992</p>
                              <p class="card-text">Genre: Rock</p>
                              <p class="card-text">Style: Rock & roll, Punk</p>
                              
                              
                              <a href="panier.html" class="btn btn-dark">Buy for 10€</a><!-- on met la class button -->
                         <!-- </div>
                      </div>
    </div>-->


  </body>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>