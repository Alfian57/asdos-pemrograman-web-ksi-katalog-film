<body>
    <h1>Ini halaman login</h1>

    @if (session('pesan-gagal'))
        <p style="color: red">{{ session('pesan-gagal') }}</p>
    @endif

    <form action="/login" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukan email">
            @error('email')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukan password">
            @error('password')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
