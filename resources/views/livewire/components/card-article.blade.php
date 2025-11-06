@props(['image'=>'/images/placeholder.jpg','title'=>'','excerpt'=>''])
<div class="rounded-2xl overflow-hidden bg-white shadow hover:shadow-lg transition">
  <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-56 object-cover">
  <div class="p-4">
    <h3 class="text-lg font-semibold mb-1">{{ $title }}</h3>
    <p class="text-sm text-gray-600 mb-3 line-clamp-3">{{ $excerpt }}</p>
    <a href="/articles/detail" class="text-green-700 font-medium text-sm">Baca selengkapnya →</a>
  </div>
</div>
