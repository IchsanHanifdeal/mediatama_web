<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        DB::table('author')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@email.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@email.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('artikel')->insert([
            [
                'title' => 'Laravel for Beginners',
                'content' => 'A beginners guide to Laravel 1',
                'author_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PHP for beginner user',
                'content' => 'Advanced PHP Programming',
                'author_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Introduction to MVC',
                'content' => 'Basic MVC concepts in PHP',
                'author_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('category')->insert([
            [
                'name' => 'Programming',
            ],
            [
                'name' => 'Technology',
            ],
            [
                'name' => 'Framework',
            ],
        ]);

        DB::table('tag')->insert([
            [
                'name' => 'Laravel',
            ],
            [
                'name' => 'PHP',
            ],
            [
                'name' => 'Code Igniter',
            ],
        ]);
    }
}
