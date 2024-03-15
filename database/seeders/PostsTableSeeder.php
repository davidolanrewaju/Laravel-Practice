<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Post One',
                'description' => 'Summary of Post One',
                'body' => 'Body of Post One',
                'image_path' => '',
                'is_published' => false,
                'min_to_read' => 2
            ],
            [
                'title' => 'Post Two',
                'description' => 'Summary of Post Two',
                'body' => 'Body of Post Two',
                'image_path' => '',
                'is_published' => true,
                'min_to_read' => 1
            ]
        ];

        foreach ($posts as $key => $value) {
            Post::create($value);
        }
    }
}
