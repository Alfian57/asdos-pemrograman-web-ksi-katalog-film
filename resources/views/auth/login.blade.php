<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - KatalogFilm</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-950 text-gray-100 font-sans antialiased flex flex-col justify-between selection:bg-indigo-500 selection:text-white relative overflow-x-hidden">
    <!-- Ambient Background Glow -->
    <div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[600px] h-[350px] bg-indigo-600/20 blur-[130px] rounded-full"></div>
        <div class="absolute -bottom-20 -left-20 w-[400px] h-[400px] bg-purple-600/10 blur-[120px] rounded-full"></div>
        <div class="absolute top-1/3 -right-20 w-[350px] h-[350px] bg-indigo-500/10 blur-[100px] rounded-full"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div>
    </div>

    <!-- Header Navigation -->
    <header class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex items-center justify-between">
        <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 group text-gray-400 hover:text-white transition-colors duration-200 text-sm font-medium">
            <svg class="w-4 h-4 transition-transform duration-200 group-hover:-translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Kembali ke Beranda</span>
        </a>

        <div class="flex items-center gap-2">
            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-indigo-500/10 text-indigo-400 border border-indigo-500/20">
                Portal Akun
            </span>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center px-4 sm:px-6 py-8">
        <div class="w-full max-w-md">
            <!-- Card Container -->
            <div class="relative bg-gray-900/80 backdrop-blur-xl border border-white/10 rounded-2xl p-6 sm:p-8 shadow-2xl shadow-black/60">
                <!-- Brand & Title -->
                <div class="text-center mb-8">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2.5 mb-4 group">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-indigo-600 to-indigo-400 flex items-center justify-center shadow-lg shadow-indigo-500/25 group-hover:scale-105 transition-transform duration-200">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3.5 4.5A.5.5 0 0 1 4 4h16a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H4a.5.5 0 0 1-.5-.5v-1ZM2 8a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8Zm7.5 2.5a.5.5 0 0 0-.8.4v6.2a.5.5 0 0 0 .8.4l4.5-3.1a.5.5 0 0 0 0-.8L9.5 10.5Z" />
                            </svg>
                        </div>
                        <span class="text-2xl font-bold tracking-tight text-white group-hover:text-indigo-300 transition-colors">
                            Katalog<span class="text-indigo-400">Film</span>
                        </span>
                    </a>
                    <h1 class="text-xl font-bold text-white tracking-tight">Selamat Datang Kembali</h1>
                    <p class="mt-1.5 text-sm text-gray-400">Masuk untuk mengelola dan menjelajahi koleksi film</p>
                </div>

                <!-- Session Error Alert -->
                @if (session('login-error'))
                    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-300 flex items-start gap-3 text-sm" role="alert">
                        <svg class="w-5 h-5 text-red-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <div class="flex-1">
                            <p class="font-medium text-red-200">Gagal Masuk</p>
                            <p class="text-xs text-red-300/90 mt-0.5">{{ session('login-error') }}</p>
                        </div>
                    </div>
                @endif

                <!-- Login Form -->
                <form action="/login" method="POST" class="space-y-5">
                    @csrf

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-gray-300 mb-2">
                            Email
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukan email"
                                required
                                autocomplete="email"
                                class="w-full bg-gray-950/70 border @error('email') border-red-500/70 focus:border-red-500 focus:ring-red-500/20 @else border-gray-700/80 focus:border-indigo-500 focus:ring-indigo-500/20 @enderror rounded-xl py-3 pl-11 pr-4 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 transition-all duration-200"
                            >
                        </div>
                        @error('email')
                            <p class="mt-2 text-xs text-red-400 flex items-center gap-1.5">
                                <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-gray-300">
                                Password
                            </label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Masukan password"
                                required
                                autocomplete="current-password"
                                class="w-full bg-gray-950/70 border @error('password') border-red-500/70 focus:border-red-500 focus:ring-red-500/20 @else border-gray-700/80 focus:border-indigo-500 focus:ring-indigo-500/20 @enderror rounded-xl py-3 pl-11 pr-11 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 transition-all duration-200"
                            >
                            <button
                                type="button"
                                id="togglePassword"
                                aria-label="Tampilkan atau sembunyikan password"
                                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-gray-400 hover:text-gray-200 transition-colors focus:outline-none cursor-pointer"
                            >
                                <svg id="eyeIcon" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg id="eyeOffIcon" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-2 text-xs text-red-400 flex items-center gap-1.5">
                                <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button
                            type="submit"
                            class="w-full py-3 px-4 rounded-xl font-medium text-sm text-white bg-indigo-600 hover:bg-indigo-500 active:scale-[0.99] focus:outline-none focus:ring-2 focus:ring-indigo-500/40 shadow-lg shadow-indigo-600/30 transition-all duration-200 flex items-center justify-center gap-2 group cursor-pointer"
                        >
                            <span>Masuk</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>

                <!-- Help Link -->
                <div class="mt-6 pt-5 border-t border-white/5 text-center">
                    <p class="text-xs text-gray-400">
                        Belum punya akun? Hubungi administrator atau
                        <a href="{{ route('dashboard') }}" class="text-indigo-400 hover:text-indigo-300 font-medium transition-colors">jelajahi sebagai tamu</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-xs text-gray-400">
        &copy; {{ date('Y') }} KatalogFilm. All rights reserved.
    </footer>

    <!-- Toggle Password Visibility Script -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeOffIcon = document.getElementById('eyeOffIcon');

        if (togglePassword && passwordInput) {
            togglePassword.addEventListener('click', function () {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                eyeIcon.classList.toggle('hidden', isPassword);
                eyeOffIcon.classList.toggle('hidden', !isPassword);
            });
        }
    </script>
</body>

</html>
