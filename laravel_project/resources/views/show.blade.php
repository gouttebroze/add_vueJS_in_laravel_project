@extends('template4')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-product_name">Album : {{ $product->product_name }}</p>
        </header>
        <div class="card-content">
            <div class="content">

                <p>Année de sortie : {{ $product->year }}</p>
                <p>Catégorie : {{ $category }}</p>

                <p>Description : {{ $product->desc_product }}</p>
                <hr>
                <p> {{ $product->img_filename }} </p>
                <hr>
                <p> {{ $product->category_id }} </p>
            </div>
        </div>
    </div>
@endsection
