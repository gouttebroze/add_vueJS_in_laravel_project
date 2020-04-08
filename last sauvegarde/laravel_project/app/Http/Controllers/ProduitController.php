<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Produit as ProduitRequest;
use App\Produit;

class ProduitController extends Controller
{
    public function index(){

        $produits = Produit::all();
       // dd($produits);
        return view('produits.index')->with('produits', $produits);
    }

    public function show ($name){

        $produit = Produit::where('name', $name)->first;

        return view('produits.show')->with('produit', $produit);
    }
}
