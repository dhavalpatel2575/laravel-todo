<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;



class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Todo::class, 10)->create();
    }
}
