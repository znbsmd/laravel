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
//         $this->call(UsersTableSeeder::class);
        factory(App\ArticleList::class, 50)->create()->each(function ($u) {
            $u->ArticleList()->save(factory(App\ArticleList::class)->make());
        });
    }
}
