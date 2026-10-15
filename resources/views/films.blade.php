<x-layout>
    <x-navbar />

    <h1>Ini adalah films</h1>

    @if ($filmTersedia)
        @foreach ($filmList as $film)
            <h3>{{ $film }}</h3>
        @endforeach
    @else
        <h3>Film tidak tersedia</h3>
    @endif
</x-layout>
