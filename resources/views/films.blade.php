<x-layout>
    <x-navbar />

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        {{-- Page Header --}}
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white tracking-tight">Daftar Film</h1>
            <p class="mt-2 text-gray-400">Jelajahi koleksi film pilihan kami</p>
        </div>

        {{-- Film Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($filmList as $film)
                <x-card :film="$film" />
            @endforeach
        </div>
    </main>
</x-layout>
