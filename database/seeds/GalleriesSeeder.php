<?php

// use App\Gallery;
use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Galleries::class, 40)->create();
    }
}


