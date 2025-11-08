@props([
    'image' => '/images/placeholder.jpg',
    'title' => '',
    'excerpt' => '',
    'slug' => '',
    'views' => 0,
    'date' => null,
    'article' => null,
])

<a href="{{ route('articles.show', $slug) }}"
    class="group block rounded-2xl overflow-hidden bg-white border border-gray-100 hover:border-emerald-300 shadow-sm transition-all duration-500">

    <div class="relative aspect-[16/10] overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" loading="lazy"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
        </div>

        <div class="absolute bottom-3 left-3">
            @include('livewire.components.tagline-badge', ['article' => $article])
        </div>
    </div>

    <div class="p-5">
        <div class="flex items-center gap-2 text-xs text-gray-500 mb-3">
            @if ($date)
                <time>{{ $date->format('d M Y') }}</time>
                <span>•</span>
            @endif
            <div class="flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <span>{{ number_format($views) }}</span>
            </div>
        </div>

        <h3
            class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors duration-300">
            {{ $title }}
        </h3>

        <p class="text-sm text-gray-600 mb-4 line-clamp-3">
            {{ $excerpt }}
        </p>

        <div
            class="flex items-center text-emerald-600 font-medium text-sm group-hover:gap-2 transition-all duration-300">
            <span>Baca selengkapnya</span>
            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </div>
</a>
