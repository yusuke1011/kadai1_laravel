<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        factory(App\Models\Mst_prefecture::class, 100)->create();
    }
}
