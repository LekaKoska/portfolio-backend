<section class="portfolio-card w-full mt-16" id="contact-form">
    <div class="flex flex-col">

        <div class="flex items-center gap-4 pb-5">
            <div class="w-11 h-11 rounded-2xl bg-slate-50 border border-slate-200 flex items-center justify-center">
                <svg viewBox="0 0 24 24" class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
            </div>
            <div>
                <div class="text-xs font-medium text-slate-400 uppercase tracking-widest">Get in touch</div>
                <div class="mt-0.5 text-base font-semibold text-slate-900">Contact Alek</div>
            </div>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
            @if(session('success'))
                <div
                    id="success-toast"
                    class="flex items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700 opacity-0 transition-all duration-500"
                >
                    <div class="w-7 h-7 rounded-xl bg-emerald-100 border border-emerald-200 flex items-center justify-center shrink-0">
                        <svg viewBox="0 0 24 24" class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                    </div>
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            <form method="POST" action="{{route("contact.form")}}" class="flex flex-col gap-4">
                @csrf

                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="flex flex-col gap-1.5 flex-1">
                        <label class="text-xs font-medium text-slate-500 uppercase tracking-widest">Full name</label>
                        <input
                            type="text"
                            name="name"
                            placeholder="John Doe"
                            class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-400/50 transition"
                        />
                    </div>
                    <div class="flex flex-col gap-1.5 flex-1">
                        <label class="text-xs font-medium text-slate-500 uppercase tracking-widest">Email</label>
                        <input
                            type="email"
                            name="email"
                            placeholder="john@example.com"
                            class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-400/50 transition"
                        />
                    </div>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-medium text-slate-500 uppercase tracking-widest">Message</label>
                    <textarea
                        name="message"
                        rows="5"
                        placeholder="Hi Alek, I'd like to talk about..."
                        class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-400/50 transition resize-none"
                    ></textarea>
                </div>

                <div class="border-t border-slate-200"></div>

                <div class="flex justify-end">
                    <button
                        type="submit"
                        class="rounded-2xl bg-slate-900 px-6 py-3 text-sm font-medium text-white hover:bg-slate-700 active:scale-95 transition whitespace-nowrap"
                    >
                       Submit
                    </button>
                </div>

            </form>
        </div>

    </div>

    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const toast = document.getElementById('success-toast');
                if (!toast) return;
                requestAnimationFrame(() => {
                    toast.classList.remove('opacity-0');
                    toast.classList.add('opacity-100');
                });
                setTimeout(() => {
                    toast.classList.remove('opacity-100');
                    toast.classList.add('opacity-0');
                }, 4000);
            });
        </script>
    @endif
</section>
