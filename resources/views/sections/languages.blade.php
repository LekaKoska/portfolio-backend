<section class="portfolio-card">
    <h2 class="portfolio-title mb-5">Languages</h2>

    <div class="flex flex-wrap gap-2">
        @foreach($languages as $language)
            <span class="portfolio-pill">
                {{ $language->name }}
            </span>
        @endforeach
    </div>
</section>
