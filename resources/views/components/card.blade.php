<article class="group relative flex h-full min-h-64 flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 shadow-sm shadow-slate-900/5 transition duration-300 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl hover:shadow-red-900/5">
    <div aria-hidden="true" class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-red-400/70 to-transparent opacity-60 transition-opacity duration-300 group-hover:opacity-100"></div>

    <div class="flex items-start gap-4">
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-red-100 bg-red-50 text-red-600 transition duration-300 group-hover:border-red-200 group-hover:bg-red-100">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M3.5 4.5A.5.5 0 0 1 4 4h16a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H4a.5.5 0 0 1-.5-.5v-1ZM2 8a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8Zm7.5 2.5a.5.5 0 0 0-.8.4v6.2a.5.5 0 0 0 .8.4l4.5-3.1a.5.5 0 0 0 0-.8L9.5 10.5Z" />
            </svg>
        </div>
        <h2 class="pt-1 text-lg font-semibold leading-6 tracking-tight text-slate-900 transition-colors duration-200 group-hover:text-red-700">
            {{ $film->judul }}
        </h2>
    </div>

    <div aria-hidden="true" class="my-5 h-px bg-gradient-to-r from-red-200 via-slate-200 to-transparent"></div>

    <p class="text-sm leading-7 text-slate-600">
        {{ $film->deskripsi }}
    </p>
</article>
