<?php

use App\Produit;
use Illuminate\Database\Seeder;

class ProduistableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit::create(
            [
                'title' => 'Ramones',// 'Nirvana', 'Daniel Johnston',
                //'slug' => 'ramones',
                'subtitle' => 'Acid',
                'realisation' => 'Acid Eaters', //'In Utero', 'Pain',
                'description' => 'First album from Ramones. First punk rock band from New-York',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                'image' => 'https://via.placeholder.com/200x250',//'RAMONES.jpeg', //'in_utero.jpg', 'pain.jpg',
                //'category_id' => '3',// '2', '2',
                'year' => '1976',
                'price' => '25'*100,   
               
                ]
        );

        Produit::create(
            [
                'title' => 'Shellac',// 'Nirvana', 'Daniel Johnston',
                //'slug' => 'shellac',
                'subtitle' => 'shellac',
                'realisation' => '1000hurts', //'In Utero', 'Pain',
                'description' => 'Noise, Post-punk from Chicago',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                'image' => 'https://via.placeholder.com/200x250',//'shellac1.jpeg', //A METTRE EN DB!!!'in_utero.jpg', 'pain.jpg',
                //'category_id' => '3',// '2', '2',
                'year' => '1994',// '1994', '1984',
                'price' => '20'*100,// '16', '19',   
                
                ]

            );

           /* Produit::create(
                [
                    'artist_name' => 'Shellac',// 'Nirvana', 'Daniel Johnston',
                    'product_name' => '1000hurts', //'In Utero', 'Pain',
                    'desc_product' => 'Noise, Post-punk from Chicago',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                    'img_filename' => 'shellac1.jpeg', //'in_utero.jpg', 'pain.jpg',
                    'category_id' => '3',// '2', '2',
                    'year' => '1994',// '1994', '1984',
                    'price_product' => '20',// '16', '19',   
                    
                    ]
    
                );*/
    }
}

 
