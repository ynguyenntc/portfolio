@extends('layout.app')
@section('title', 'Home')
@section('content')
    @include('components.navbar')
    <main class="pl-[260px]">
        @include('components.sections.hero_content')
        @include('components.sections.about_me')
        @include('components.sections.resume')
        @include('components.sections.project')
        @include('components.sections.contact')
    </main>
@endsection
