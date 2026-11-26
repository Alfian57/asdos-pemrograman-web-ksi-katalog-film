<x-layout>
    <main class="min-h-[calc(100vh-4.5rem)] bg-slate-50">
        <div class="mx-auto max-w-7xl px-5 py-12 sm:px-8 sm:py-16 lg:px-12">
            <nav aria-label="Navigasi kembali" class="mb-6">
                <a href="{{ route('films') }}"
                    class="inline-flex min-h-11 items-center gap-2 rounded-xl border border-slate-200 bg-white px-3.5 py-2 text-sm font-medium text-slate-600 shadow-sm shadow-slate-900/5 transition hover:border-slate-300 hover:bg-slate-50 hover:text-slate-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                    <svg class="h-4 w-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    Kembali ke Daftar Film
                </a>
            </nav>

            <header class="mb-10 max-w-2xl">
                <h1 class="text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">Edit Film</h1>
                <p class="mt-3 text-base leading-7 text-slate-600">Perbarui judul dan deskripsi film yang tersimpan di
                    koleksi KatalogFilm.</p>
                <div aria-hidden="true" class="mt-6 h-1 w-16 rounded-full bg-gradient-to-r from-red-500 to-red-300">
                </div>
            </header>

            <section
                class="relative max-w-2xl overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 shadow-sm shadow-slate-900/5 sm:p-8"
                aria-labelledby="edit-film-form-heading">
                <div aria-hidden="true"
                    class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-red-400/70 to-transparent">
                </div>

                <div class="flex flex-wrap items-start justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-red-100 bg-red-50 text-red-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </div>
                        <div>
                            <h2 id="edit-film-form-heading"
                                class="text-lg font-semibold leading-6 tracking-tight text-slate-900">Detail Film</h2>
                            <p class="mt-1 text-sm text-slate-500">Ubah informasi film di bawah ini lalu simpan
                                perubahan.</p>
                        </div>
                    </div>

                    @if ($film)
                        <span
                            class="inline-flex items-center rounded-lg border border-slate-200 bg-slate-50 px-2.5 py-1 text-xs font-medium text-slate-600">
                            ID #{{ $film->id }}
                        </span>
                    @endif
                </div>

                <div aria-hidden="true" class="my-6 h-px bg-gradient-to-r from-red-200 via-slate-200 to-transparent">
                </div>

                @if (session('pesan-gagal'))
                    <div role="alert"
                        class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        {{ session('pesan-gagal') }}
                    </div>
                @endif

                <form action="{{ route('films.update', $film->id) }}" method="POST" class="space-y-6"
                    aria-labelledby="edit-film-form-heading">
                    @csrf
                    @method('PUT')

                    <div class="space-y-2">
                        <label for="judul" class="block text-sm font-medium text-slate-700">
                            Judul Film <span aria-hidden="true" class="text-red-600">*</span>
                        </label>
                        <input type="text" id="judul" name="judul"
                            value="{{ old('judul', $film->judul ?? '') }}" placeholder="Contoh: Laskar Pelangi" required
                            enterkeyhint="next" aria-describedby="judul-help @error('judul') judul-error @enderror"
                            @error('judul') aria-invalid="true" @enderror
                            class="min-h-12 w-full rounded-lg border bg-white px-3.5 py-3 text-base text-slate-900 outline-none transition placeholder:text-slate-400 focus:ring-4 focus:ring-red-500/10 sm:text-sm {{ $errors->has('judul') ? 'border-red-500 focus:border-red-600' : 'border-slate-300 hover:border-slate-400 focus:border-red-500' }}">
                        <p id="judul-help" class="text-xs text-slate-500">Pastikan judul film sudah sesuai sebelum
                            menyimpan.</p>
                        @error('judul')
                            <p id="judul-error" role="alert" class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="deskripsi" class="block text-sm font-medium text-slate-700">
                            Deskripsi Film <span aria-hidden="true" class="text-red-600">*</span>
                        </label>
                        <textarea id="deskripsi" name="deskripsi" rows="4"
                            placeholder="Tuliskan sinopsis atau ringkasan singkat cerita film..." required enterkeyhint="done"
                            aria-describedby="deskripsi-help @error('deskripsi') deskripsi-error @enderror"
                            @error('deskripsi') aria-invalid="true" @enderror
                            class="min-h-28 w-full rounded-lg border bg-white px-3.5 py-3 text-base leading-6 text-slate-900 outline-none transition placeholder:text-slate-400 focus:ring-4 focus:ring-red-500/10 sm:text-sm {{ $errors->has('deskripsi') ? 'border-red-500 focus:border-red-600' : 'border-slate-300 hover:border-slate-400 focus:border-red-500' }}">{{ old('deskripsi', $film->deskripsi ?? '') }}</textarea>
                        <p id="deskripsi-help" class="text-xs text-slate-500">Perbarui ringkasan cerita atau informasi
                            singkat film.</p>
                        @error('deskripsi')
                            <p id="deskripsi-error" role="alert" class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div
                        class="flex flex-col-reverse gap-3 border-t border-slate-100 pt-5 sm:flex-row sm:items-center sm:justify-end">
                        <a href="{{ route('films') }}"
                            class="inline-flex min-h-12 items-center justify-center rounded-lg border border-slate-200 bg-white px-5 py-3 text-sm font-medium text-slate-700 shadow-sm transition hover:border-slate-300 hover:bg-slate-50 hover:text-slate-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                            Batal
                        </a>
                        <button type="submit"
                            class="inline-flex min-h-12 items-center justify-center rounded-lg bg-red-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-red-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 active:bg-red-800">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </main>
</x-layout>
