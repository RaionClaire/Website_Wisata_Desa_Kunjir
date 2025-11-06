@extends('layouts.app')
@section('title','Artikel')

@section('content')
  <div class="max-w-7xl mx-auto px-4 py-16">
    <h1 class="text-3xl font-bold mb-8">Artikel Wisata</h1>
    <div class="grid md:grid-cols-3 gap-8">
      @foreach(range(1,6) as $i)
        @include('livewire.components.card-article',[
          'image'=>"/images/artikel-$i.jpg",
          'title'=>"Judul Artikel #$i",
          'excerpt'=>"Ringkasan singkat artikel #$i tentang destinasi, tips, dan info seputar Desa Kunjir."
        ])
      @endforeach
    </div>
  </div>
@endsection
