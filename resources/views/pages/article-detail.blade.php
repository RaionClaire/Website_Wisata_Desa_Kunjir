@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')
@section('title', $article->title)

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8 md:py-16 min-h-screen mt-6">
        <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">

            <article class="lg:col-span-2">
                @if ($article->thumbnail_path)
                    <div class="relative group mb-6 mt-8">
                        <img src="{{ asset('storage/' . $article->thumbnail_path) }}" alt="{{ $article->title }}"
                            class="w-full h-96 object-cover rounded-2xl transition-transform duration-300 group-hover:scale-[1.02]">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl">
                        </div>
                    </div>
                @endif

                <!-- Article Metadata -->
                <div class="flex flex-wrap items-center gap-3 text-sm text-gray-600 mb-4">
                    @if ($article->author)
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center text-white text-xs font-bold shadow-sm">
                                {{ strtoupper(substr($article->author, 0, 1)) }}
                            </div>
                            <span class="font-semibold text-gray-900">{{ $article->author }}</span>
                        </div>
                        <span class="text-gray-400">•</span>
                    @endif

                    <time datetime="{{ $article->published_at ?? $article->created_at }}"
                        class="flex items-center gap-1.5 text-gray-600">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ ($article->published_at ?? $article->created_at)->format('d F Y') }}
                    </time>

                    <span class="text-gray-400">•</span>

                    <span class="flex items-center gap-1.5 text-gray-600">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        {{ number_format($article->views) }} views
                    </span>
                </div>

                @include('livewire.components.tagline-badge', ['article' => $article])

                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-8 leading-tight">
                    {{ $article->title }}
                </h1>

                @if ($article->video_url)
                    <div class="mb-10 group">
                        <div
                            class="aspect-video rounded-2xl overflow-hidden bg-gray-900 shadow-xl ring-1 ring-gray-900/10 transform transition-transform duration-300 group-hover:scale-[1.01]">
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

                <!-- Article Body -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-10 ">
                    <div
                        class="prose prose-sm md:prose-base lg:prose-lg max-w-none
                                prose-headings:font-bold prose-headings:text-gray-900
                                prose-h2:text-3xl prose-h2:mt-12 prose-h2:mb-4 prose-h2:pb-3 prose-h2:border-b prose-h2:border-gray-200
                                prose-h3:text-2xl prose-h3:mt-8 prose-h3:mb-3
                                prose-p:text-gray-700 prose-p:leading-relaxed prose-p:my-5
                                prose-a:text-emerald-600 prose-a:no-underline hover:prose-a:underline prose-a:font-medium prose-a:transition-colors
                                prose-strong:text-gray-900 prose-strong:font-semibold
                                prose-ul:my-6 prose-ol:my-6
                                prose-li:text-gray-700 prose-li:my-2 prose-li:marker:text-emerald-500
                                prose-img:rounded-xl
                                prose-blockquote:border-l-4 prose-blockquote:border-emerald-500 prose-blockquote:bg-emerald-50/50 prose-blockquote:pl-6 prose-blockquote:py-1 prose-blockquote:italic prose-blockquote:text-gray-700 prose-blockquote:rounded-r-lg
                                prose-code:text-emerald-600 prose-code:bg-emerald-50 prose-code:px-2 prose-code:py-1 prose-code:rounded prose-code:font-mono prose-code:text-sm prose-code:font-normal prose-code:before:content-[''] prose-code:after:content-['']
                                prose-pre:bg-gray-900 prose-pre:text-gray-100 prose-pre:rounded-xl prose-pre:shadow-lg prose-pre:ring-1 prose-pre:ring-white/10
                                prose-hr:border-gray-200 prose-hr:my-8
                                prose-table:border-collapse prose-table:w-full
                                prose-th:bg-gray-50 prose-th:font-semibold prose-th:text-left prose-th:p-3 prose-th:border prose-th:border-gray-200
                                prose-td:p-3 prose-td:border prose-td:border-gray-200">
                        {!! $article->content !!}
                    </div>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    @include('livewire.components.newest-article', ['excludeId' => $article->id])
                </div>
            </aside>
        </div>
    </div>
@endsection
