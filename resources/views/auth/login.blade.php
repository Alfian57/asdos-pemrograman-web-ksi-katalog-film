<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fafc">
    <title>Masuk · KatalogFilm</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 font-sans text-slate-900 antialiased">
    <main class="flex min-h-screen flex-col items-center justify-center px-5 py-12 sm:px-6">
        <a href="/login" class="mb-8 inline-flex items-center gap-3 rounded-lg focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-red-600">
            <img src="{{ asset('images/katalogfilm-logo.png') }}" alt="" aria-hidden="true" class="h-10 w-10 object-contain">
            <span class="text-lg font-semibold tracking-tight">Katalog<span class="text-red-600">Film</span></span>
        </a>

        <section class="w-full max-w-md rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8" aria-labelledby="login-heading">
            <div class="mb-7">
                <h1 id="login-heading" class="text-2xl font-semibold tracking-tight">Masuk ke akunmu</h1>
                <p class="mt-2 text-sm text-slate-500">Masukkan email dan password untuk melanjutkan.</p>
            </div>

            @if (session('pesan-gagal'))
                <div role="alert" class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                    {{ session('pesan-gagal') }}
                </div>
            @endif

            <form action="/login" method="POST" class="space-y-5">
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                    <input type="email" id="email" name="email" placeholder="nama@email.com"
                        class="w-full rounded-lg border border-slate-300 bg-white px-3.5 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 hover:border-slate-400 focus:border-red-500 focus:ring-4 focus:ring-red-500/10">
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password"
                        class="w-full rounded-lg border border-slate-300 bg-white px-3.5 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 hover:border-slate-400 focus:border-red-500 focus:ring-4 focus:ring-red-500/10">
                    @error('password')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full rounded-lg bg-red-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-red-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 active:bg-red-800">
                    Masuk
                </button>
            </form>
        </section>

        <p class="mt-6 text-sm text-slate-500">Temukan tontonan favoritmu di KatalogFilm.</p>
    </main>
</body>

</html>
