@foreach($profile as $user)
    <section class="portfolio-card">
        <div class="flex flex-col items-center text-center">
                <img
                    src="{{ asset('storage/' . $user->profile_img ) }}"
                    alt="{{ $user->name }}"
                    class="portfolio-avatar portfolio-avatar--zoomTop"
                />
            <h1 class="mt-5 text-3xl font-semibold tracking-tight text-slate-900">
                {{ $user->name }}
            </h1>
            <p class="mt-1 text-sm font-medium text-slate-500">
                {{ $user->title }}
            </p>

            <p class="mt-4 text-xs text-slate-400 flex items-center justify-center gap-1.5">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                     aria-hidden="true">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                <span class="truncate">{{ $user->city }}, Serbia</span>
            </p>
        </div>

        <div class="mt-5 flex flex-wrap gap-2">
            @if($user->github_link)
                <a class="portfolio-linkchip" href="{{ $user->github_link }}" target="_blank">
                    <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" stroke-width="1.8"
                         viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
                    </svg>
                    <span class="truncate max-w-[240px]">{{ $user->github_link }}</span>
                </a>
            @endif

            @if($user->linkedin_link)
                <a class="portfolio-linkchip" href="{{ $user->linkedin_link }}" target="_blank">
                    <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" stroke-width="1.8"
                         viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                        <rect x="2" y="9" width="4" height="12"/>
                        <circle cx="4" cy="4" r="2"/>
                    </svg>
                    <span class="truncate max-w-[240px]">{{ $user->linkedin_link }}</span>
                </a>
            @endif

            @if($user->gmail)
                <a class="portfolio-linkchip" href="mailto:{{ $user->gmail }}">
                    <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" stroke-width="1.8"
                         viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    <span class="truncate max-w-[240px]">{{ $user->gmail }}</span>
                </a>
            @endif

            @if($user->cv_pdf)
                    <a href="{{ route('cv.download') }}"
                       class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-md bg-slate-900 border border-slate-900 text-slate-100 text-xs hover:bg-slate-700 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                            <polyline points="7 10 12 15 17 10"/>
                            <line x1="12" y1="15" x2="12" y2="3"/>
                        </svg>
                        Download CV
                    </a>
            @endif
        </div>
    </section>
@endforeach
