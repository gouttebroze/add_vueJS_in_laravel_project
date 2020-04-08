@extends('template_produits')

@section('content')
  
    @foreach($produits as $produit)
      <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">A Définir</strong>
                <h5 class="mb-0"> {{ $produit->title }}</h5>
                <div class="mb-1 text-muted">{{ $produit->created_at }}</div>
                <p class="card-text mb-auto">{{ $produit->realisation }}</p>
                <p class="card-text mb-auto">{{ $produit->getPrice() }}</p>
                <a href="{{ route('produits.show', $produit->subtitle) }}" class="stretched-link btn btn-info">voir !</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="{{ $produit->image }}" alt="">
              </div>
            </div>
      </div>
    @endforeach
    

@endsection
    
    

