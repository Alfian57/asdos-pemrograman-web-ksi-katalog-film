<nav class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/95 shadow-sm shadow-slate-900/5 backdrop-blur-xl">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-[4.5rem] items-center justify-between gap-4">
            <a href="{{ route('dashboard') }}" class="group inline-flex shrink-0 items-center gap-3 rounded-xl focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-red-600">
                <img src="{{ asset('images/katalogfilm-logo.png') }}" alt="" aria-hidden="true" class="h-10 w-10 object-contain transition duration-200 group-hover:-rotate-3 group-hover:scale-105">
                <span class="text-lg font-bold tracking-tight text-slate-900 transition-colors group-hover:text-red-700 sm:text-xl">Katalog<span class="text-red-600">Film</span></span>
            </a>

            @php
                $links = [
                    ['href' => route('dashboard'), 'routeName' => 'dashboard', 'label' => 'Beranda'],
                    ['href' => route('films'), 'routeName' => 'films', 'label' => 'Film'],
                    ['href' => route('tentangKami'), 'routeName' => 'tentangKami', 'label' => 'Tentang Kami'],
                    ['href' => route('harga'), 'routeName' => 'harga', 'label' => 'Harga'],
                    ['href' => route('logout'), 'routeName' => 'logout', 'label' => 'Logout'],
                ];
            @endphp

            <ul class="hidden items-center gap-1 rounded-2xl border border-slate-200 bg-slate-50 p-1 sm:flex">
                @foreach ($links as $link)
                    @php
                        $isActive = request()->routeIs($link['routeName']);
                        $linkColor = $link['routeName'] === 'logout'
                            ? 'text-red-600 hover:bg-red-50 hover:text-red-700'
                            : 'text-slate-600 hover:bg-white hover:text-slate-900';
                    @endphp
                    <li>
                        <a href="{{ $link['href'] }}"
                            class="rounded-xl px-3.5 py-2 text-sm font-medium transition duration-200 {{ $isActive ? 'bg-white text-red-700 shadow-sm ring-1 ring-slate-200/80' : $linkColor }}">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <button type="button"
                class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white p-2.5 text-slate-600 shadow-sm transition hover:border-slate-300 hover:bg-slate-50 hover:text-slate-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 sm:hidden"
                aria-label="Buka menu"
                onclick="this.closest('nav').querySelector('#mobile-menu').classList.toggle('hidden')">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white px-4 py-3 sm:hidden">
        <ul class="mx-auto flex max-w-7xl flex-col gap-1">
            @foreach ($links as $link)
                @php
                    $isActive = request()->routeIs($link['routeName']);
                    $linkColor = $link['routeName'] === 'logout'
                        ? 'text-red-600 hover:bg-red-50 hover:text-red-700'
                        : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900';
                @endphp
                <li>
                    <a href="{{ $link['href'] }}"
                        class="block rounded-xl px-4 py-3 text-sm font-medium transition duration-200 {{ $isActive ? 'bg-red-50 text-red-700' : $linkColor }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
