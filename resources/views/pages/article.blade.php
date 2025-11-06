@php
use Illuminate\Support\Str;
@endphp

@extends('layouts.app')
@section('title','Artikel')

@section('content')
  <div class="max-w-7xl mx-auto px-4 py-16">
    <h1 class="text-3xl font-bold mb-8">Artikel Wisata</h1>
    
    @if($articles->count() > 0)
      <div class="grid md:grid-cols-3 gap-8">
        @foreach($articles as $article)
          @include('livewire.components.card-article',[
            'article' => $article,
            'image' => $article->thumbnail_path ? asset('storage/' . $article->thumbnail_path) : '/images/default-article.jpg',
            'title' => $article->title,
            'excerpt' => Str::limit(strip_tags($article->content), 150),
            'slug' => Str::slug($article->title),
            'views' => $article->views,
            'date' => $article->published_at ?? $article->created_at
          ])
        @endforeach
      </div>
      
      <div class="mt-12">
        {{ $articles->links() }}
      </div>
    @else
      <div class="text-center py-16">
        <p class="text-gray-500 text-lg">Belum ada artikel yang dipublikasikan.</p>
      </div>
    @endif
  </div>
@endsection
