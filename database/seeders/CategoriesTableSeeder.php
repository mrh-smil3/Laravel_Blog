<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // Hapus data category yang ada sebelumnya (jika ada)
        DB::table('categories')->truncate();
        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        // Insert beberapa contoh kategori
        DB::table('categories')->insert([
            [
                'name' => 'Teknologi',
                'slug' => Str::slug('Teknologi'),
                'description' => 'Kategori tentang teknologi',
                'parent_id' => null,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bisnis',
                'slug' => Str::slug('Bisnis'),
                'description' => 'Kategori tentang bisnis',
                'parent_id' => null,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Olahraga',
                'slug' => Str::slug('Olahraga'),
                'description' => 'Kategori tentang olahraga',
                'parent_id' => null,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kesehatan',
                'slug' => Str::slug('Kesehatan'),
                'description' => 'Kategori tentang kesehatan',
                'parent_id' => null,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wisata',
                'slug' => Str::slug('Wisata'),
                'description' => 'Kategori tentang wisata',
                'parent_id' => null,
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
