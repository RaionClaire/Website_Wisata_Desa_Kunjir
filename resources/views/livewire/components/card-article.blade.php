@props([
  'image' => '/images/placeholder.jpg',
  'title' => '',
  'excerpt' => '',
  'slug' => '',
  'views' => 0,
  'date' => null,
  'article' => null
])

<div class="rounded-2xl overflow-hidden bg-white shadow hover:shadow-lg transition">
  <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-56 object-cover" loading="lazy">
  <div class="p-4">
    <div class="flex items-center gap-2 text-xs text-gray-500 mb-2">
      @if($date)
        <span>{{ $date->format('d M Y') }}</span>
        <span>•</span>
      @endif
      <span>{{ $views }} views</span>
    </div>
    <h3 class="text-lg font-semibold mb-1">{{ $title }}</h3>
    <p class="text-sm text-gray-600 mb-3 line-clamp-3">{{ $excerpt }}</p>
    <a href="{{ route('articles.show', $slug) }}" class="text-green-700 font-medium text-sm hover:underline">
      Baca selengkapnya →
    </a>
  </div>
</div>
