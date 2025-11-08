@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')
@section('title', 'Artikel')

@section('content')
    <section class="max-w-7xl mx-auto px-4 md:px-6 py-16">

        <div class="mb-14 mt-5">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
                Artikel Desa Kunjir
            </h1>
        </div>

        @if ($articles->count() > 0)

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($articles as $article)
                    @include('livewire.components.card-article', [
                        'article' => $article,
                        'image' => $article->thumbnail_path
                            ? asset('storage/' . $article->thumbnail_path)
                            : '/images/default-article.jpg',
                        'title' => $article->title,
                        'excerpt' => Str::limit(strip_tags(Str::markdown($article->content)), 150),
                        'slug' => Str::slug($article->title),
                        'views' => $article->views,
                        'date' => $article->published_at ?? $article->created_at,
                    ])
                @endforeach
            </div>

            <div class="mt-16 flex justify-center">
                {{ $articles->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <div class="text-gray-400 text-7xl mb-4">📰</div>
                <h2 class="text-2xl font-semibold text-gray-700 mb-2">Belum Ada Artikel</h2>
                <p class="text-gray-500 text-lg">
                    Kami sedang menyiapkan konten menarik seputar wisata, budaya, dan potensi Desa Kunjir.
                </p>
            </div>
        @endif
    </section>
@endsection
