<?php
namespace Database\Seeders;

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
        $this->call(CreateRolesKadrAndFin::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LaratrustSeeder::class);
        //$this->call(NewsSeeder::class);
        //$this->call(PostsSeeder::class);
        //$this->call(FormsSeeder::class);
        //$this->call(SomeModelsTableSeeder::class);
    }

}
