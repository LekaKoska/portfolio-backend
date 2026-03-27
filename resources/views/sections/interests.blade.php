<section class="portfolio-card">
    <h2 class="portfolio-title mb-5">Interests</h2>

    <div class="flex flex-wrap gap-2">
        @foreach($interests as $interest)
            <span class="portfolio-pill">
                {{ $interest->name }}
            </span>
        @endforeach
    </div>
</section>
