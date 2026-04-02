<section class="portfolio-card w-full mt-16" id="ai-chat">
    <div class="flex flex-col">

        <!-- Header -->
        <div class="flex items-center justify-between gap-4 pb-5">
            <div class="flex items-center gap-4">
                <div class="w-11 h-11 rounded-2xl bg-slate-50 border border-slate-200 flex items-center justify-center">
                    <svg viewBox="0 0 24 24" class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path d="M12 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"></path>
                        <path d="M7 8h10l1 8H6L7 8z"></path>
                        <path d="M9 16v4m6-4v4"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-xs font-medium text-slate-400 uppercase tracking-widest">AI assistant</div>
                    <div class="mt-0.5 text-base font-semibold text-slate-900">Alek's AI</div>
                </div>
            </div>
            <div class="flex items-center gap-2 text-xs text-slate-500">
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                Online
            </div>
        </div>

        <!-- Chat box -->
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4 flex flex-col gap-4">

            <!-- Messages area -->
            <div id="chat-messages" class="h-72 lg:h-96 overflow-y-auto flex flex-col gap-3 pr-1">

                <!-- AI intro message -->
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-xs font-semibold text-slate-600 shrink-0">
                        AI
                    </div>
                    <div class="rounded-2xl rounded-tl-sm bg-white border border-slate-200 px-4 py-3 text-sm text-slate-700 leading-relaxed">
                        Feel free to ask anything about Alek 👋
                    </div>
                </div>

                <!-- Suggestion chips -->
                <div class="flex flex-wrap gap-2 pl-11">
                    <button type="button" class="chip rounded-full border border-slate-200 bg-white px-3 py-1.5 text-xs text-slate-500 hover:border-slate-300 hover:text-slate-700 hover:bg-slate-50 transition">
                        What are his skills?
                    </button>
                    <button type="button" class="chip rounded-full border border-slate-200 bg-white px-3 py-1.5 text-xs text-slate-500 hover:border-slate-300 hover:text-slate-700 hover:bg-slate-50 transition">
                        His projects
                    </button>
                    <button type="button" class="chip rounded-full border border-slate-200 bg-white px-3 py-1.5 text-xs text-slate-500 hover:border-slate-300 hover:text-slate-700 hover:bg-slate-50 transition">
                        Contact Alek
                    </button>
                </div>

            </div>

            <!-- Divider -->
            <div class="border-t border-slate-200"></div>

            <!-- Input row -->
            <div class="flex gap-2 items-center">
                <input type="text" placeholder="Ask about Alek..." name="chat-message" id="chat-input" class="flex-1 rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-400/50 transition">
                <button type="button" id="send-btn" class="rounded-2xl bg-slate-900 px-5 py-3 text-sm font-medium text-white hover:bg-slate-700 active:scale-95 transition whitespace-nowrap">
                     Send
                </button>
            </div>

        </div>
    </div>
</section>
