<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // Hapus data post yang ada sebelumnya (jika ada)
        DB::table('posts')->truncate();
        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        // Insert beberapa contoh post
        DB::table('posts')->insert([
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Pengenalan Teknologi Baru',
                'slug' => Str::slug('Pengenalan Teknologi Baru'),
                'content' => 'Ini adalah konten dari post tentang pengenalan teknologi baru.',
                'image' => 'image1.jpg',
                'published' => true,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'user_id' => 2,
                'title' => 'Tips Sukses Berbisnis',
                'slug' => Str::slug('Tips Sukses Berbisnis'),
                'content' => 'Ini adalah konten dari post tentang tips sukses berbisnis.',
                'image' => 'image2.jpg',
                'published' => true,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'user_id' => 3,
                'title' => 'Manfaat Olahraga Rutin',
                'slug' => Str::slug('Manfaat Olahraga Rutin'),
                'content' => 'Ini adalah konten dari post tentang manfaat olahraga rutin.',
                'image' => 'image3.jpg',
                'published' => true,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
