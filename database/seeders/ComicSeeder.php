<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic; 

class ComicSeeder extends Seeder
{
    public function run()
    {
        
        $comics = include __DIR__.'/comics.php';

        
        foreach ($comics as $comic) {
            Comic::create($comic);
        }
    }
}
