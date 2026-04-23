<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        $featuredArticles = Article::latest()->take(2)->get();
        return view('public_blog_home', compact('articles', 'featuredArticles'));
    }

    public function create()
    {
        return view('create_article');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Article::create($validated);

        return redirect()->route('dashboard')->with('success', 'Article created successfully');
    }

    public function show(Article $article)
    {
        return view('article_detail', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('edit_article', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $article->update($validated);

        return redirect()->route('dashboard')->with('success', 'Article updated successfully');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('dashboard')->with('success', 'Article deleted successfully');
    }
}
