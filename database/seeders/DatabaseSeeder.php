<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $categories = [
            ['name' => 'Systems Architecture', 'slug' => 'systems-architecture'],
            ['name' => 'Frontend Engineering', 'slug' => 'frontend-engineering'],
            ['name' => 'Database Theory', 'slug' => 'database-theory'],
            ['name' => 'Applied Cryptography', 'slug' => 'applied-cryptography'],
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }

        $articles = [
            [
                'title' => 'Architecting Resilience in Distributed Systems',
                'content' => '<p>Building resilient distributed systems requires careful consideration of failure modes, consistency patterns, and recovery strategies.</p><p>In this article, we explore the fundamental principles that make systems truly resilient.</p>',
                'category_id' => 1,
                'published' => true,
            ],
            [
                'title' => 'The Modern Frontend Pipeline',
                'content' => '<p>Modern frontend development has evolved significantly. From webpack to Vite, from REST to GraphQL.</p><p>Let us dive into the tools and patterns that define the current landscape.</p>',
                'category_id' => 2,
                'published' => true,
            ],
            [
                'title' => 'Understanding Database Indexing',
                'content' => '<p>Indexes are the backbone of database performance. Understanding B-trees, Hash indexes, and GIN indexes is crucial.</p><p>This guide covers everything you need to know about indexing strategies.</p>',
                'category_id' => 3,
                'published' => true,
            ],
            [
                'title' => 'Introduction to Cryptographic Protocols',
                'content' => '<p>Cryptography is essential for modern security. Learn the basics of encryption, hashing, and digital signatures.</p>',
                'category_id' => 4,
                'published' => false,
            ],
        ];

        foreach ($articles as $article) {
            Article::create(array_merge($article, ['user_id' => $user->id]));
        }
    }
}