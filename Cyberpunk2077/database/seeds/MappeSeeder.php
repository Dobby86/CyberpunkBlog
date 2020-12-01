<?php
use App\Mappa;

use Illuminate\Database\Seeder;

class MappeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Mappa::class, 5) -> create();
    }
}
