@extends('layouts.app')
@section('title', 'Desa Wisata Kunjir')

@section('content')
    <livewire:components.hero />
    @include('livewire.components.section-explore-kunjir')
    <livewire:components.section-plan-trip />
    @include('livewire.components.section-articles')
    @include('livewire.components.section-maps')
    @include('livewire.components.section-faq')
    @include('livewire.components.section-weather-forecast')
@endsection
