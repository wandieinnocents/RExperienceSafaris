<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(Backpack\NewsCRUD\app\Models\Article::class, 1031)->create();
        // factory(App\Models\Accomodation::class, 20)->create();
        factory(App\Models\Transport::class, 20)->create();
    }
}
