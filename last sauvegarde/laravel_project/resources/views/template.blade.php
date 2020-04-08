<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    
        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Griffy&display=swap" rel="stylesheet">
        -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
        <!-- Styles -->
        
    </head>
    <body>

    <nav class="navbar navbar-expand-lg">

<ul class="navbar-nav">
      <li class="active">
          <a href="http://localhost:8000/contact" class="nav-link">Contact</a>
      </li>
      <!--<div id="app">
  <v-app id="inspire">
    <div class="text-center">
      <v-btn class="mx-2" fab dark small color="primary">
        <v-icon dark>mdi-minus</v-icon>
      </v-btn>
      </v-app>
</div>-->
      <li class="nav-item">
            <a href="http://localhost:8000/store" class="nav-link">Store</a>
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
   
    
    <!--exemple de bouton avec plugin VUETIFY
    <div id="app">
  <v-app id="inspire">
    <div class="text-center">
      <v-btn class="mx-2" fab dark small color="primary">
        <v-icon dark>mdi-minus</v-icon>
      </v-btn>
  
      <v-btn class="mx-2" fab dark small color="pink">
        <v-icon dark>mdi-heart</v-icon>
      </v-btn>
  
      <v-btn class="mx-2" fab dark color="indigo">
        <v-icon dark>mdi-plus</v-icon>
      </v-btn>
  
      <v-btn class="mx-2" fab dark color="teal">
        <v-icon dark>mdi-format-list-bulleted-square</v-icon>
      </v-btn>
  
      <v-btn class="mx-2" fab dark large color="cyan">
        <v-icon dark>mdi-pencil</v-icon>
      </v-btn>
  
      <v-btn class="mx-2" fab dark large color="purple">
        <v-icon dark>mdi-android</v-icon>
      </v-btn>
    </div>
  </v-app>
</div>-->
       
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           

@yield('title')
@yield('content')            

    
                <div class="title m-b-md">
                Alternative Vintage Arts & Rock
                </div>
   

    <div id="app">
    <v-app></v-app>
    </div>


            </div>
        </div>
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
