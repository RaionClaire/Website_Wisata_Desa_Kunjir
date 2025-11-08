<div class="flex flex-wrap items-center gap-2 mb-6">
    @if (!empty($article->tagline))
        @php
            $tagline = strtolower($article->tagline);
            $taglineConfig = match ($tagline) {
                'artikel' => [
                    'text' => 'text-emerald-700',
                    'ring' => 'ring-emerald-600/20',
                ],
                'informasi' => [
                    'text' => 'text-blue-700',
                    'ring' => 'ring-blue-600/20',
                ],
                default => [
                    'text' => 'text-slate-700',
                    'ring' => 'ring-slate-600/20',
                ],
            };
        @endphp
        <span
            class="inline-flex items-center gap-1.5 rounded-full px-3 py-1.5 text-xs font-medium 
            {{ $taglineConfig['text'] }} 
            ring-1 ring-inset {{ $taglineConfig['ring'] }}
            transition-all duration-200">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                    clip-rule="evenodd" />
            </svg>
            {{ ucfirst($article->tagline) }}
        </span>
    @endif
</div>
