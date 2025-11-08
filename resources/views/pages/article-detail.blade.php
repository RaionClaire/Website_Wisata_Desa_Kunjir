@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')
@section('title', $article->title)

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-16 min-h-screen mt-6">
        <div class="grid lg:grid-cols-3 gap-8">
            <article class="lg:col-span-2">

                @if ($article->thumbnail_path)
                    <img src="{{ asset('storage/' . $article->thumbnail_path) }}" alt="{{ $article->title }}"
                        class="w-full h-96 object-cover rounded-2xl mb-6 mt-8">
                @endif

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

                @include('livewire.components.tagline-badge', ['article' => $article])

                <h1 class="text-4xl font-bold mb-6">{{ $article->title }}</h1>

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

                <div
                    class="prose prose-sm md:prose-base lg:prose-lg max-w-none text-gray-800 leading-loose
                        prose-h2:font-display prose-h2:font-bold prose-h2:text-3xl prose-h2:my-3 prose-p:my-6 font-sans mb-8">
                    {!! $article->content !!}
                </div>
            </article>

            @include('livewire.components.newest-article', ['excludeId' => $article->id])
        </div>
    </div>
@endsection
