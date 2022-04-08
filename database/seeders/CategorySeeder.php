<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Ages 8-9','Ages 10-11','Ages 12-13'];
        foreach ($categories as $category){
            DB::table('categories')->insert([
                'category_name'=>$category,
                'slug'=> Str::slug($category),
                'created_at'=>now(),
                'updated_at'=>now()

            ]);
        }
    }
}
