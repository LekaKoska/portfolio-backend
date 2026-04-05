
    <section class="portfolio-card">
        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">

            <div class="portfolio-avatar-wrap shrink-0">
                <img
                    src="{{ asset('avatar/' . $profile->profile_img) }}"
                    alt="{{ $profile->name }}"
                    class="portfolio-avatar portfolio-avatar--zoomTop"
                />
            </div>
            <div class="flex flex-col items-center sm:items-start text-center sm:text-left gap-4 flex-1">

                <div>
                    <h1 class="text-4xl font-semibold tracking-tight text-slate-900">
                        {{ $profile->name }}
                    </h1>
                    <p class="mt-1.5 text-base font-medium text-blue-500">
                        {{ $profile->title }}
                    </p>
                    <p class="mt-2 text-xs text-slate-400 flex items-center justify-center sm:justify-start gap-1.5">
                        <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span>{{ $profile->city }}, Serbia</span>
                    </p>
                </div>

                <div class="flex flex-wrap gap-2 justify-center sm:justify-start">
                    @if($profile->github_link)
                        <a class="portfolio-linkchip" href="{{ $profile->github_link }}" target="_blank">
                            <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
                            </svg>
                            <span class="truncate max-w-[240px]">{{ $profile->github_link }}</span>
                        </a>
                    @endif

                    @if($profile->linkedin_link)
                        <a class="portfolio-linkchip" href="{{ $profile->linkedin_link }}" target="_blank">
                            <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                                <rect x="2" y="9" width="4" height="12"/>
                                <circle cx="4" cy="4" r="2"/>
                            </svg>
                            <span class="truncate max-w-[240px]">{{ $profile->linkedin_link }}</span>
                        </a>
                    @endif

                    @if($profile->gmail)
                        <a class="portfolio-linkchip" href="mailto:{{ $profile->gmail }}">
                            <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <span class="truncate max-w-[240px]">{{ $profile->gmail }}</span>
                        </a>
                    @endif

                    @if($profile->cv_pdf)
                        <a href="{{ route('cv.download') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-md bg-slate-900 border border-slate-900 text-slate-100 text-xs hover:bg-slate-700 transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                <polyline points="7 10 12 15 17 10"/>
                                <line x1="12" y1="15" x2="12" y2="3"/>
                            </svg>
                            Download CV
                        </a>
                    @endif

                    <a class="portfolio-linkchip" href="#ai-chat">
                        <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3" y="8" width="18" height="12" rx="2"/>
                            <path d="M9 8V6a3 3 0 0 1 6 0v2"/>
                            <circle cx="9" cy="14" r="1.5"/>
                            <circle cx="15" cy="14" r="1.5"/>
                            <path d="M9 17h6"/>
                        </svg>
                        <span>Ask AI about me</span>
                    </a>

                    <a class="portfolio-linkchip" href="#contact-form">
                        <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <span>Contact me</span>
                    </a>
                </div>

            </div>
        </div>
    </section>


    git add -f /public/avatar/profile.jpg
    git add -f /public/cv/alek-koska-cv.pdf
    git commit -m "Add avatar and CV"
    git push
