<div
    class="group flex flex-col rounded-xl bg-gray-800 border border-indigo-500/40 p-6 shadow-xl shadow-indigo-500/10 transition-all duration-300 hover:bg-gray-800/60 hover:border-white/10 hover:shadow-md hover:shadow-black/20 hover:-translate-y-1">

    {{-- Header --}}
    <div class="flex items-center gap-3">
        <div
            class="flex items-center justify-center w-10 h-10 rounded-lg bg-indigo-500/25 text-indigo-400 shrink-0 group-hover:bg-indigo-500/15 transition-colors duration-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M3.5 4.5A.5.5 0 0 1 4 4h16a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H4a.5.5 0 0 1-.5-.5v-1ZM2 8a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8Zm7.5 2.5a.5.5 0 0 0-.8.4v6.2a.5.5 0 0 0 .8.4l4.5-3.1a.5.5 0 0 0 0-.8L9.5 10.5Z" />
            </svg>
        </div>
        <h3 class="text-lg font-semibold text-indigo-300 group-hover:text-white transition-colors duration-200">
            {{ $film->judul }}
        </h3>
    </div>

    {{-- Divider --}}
    <div class="mt-4 mb-3 h-px bg-gradient-to-r from-indigo-500/30 via-white/5 to-transparent"></div>

    {{-- Description --}}
    <p class="text-sm leading-relaxed text-gray-300 group-hover:text-gray-400 transition-colors duration-200">
        {{ $film->deskripsi }}
    </p>
</div>
