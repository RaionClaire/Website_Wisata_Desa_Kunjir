@php
use Illuminate\Support\Str;
use App\Models\Article;

$latestArticles = Article::where('status', 'published')
    ->orderBy('published_at', 'desc')
    ->orderBy('created_at', 'desc')
    ->take(5)
    ->get();

if (isset($excludeId)) {
    $latestArticles = $latestArticles->where('id', '!=', $excludeId);
}
@endphp

<aside class="lg:col-span-1">
    <div class="sticky top-24">
        <h3 class="text-xl font-bold mb-4">Artikel Terbaru</h3>
        
        @if($latestArticles->count() > 0)
            <div class="space-y-4">
                @foreach ($latestArticles as $latestArticle)
                    <a href="{{ route('articles.show', Str::slug($latestArticle->title)) }}"
                        class="block group">
                        <div class="flex gap-3">
                            @if ($latestArticle->thumbnail_path)
                                <img src="{{ asset('storage/' . $latestArticle->thumbnail_path) }}"
                                    alt="{{ $latestArticle->title }}"
                                    class="w-20 h-20 object-cover rounded-lg flex-shrink-0">
                            @else
                                <div class="w-20 h-20 bg-gray-200 rounded-lg flex-shrink-0 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm group-hover:text-green-700 transition line-clamp-2">
                                    {{ $latestArticle->title }}
                                </h4>
                                <p class="text-xs text-gray-500 mt-1">
                                    {{ ($latestArticle->published_at ?? $latestArticle->created_at)->format('d M Y') }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-sm">Belum ada artikel lainnya.</p>
        @endif

        <div class="mt-6">
            <a href="{{ route('articles.index') }}"
                class="block text-center bg-green-700 text-white py-2 px-4 rounded-lg hover:bg-green-800 transition">
                Lihat Semua Artikel
            </a>
        </div>
    </div>
</aside>
