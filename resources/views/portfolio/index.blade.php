@extends("layouts.app")

@section("content")

    <div class="portfolio-grid">
        <div class="lg:col-span-2">
            @include("sections.profile")
        </div>

        <aside class="portfolio-sidebar">
            @include("sections.skills")
            @include("sections.interests")
            @include("sections.languages")
            @include("sections.education")
        </aside>

        <main class="portfolio-main">
            @include("sections.about")
            @include("sections.work_experience")
        </main>
    </div>

    <div class="mt-14">
        @include("sections.ai")
    </div>

@endsection
