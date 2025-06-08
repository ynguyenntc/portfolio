@extends('layout.app')
@section('title', 'Home')
@section('content')
    @include('components.navbar')
    <main class="ml-[var(--navbar-width)] transition-all duration-300" id="home-main">
        @include('components.sections.hero_content')
        @include('components.sections.about_me')
        @include('components.sections.resume')
        @include('components.sections.project')
        @include('components.sections.contact')
    </main>
@endsection
