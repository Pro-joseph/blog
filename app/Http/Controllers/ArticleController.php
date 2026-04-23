<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $validated['user_id'] = Auth::id();
        $validated['published'] = $request->has('published');
        Article::create($validated);

        return redirect()->route('dashboard')->with('success', 'Article created successfully');
    }

    public function autosave(Request $request)
    {
        $articleId = $request->input('article_id');
        
        $data = [
            'user_id' => Auth::id(),
            'title' => $request->input('title', ''),
            'content' => $request->input('content', ''),
            'category_id' => $request->input('category_id'),
            'published' => false,
        ];

        if ($articleId) {
            $article = Article::find($articleId);
            if ($article && $article->user_id === Auth::id()) {
                $article->update($data);
                return response()->json([
                    'success' => true,
                    'article_id' => $article->id,
                    'saved_at' => now()->format('g:i A')
                ]);
            }
        }

        $article = Article::create($data);
        return response()->json([
            'success' => true,
            'article_id' => $article->id,
            'saved_at' => now()->format('g:i A')
        ]);
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

        $validated['published'] = $request->has('published');
        $article->update($validated);

        return redirect()->route('dashboard')->with('success', 'Article updated successfully');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('dashboard')->with('success', 'Article deleted successfully');
    }
}