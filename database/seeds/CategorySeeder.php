<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Antipasto',
            'Primo',
            'Secondo',
            'Contorno',
            'Dolce',
        ];
        
        foreach($categories as $category){

            $new_category = new Category;
            $new_category->name = $category;
            $new_category->save();

        }
        
    }
}
