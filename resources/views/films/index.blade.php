<x-layout>
    <main class="min-h-[calc(100vh-4.5rem)] bg-slate-50">
        <div class="mx-auto max-w-7xl px-5 py-12 sm:px-8 sm:py-16 lg:px-12">
            <header class="mb-10 max-w-2xl">
                <h1 class="text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">Daftar Film</h1>
                <p class="mt-3 text-base leading-7 text-slate-600">Jelajahi koleksi film pilihan kami</p>
                <div aria-hidden="true" class="mt-6 h-1 w-16 rounded-full bg-gradient-to-r from-red-500 to-red-300"></div>
            </header>

            <div class="flex justify-end mb-5">
                <a href="{{ route('films.create') }}" class="bg-red-500 px-3 py-2 rounded-2xl text-white font-bold">Tambah
                    film</a>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
                @foreach ($filmList as $film)
                    <x-card :film="$film" />
                @endforeach
            </div>
        </div>
    </main>
</x-layout>
