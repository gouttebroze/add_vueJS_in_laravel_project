<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    Category::create(
        [
            'name' => 'Vinyls',
            

        ]
);

        Category::create(
        [
                'name' => 'CD',
    
    
        ]
);

        Category::create(
            [
                'name' => 'Cassettes',
            
    
            ]
);

        Category::create(
            [
                'name' => 'Livres: Graphzines',
                
        
            ]
);
    }
}
