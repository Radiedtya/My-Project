<?php 

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Tips Coding Slowly',
                'content' => 'lorem ipsum',
            ],
            [
                'title' => 'Tips Coding Fast',
                'content' => 'lorem ipsum',
            ],
        ]);
    }
}
