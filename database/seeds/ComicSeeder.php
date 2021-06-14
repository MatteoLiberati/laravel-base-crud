<?php

use App\Comic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_db = config('comicsdb');
        
        foreach($comics_db as $comic_db){
            $new_comic = new Comic();

            $new_comic->name = $comic_db['title'];
            $new_comic->description = $comic_db['description'];
            $new_comic->image = $comic_db['thumb'];
            $new_comic->series = $comic_db['series'];
            $new_comic->sale_date = $comic_db['sale_date'];
            $new_comic->price = $comic_db['price'];
            $new_comic->type = $comic_db['type'];
            $new_comic->slug = Str::slug($new_comic->name);

            $new_comic->save();
        }
    }
}
