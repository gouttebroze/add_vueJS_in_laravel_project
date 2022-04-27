<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'price','image', 'year', 'category_id'];

    public function getPrice(){
        //diviser prix, $this->price, stocke ds var $price
        $price = $this->price / 100;
        //retour fonction de formatage (prix + nbre décimales)
        return number_format($price, 2, ',',' ') . ' €';
    }
}
