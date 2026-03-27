@foreach($profile as $user)
    <header class="bg-white border-b border-slate-200 px-8 flex items-center justify-between h-16 sticky top-0 z-50">
        <div class="flex items-center gap-4">
            <img
                src=""
                alt=""
                class="w-10 h-10 rounded-full object-cover border-2 border-slate-300"
            />
            <div>
                <p class="text-sm font-medium text-slate-900 leading-tight">{{ $user->name }}</p>
                <p class="text-xs text-slate-500">{{ $user->title }} · {{ $user->city }}</p>
            </div>
        </div>

        <div class="flex items-center gap-2">

            <a href="{{ $user->github_link }}"
               target="_blank"
               class="flex items-center gap-1.5 px-3 py-1.5 rounded-md border border-slate-200 text-sm text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
                </svg>
                GitHub
            </a>

            <a href="{{ $user->linkedin_link }}"
               target="_blank"
               class="flex items-center gap-1.5 px-3 py-1.5 rounded-md border border-slate-200 text-sm text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                    <rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>
                </svg>
                LinkedIn
            </a>

            <a href="{{ $user->cv_pdf }}"
               target="_blank"
               class="flex items-center gap-1.5 px-3 py-1.5 rounded-md bg-slate-800 border border-slate-700 text-sm text-slate-100 hover:bg-slate-700 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                </svg>
                CV
            </a>

        </div>
    </header>

@endforeach
