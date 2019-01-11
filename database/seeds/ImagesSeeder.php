<?php

// use App\Gallery;
// use App\Image;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Galleries::all()->each(function(Galleries $gallery){
            $gallery->images()->saveMany(factory(App\Image::class, 10)->make());
        });
    }
}