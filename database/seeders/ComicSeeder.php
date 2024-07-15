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
            // convertoa rray in stringhe
            if (is_array($comic['artists'])) {
                $comic['artists'] = implode(', ', $comic['artists']);
            }
            if (is_array($comic['writers'])) {
                $comic['writers'] = implode(', ', $comic['writers']);
            }

            Comic::create($comic);
        }
    }
}
