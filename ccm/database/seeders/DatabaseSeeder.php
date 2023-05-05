<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        $zon=User::factory()->create([
            'name'=>'zon',
            'username'=>'zon'
        ]);
        $pwint=User::factory()->create([
            'name'=>'pwint',
            'username'=>'pwint'
        ]);
        $frontend=Category::factory()->create([
            'name'=>'frontend',
            'slug'=>'frontend'
        ]);
        $backend=Category::factory()->create([
            'name'=>'backend',
            'slug'=>'backend'
        ]);
        Blog::factory(2)->create(['category_id'=>$frontend->id,'user_id'=>$zon->id]);
        Blog::factory(2)->create(['category_id'=>$backend->id,'user_id'=>$pwint->id]);
    }
}
