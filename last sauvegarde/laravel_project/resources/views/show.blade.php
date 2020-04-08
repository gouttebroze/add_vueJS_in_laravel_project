@extends('template4')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-product_name">Album : {{ $product->product_name }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Support : {{ $category }}</p>
                <hr>
                <p>Artiste : {{ $product->artist_name }}</p>
                <hr>
                <p>Oeuvre : {{ $product->product_name }}</p>
                <hr>
                <p>Année de sortie : {{ $product->year }}</p>
                <hr>
                <p>{{ $product->desc_product }}</p>
                <hr>
                

                
                <p> {{ $product->image }} </p>
                <img src="{{ asset('uploads/'.$product->image) }}">
                
                <img src="{{ asset('storage/uploads/'.$product->image)}}" style="width:100%"/>
               
                   
                <hr>
                <p>Prix : {{ $product->price_product }}</p>
                <hr>

                <!--Package Shopingcart-->
                <form action="{{ route('cart.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value=" {{ $product->id }}">
                    <!--<input type="hidden" name="product_name" value=" {{ $product->product_name }}">
                    <input type="hidden" name="price_product" value=" {{ $product->price_product }}">-->

                    <!--on place ces trois ressources dans notre fontions $product-->
                    
                    <button type="submit" class="btn btn-dark">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </div>
@endsection
