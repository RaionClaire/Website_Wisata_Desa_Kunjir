@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')
@section('title', $article->title)

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-16 min-h-screen">
        <div class="grid lg:grid-cols-3 gap-8">
            {{-- Main Article Content --}}
            <article class="lg:col-span-2">
                {{-- Thumbnail --}}
                @if ($article->thumbnail_path)
                    <img src="{{ asset('storage/' . $article->thumbnail_path) }}" alt="{{ $article->title }}"
                        class="w-full h-96 object-cover rounded-2xl mb-6">
                @endif
                {{-- Meta Information --}}
                <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                    @if ($article->author)
                        <span class="font-medium">{{ $article->author }}</span>
                        <span>•</span>
                    @endif
                    <time datetime="{{ $article->published_at ?? $article->created_at }}">
                        {{ ($article->published_at ?? $article->created_at)->format('d F Y') }}
                    </time>
                    <span>•</span>
                    <span>{{ $article->views }} views</span>
                </div>

                {{-- Title --}}
                <h1 class="text-4xl font-bold mb-6">{{ $article->title }}</h1>

                {{-- Video (if exists) --}}
                @if ($article->video_url)
                    <div class="mb-6">
                        <div class="aspect-video rounded-2xl overflow-hidden bg-gray-200">
                            @if (Str::contains($article->video_url, 'youtube.com') || Str::contains($article->video_url, 'youtu.be'))
                                @php
                                    $videoId = null;
                                    if (Str::contains($article->video_url, 'youtube.com')) {
                                        parse_str(parse_url($article->video_url, PHP_URL_QUERY), $query);
                                        $videoId = $query['v'] ?? null;
                                    } elseif (Str::contains($article->video_url, 'youtu.be')) {
                                        $videoId = basename(parse_url($article->video_url, PHP_URL_PATH));
                                    }
                                @endphp
                                @if ($videoId)
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $videoId }}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                @endif
                            @else
                                <video controls class="w-full h-full">
                                    <source src="{{ $article->video_url }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </div>
                    </div>
                @endif

                {{-- Content --}}
                <div class="prose prose-lg max-w-none">
                    {!! $article->content !!}
                </div>
            </article>

            {{-- Sidebar - Latest Articles --}}
            <aside class="lg:col-span-1">
                <div class="sticky top-24">
                    <h3 class="text-xl font-bold mb-4">Artikel Terbaru</h3>
                    <div class="space-y-4">
                        @foreach ($latest as $latestArticle)
                            @if ($latestArticle->id !== $article->id)
                                <a href="{{ route('articles.show', Str::slug($latestArticle->title)) }}"
                                    class="block group">
                                    <div class="flex gap-3">
                                        @if ($latestArticle->thumbnail_path)
                                            <img src="{{ asset('storage/' . $latestArticle->thumbnail_path) }}"
                                                alt="{{ $latestArticle->title }}"
                                                class="w-20 h-20 object-cover rounded-lg flex-shrink-0">
                                        @endif
                                        <div class="flex-1">
                                            <h4
                                                class="font-semibold text-sm group-hover:text-green-700 transition line-clamp-2">
                                                {{ $latestArticle->title }}
                                            </h4>
                                            <p class="text-xs text-gray-500 mt-1">
                                                {{ ($latestArticle->published_at ?? $latestArticle->created_at)->format('d M Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('articles.index') }}"
                            class="block text-center bg-green-700 text-white py-2 px-4 rounded-lg hover:bg-green-800 transition">
                            Lihat Semua Artikel
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection
