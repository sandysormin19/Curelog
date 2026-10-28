<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Cure Log</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700|bricolage-grotesque:600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>

<div class="login-page">
    <div class="login-wrapper">

        <div class="login-brand">
            <a href="{{ url('/') }}" class="login-logo">
                <span class="login-logo-icon">+</span>
                <span>Cure Log</span>
            </a>

            <div class="login-brand-content">
                <span class="login-badge">CURE LOG</span>

                <h1>
                    Orang tua minum obat tepat waktu,
                    <span>Anda tenang bekerja.</span>
                </h1>

                <p>
                    Pantau jadwal obat, pengingat pembelian ulang,
                    dan kebutuhan kesehatan keluarga dalam satu tempat.
                </p>

                <div class="login-benefits">
                    <div class="login-benefit">
                        <span class="benefit-icon">✓</span>
                        <div>
                            <strong>Pengingat obat</strong>
                            <small>Jangan sampai jadwal obat terlewat.</small>
                        </div>
                    </div>

                    <div class="login-benefit">
                        <span class="benefit-icon">✓</span>
                        <div>
                            <strong>Kontrol dari jauh</strong>
                            <small>Tetap memantau kebutuhan orang tua.</small>
                        </div>
                    </div>

                    <div class="login-benefit">
                        <span class="benefit-icon">✓</span>
                        <div>
                            <strong>Harga obat</strong>
                            <small>Bandingkan harga sebelum membeli.</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="login-brand-footer">
                © {{ date('Y') }} Cure Log
            </div>
        </div>

        <div class="login-form-area">
            <div class="login-form-container">

                <div class="login-mobile-logo">
                    <span class="login-logo-icon">+</span>
                    Cure Log
                </div>

                <div class="login-heading">
                    <h2>Selamat datang kembali</h2>
                    <p>Masuk ke akun Anda untuk melanjutkan.</p>
                </div>

                @if ($errors->any())
                    <div class="login-error">
                        <span>!</span>
                        <div>{{ $errors->first() }}</div>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf

                    <div class="login-input-group">
                        <label for="email">Email</label>

                        <div class="login-input-wrapper">
                            <span class="input-icon">✉</span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="nama@email.com"
                                autocomplete="email"
                                required
                                autofocus
                            >
                        </div>
                    </div>

                    <div class="login-input-group">
                        <label for="password">Password</label>

                        <div class="login-input-wrapper">
                            <span class="input-icon">●</span>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Masukkan password"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                onclick="togglePassword()"
                            >
                                Lihat
                            </button>
                        </div>
                    </div>

                    <div class="login-options">
                        <label class="remember-login">
                            <input type="checkbox" name="remember" value="1">
                            <span>Ingat saya</span>
                        </label>
                    </div>

                    <button type="submit" class="login-submit">
                        Masuk ke Cure Log
                        <span>→</span>
                    </button>
                </form>

                <div class="login-divider">
                    <span>atau</span>
                </div>

                <p class="login-register">
                    Belum punya akun?
                    <a href="{{ route('register') }}">Buat akun baru</a>
                </p>

                <a href="{{ url('/') }}" class="back-home">
                    ← Kembali ke halaman utama
                </a>

            </div>
        </div>

    </div>
</div>

<script>
function togglePassword() {
    const password = document.getElementById('password');
    const button = document.querySelector('.password-toggle');

    if (password.type === 'password') {
        password.type = 'text';
        button.textContent = 'Sembunyikan';
    } else {
        password.type = 'password';
        button.textContent = 'Lihat';
    }
}
</script>

</body>
</html>
