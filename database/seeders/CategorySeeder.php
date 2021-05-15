<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['Pertanian', 'Seni & desain', 'Bisnis & ekonomi', 'Anak-anak', 'Novel', 'Komik', 'Komputer & teknologi', 'Masakan', 'Pendidikan', 'Fiksi & sastra', 'Finansial', 'Sejarah', 'Agama', 'Romance', 'Sains', 'Self improvement'];
        foreach($category as $c) {
            Category::create([
                'name' => $c
            ]);
        }
    }
}
