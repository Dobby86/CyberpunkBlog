<?php
use App\Personaggi;

use Illuminate\Database\Seeder;

class PersonaggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Personaggi::class, 5) -> create();
    }
}
