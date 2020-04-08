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
    <link href="https://fonts.googleapis.com/css?family=Griffy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg">

<ul class="navbar-nav">
      <li class="active">
          <a href="http://localhost:8000/contact" class="nav-link">Contact</a>
      </li>

      <li class="nav-item">
            <a href="http://localhost:8000/products" class="nav-link">Products</a>
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
          <a href="cartController.php" class="nav-link">Panier</a>
      </li>

        
    </ul>

</nav>

<!--Puis, j'affiche le nombre d'article acheter sur la page products
grâce au package Soppingcart, 

!!!A FAIRE:IL FAUT QUE JE RAJOUTE LA ROUTE A LA PLACE DU "#"!!!-->

<a class="text-muted" href="#"> Panier <span class="badge badge-pile badge-dark">{{ Cart::count() }}

</span></a>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<header class="page-header">
                    
                        
    <h1 class="h1">Alternative Vintage Disc, Art's & Rock</h1>
                
    <h2 class=".h2">Vente de Vinyls, CD, Cassettes, Graphzines</h2>

    <a href="panierController.php"><img src="uploads/shopping-cart-solid.svg" alt="go to Basket" style=width:30px height=30px title= "go to basket"></a>
                    
    <!--<img src="{{ asset('uploads/image.jpeg') }}" alt="Mon entreprise Inc." title="Mon entreprise Inc.">--> 
    <!--on va faire un include de notre formulaire de recherche 
    de produits ('products.search')-->
    @include('partials.search')
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