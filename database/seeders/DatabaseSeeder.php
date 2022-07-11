<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        User::create([
            'name' => 'Admin',
            'username' => 'admin123',
            'email' => 'admin@gmsil.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'furniture'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Meja klasik mewah',
            'slug' => 'meja-klasik-mewah',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic adipisci ut iure nesciunt neque doloremque dolor, odio est officia dignissimos officiis tempora assumenda laborum doloribus consequuntur tempore. Blanditiis, tempora a!'
        ]);
    }
}