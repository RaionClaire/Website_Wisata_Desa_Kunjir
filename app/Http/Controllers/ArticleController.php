<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use GrahamCampbell\Markdown\Facades\Markdown;

class ArticleController extends Controller
{
    public function index(Request $req)
    {
        $articles = Article::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        
        return view('pages.article', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('status', 'published')
            ->get()
            ->first(function ($item) use ($slug) {
                return Str::slug($item->title) === $slug;
            });

        if (!$article) {
            abort(404);
        }

        $ip = request()->ip();
        $cacheKey = 'viewed_' . $article->id . '_' . $ip;

        if (!cache()->has($cacheKey)) {
            $article->increment('views');
            cache()->put($cacheKey, true, now()->addHours(1));
        }

        $latest = Article::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        
        $article->content = Markdown::convertToHtml($article->content);

        return view('pages.article-detail', compact('article', 'latest'));
    }
}
