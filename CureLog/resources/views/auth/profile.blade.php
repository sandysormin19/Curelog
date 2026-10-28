<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - Cure Log</title>

    <meta
        name="description"
        content="Kelola profil dan keamanan akun Cure Log."
    >

    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600,700|bricolage-grotesque:600,700"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/landing.css') }}"
    >
</head>

<body>

<header class="navbar">

    <div class="container nav-inner">

        <a
            href="{{ route('home') }}"
            class="logo"
        >
            <span class="logo-icon">+</span>
            <span>Cure Log</span>
        </a>


        <nav class="nav-menu">

            <a href="{{ route('home') }}#masalah">
                Masalah
            </a>

            <a href="{{ route('home') }}#solusi">
                Solusi
            </a>

            <a href="{{ route('home') }}#untuk-siapa">
                Untuk Siapa
            </a>

            <a href="{{ route('home') }}#tentang">
                Tentang
            </a>

        </nav>


        <div class="nav-actions">

            <span class="user-greeting">
                Halo, {{ auth()->user()->name }} 👋
            </span>

            <form
                method="POST"
                action="{{ route('logout') }}"
            >
                @csrf

                <button
                    type="submit"
                    class="btn btn-outline btn-small"
                >
                    Keluar
                </button>
            </form>

        </div>

    </div>

</header>


<main class="profile-page">

    <div class="container profile-container">

        {{-- HEADER --}}

        <div class="profile-heading">

            <span class="eyebrow">
                AKUN SAYA
            </span>

            <h1>
                Profile
            </h1>

            <p>
                Kelola informasi dan keamanan akun Cure Log Anda.
            </p>

        </div>


        {{-- SUCCESS --}}

        @if (session('success'))

            <div class="profile-success">
                <span>✓</span>

                <span>
                    {{ session('success') }}
                </span>
            </div>

        @endif


        {{-- ERROR --}}

        @if ($errors->any())

            <div class="profile-error">

                <strong>
                    Terjadi kesalahan
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- =====================================================
             EDIT PROFILE
        ====================================================== --}}

        <section class="profile-card">

            <div class="profile-card-heading">

                <div>

                    <span class="profile-card-label">
                        INFORMASI AKUN
                    </span>

                    <h2>
                        Edit Profile
                    </h2>

                    <p>
                        Perbarui nama dan email akun Anda.
                    </p>

                </div>


                <div class="profile-avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>

            </div>


            <form
                method="POST"
                action="{{ route('profile.update') }}"
                class="profile-form"
            >

                @csrf

                @method('PUT')


                {{-- NAME --}}

                <div class="profile-field">

                    <label for="name">
                        Nama
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', auth()->user()->name) }}"
                        placeholder="Nama Anda"
                        autocomplete="name"
                        required
                    >

                </div>


                {{-- EMAIL --}}

                <div class="profile-field">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', auth()->user()->email) }}"
                        placeholder="nama@email.com"
                        autocomplete="email"
                        required
                    >

                </div>


                <div class="profile-form-actions">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </section>


        {{-- =====================================================
             CHANGE PASSWORD
        ====================================================== --}}

        <section class="profile-card">

            <div class="profile-card-heading">

                <div>

                    <span class="profile-card-label">
                        KEAMANAN
                    </span>

                    <h2>
                        Change Password
                    </h2>

                    <p>
                        Ubah password untuk menjaga keamanan akun Anda.
                    </p>

                </div>

            </div>


            <form
                method="POST"
                action="{{ route('profile.password') }}"
                class="profile-form"
            >

                @csrf

                @method('PUT')


                {{-- CURRENT PASSWORD --}}

                <div class="profile-field">

                    <label for="current_password">
                        Password Saat Ini
                    </label>

                    <input
                        type="password"
                        id="current_password"
                        name="current_password"
                        placeholder="Masukkan password saat ini"
                        autocomplete="current-password"
                        required
                    >

                </div>


                {{-- NEW PASSWORD --}}

                <div class="profile-field">

                    <label for="password">
                        Password Baru
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Minimal 8 karakter"
                        autocomplete="new-password"
                        required
                    >

                    <small>
                        Password minimal 8 karakter.
                    </small>

                </div>


                {{-- CONFIRM PASSWORD --}}

                <div class="profile-field">

                    <label for="password_confirmation">
                        Konfirmasi Password Baru
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Ulangi password baru"
                        autocomplete="new-password"
                        required
                    >

                </div>


                <div class="profile-form-actions">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Ubah Password
                    </button>

                </div>

            </form>

        </section>


        {{-- =====================================================
             DELETE ACCOUNT
        ====================================================== --}}

        <section class="profile-card profile-danger-card">

            <div class="profile-card-heading">

                <div>

                    <span class="profile-card-label danger">
                        DANGER ZONE
                    </span>

                    <h2>
                        Delete My Account
                    </h2>

                    <p>
                        Menghapus akun akan menghapus akun Cure Log
                        Anda secara permanen.
                    </p>

                </div>

            </div>


            <form
                method="POST"
                action="{{ route('profile.destroy') }}"
                class="profile-form"
                onsubmit="return confirmDeleteAccount()"
            >

                @csrf

                @method('DELETE')


                <div class="profile-field">

                    <label for="delete_password">
                        Password Saat Ini
                    </label>

                    <input
                        type="password"
                        id="delete_password"
                        name="password"
                        placeholder="Masukkan password untuk konfirmasi"
                        autocomplete="current-password"
                        required
                    >

                    <small>
                        Password diperlukan untuk mengonfirmasi
                        penghapusan akun.
                    </small>

                </div>


                <div class="profile-form-actions">

                    <button
                        type="submit"
                        class="btn btn-danger"
                    >
                        Delete My Account
                    </button>

                </div>

            </form>

        </section>


        {{-- BACK --}}

        <div class="profile-back">

            <a href="{{ route('home') }}">
                ← Kembali ke halaman utama
            </a>

        </div>

    </div>

</main>


<footer class="footer">

    <div class="container footer-inner">

        <a
            href="{{ route('home') }}"
            class="logo"
        >

            <span class="logo-icon">
                +
            </span>

            <span>
                Cure Log
            </span>

        </a>


        <p>
            Cure Log membantu mengingatkan dan membandingkan
            kebutuhan obat keluarga.
        </p>


        <span>
            © {{ date('Y') }} Cure Log
        </span>

    </div>

</footer>


<script>
    function confirmDeleteAccount() {
        return confirm(
            'Apakah Anda yakin ingin menghapus akun? Akun yang sudah dihapus tidak dapat dikembalikan.'
        );
    }
</script>

</body>
</html>
