<section class="portfolio-card">
    <h2 class="portfolio-title mb-6">Education</h2>

    <div class="flex flex-col">
        @foreach($education as $school)
            <div class="group flex gap-4 py-5 border-b border-slate-100 last:border-0">
                <div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center shrink-0 mt-0.5 transition group-hover:border-slate-300 group-hover:bg-slate-100">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                </div>

                <div class="min-w-0">
                    <p class="text-sm font-medium text-slate-900">{{ $school->school_name }}</p>
                    <p class="text-sm text-blue-600 mt-1">{{ $school->course }}</p>
                    <p class="text-sm text-slate-600 leading-relaxed mt-2">{{ $school->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
