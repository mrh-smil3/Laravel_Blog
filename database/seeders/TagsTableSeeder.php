<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // Hapus data tag yang ada sebelumnya (jika ada)
        DB::table('tags')->truncate();
        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        // Insert beberapa contoh tag
        DB::table('tags')->insert([
            [
                'name' => 'Teknologi',
                'slug' => Str::slug('Teknologi'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bisnis',
                'slug' => Str::slug('Bisnis'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Olahraga',
                'slug' => Str::slug('Olahraga'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kesehatan',
                'slug' => Str::slug('Kesehatan'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wisata',
                'slug' => Str::slug('Wisata'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
