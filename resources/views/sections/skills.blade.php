<section class="portfolio-card">
    <h2 class="portfolio-title mb-5">Technical Skills</h2>

    <div class="flex flex-wrap gap-2">
        @foreach($skills as $skill)
            <span class="portfolio-pill">
                {{ $skill->name }}
            </span>
        @endforeach
    </div>
</section>
