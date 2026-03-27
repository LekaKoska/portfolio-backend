@php use Illuminate\Support\Carbon; @endphp
<section class="portfolio-card">
    <h2 class="portfolio-title mb-6">Experience</h2>

    <div class="flex flex-col">
        @foreach($experience as $work)
            <article class="group flex gap-4 py-6 border-b border-slate-100 last:border-0">
                <div
                    class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center shrink-0 mt-0.5 transition group-hover:border-slate-300 group-hover:bg-slate-100">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.8"
                         viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="2" y="7" width="20" height="14" rx="2"/>
                        <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                    </svg>
                </div>

                <div class="min-w-0 flex-1">
                    <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                        <p class="text-sm font-semibold text-slate-900">{{ $work->company_name }}</p>
                        <p class="text-sm text-blue-600">{{ $work->job_title }}</p>
                        @php
                            $startYear = $work->start_date ? Carbon::parse($work->start_date)->format('Y') : null;
                            $endYear = $work->end_date ? Carbon::parse($work->end_date)->format('Y') : 'Present';
                        @endphp
                        @if($startYear)
                            <p class="text-xs text-slate-400">
                                {{ $startYear }} - {{ $endYear }}
                            </p>
                        @endif
                    </div>

                    <p class="text-sm text-slate-600 leading-relaxed mt-2">
                        {{ $work->job_desc }}
                    </p>

                    @if($work->project_link)
                        <a href="{{ $work->project_link }}" target="_blank" class="portfolio-linkchip mt-4">
                            <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                            <span class="truncate max-w-[520px]">{{ $work->project_link }}</span>
                        </a>
                    @endif
                </div>
            </article>
        @endforeach
    </div>
</section>
