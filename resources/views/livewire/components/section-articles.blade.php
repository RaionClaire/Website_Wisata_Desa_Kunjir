@php
    use Illuminate\Support\Str;
@endphp

<section class="bg-blue-50 py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8 items-start mb-10">
            <div>
                <h2 class="text-3xl font-bold">Artikel tentang Kunjir</h2>
                <a href="{{ route('articles.index') }}" class="text-green-700 font-medium">Lihat semua artikel →</a>
            </div>
            <p class="text-sm text-gray-600">
                Kumpulan artikel terbaru: hidden gems, tips perjalanan, hingga budaya lokal.
            </p>
        </div>

        @if (isset($latestArticles) && $latestArticles->count() > 0)
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($latestArticles as $article)
                    @include('livewire.components.card-article', [
                        'article' => $article,
                        'image' => $article->thumbnail_path
                            ? asset('storage/' . $article->thumbnail_path)
                            : '/images/kunjir_pantai_1.jpeg',
                        'title' => $article->title,
                        'excerpt' => Str::limit(strip_tags(Str::markdown($article->content)), 100),
                        'slug' => Str::slug($article->title),
                        'views' => $article->views,
                        'date' => $article->published_at ?? $article->created_at,
                    ])
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-500">Belum ada artikel yang dipublikasikan.</p>
                <a href="{{ route('articles.index') }}"
                    class="inline-block mt-4 text-green-700 font-medium hover:underline">
                    Cek halaman artikel →
                </a>
            </div>
        @endif
    </div>
</section>
