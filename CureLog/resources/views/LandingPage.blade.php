<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cure Log — Pengingat Obat untuk Keluarga</title>

    <meta
        name="description"
        content="Cure Log membantu keluarga memantau obat orang tua, mengingatkan jadwal minum dan pembelian ulang obat, serta membandingkan harga obat."
    >

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600,700|bricolage-grotesque:600,700"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body>

{{-- =========================================================
     NAVBAR
========================================================= --}}

<header class="navbar">

    <div class="container nav-inner">

        {{-- LOGO --}}
        <a href="{{ url('/') }}" class="logo">
            <span class="logo-icon">+</span>
            <span>Cure Log</span>
        </a>

        {{-- MENU --}}
        <nav class="nav-menu">

            <a href="#masalah">
                Masalah
            </a>

            <a href="#solusi">
                Solusi
            </a>

            <a href="#untuk-siapa">
                Untuk Siapa
            </a>

            <a href="#tentang">
                Tentang
            </a>

        </nav>

        {{-- AUTH --}}
        <div class="nav-actions">

            @auth

                <a
                    href="{{ route('profile') }}"
                    class="btn btn-outline btn-small"
                >
                    Profile
                </a>

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

            @else

                <a
                    href="{{ route('login') }}"
                    class="btn btn-outline btn-small"
                >
                    Masuk
                </a>

                @if (Route::has('register'))

                    <a
                        href="{{ route('register') }}"
                        class="btn btn-primary btn-small"
                    >
                        Daftar
                    </a>

                @endif

            @endauth

        </div>

    </div>

</header>


<main>

{{-- =========================================================
     HERO
========================================================= --}}

<section class="hero">

    <div class="container hero-grid">

        <div class="hero-content">

            <span class="eyebrow">
                MANAJEMEN OBAT KELUARGA
            </span>

            <h1>
                Orang tua minum obat tepat waktu,
                <span>Anda tenang bekerja.</span>
            </h1>

            <p class="hero-text">
                Cure Log membantu keluarga memantau obat orang tua,
                mengingatkan jadwal minum dan beli ulang obat,
                serta membantu membandingkan harga obat dengan lebih mudah.
            </p>

            <div class="hero-actions">

                @auth

                    <a
                        href="#solusi"
                        class="btn btn-primary"
                    >
                        Lihat Fitur
                    </a>

                @else

                    @if (Route::has('register'))

                        <a
                            href="{{ route('register') }}"
                            class="btn btn-primary"
                        >
                            Mulai Gratis
                        </a>

                    @endif

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-outline"
                    >
                        Sudah punya akun?
                    </a>

                @endauth

            </div>

            <div class="hero-note">

                <span>✓</span>

                <span>
                    Untuk keluarga yang merawat orang tua
                    dari dekat maupun jauh
                </span>

            </div>

        </div>


        {{-- HERO PREVIEW --}}
        <div class="hero-card">

            <div class="card-header">

                <div>

                    <span class="card-label">
                        Jadwal Obat
                    </span>

                    <h3>
                        Ibu Hari Ini
                    </h3>

                </div>

                <span class="status-badge">
                    Terpantau
                </span>

            </div>


            {{-- OBAT 1 --}}
            <div class="medicine-item done">

                <div class="medicine-time">
                    07.00
                </div>

                <div class="medicine-info">

                    <strong>
                        Metformin 500 mg
                    </strong>

                    <span>
                        Sesudah sarapan
                    </span>

                </div>

                <span class="medicine-status">
                    ✓
                </span>

            </div>


            {{-- OBAT 2 --}}
            <div class="medicine-item">

                <div class="medicine-time">
                    19.00
                </div>

                <div class="medicine-info">

                    <strong>
                        Amlodipine 5 mg
                    </strong>

                    <span>
                        Sesudah makan malam
                    </span>

                </div>

                <span class="medicine-status waiting">
                    •
                </span>

            </div>


            {{-- STOCK --}}
            <div class="stock-card">

                <div>

                    <span>
                        Stok obat
                    </span>

                    <strong>
                        Amlodipine tinggal 4 hari
                    </strong>

                </div>

                <span class="stock-alert">
                    Segera beli
                </span>

            </div>


            {{-- PRICE --}}
            <div class="price-card">

                <div class="price-title">

                    <span>
                        Perbandingan harga
                    </span>

                    <strong>
                        Amlodipine 5 mg
                    </strong>

                </div>

                <div class="price-row">
                    <span>Apotek A</span>
                    <strong>Rp 28.000</strong>
                </div>

                <div class="price-row">
                    <span>Apotek B</span>
                    <span>Rp 31.500</span>
                </div>

                <div class="price-row">
                    <span>Apotek C</span>
                    <span>Rp 34.000</span>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     MASALAH
========================================================= --}}

<section
    class="section section-soft"
    id="masalah"
>

    <div class="container">

        <div class="section-heading">

            <span class="eyebrow">
                MASALAH
            </span>

            <h2>
                Merawat orang tua dari jauh
                tidak selalu mudah.
            </h2>

            <p>
                Pekerja yang memiliki orang tua sakit sering kali harus
                tetap bekerja sambil memastikan kebutuhan obat orang tua
                tetap terpenuhi.
            </p>

        </div>


        <div class="problem-grid">

            <article class="info-card">

                <div class="number">
                    01
                </div>

                <h3>
                    Lupa minum dan beli ulang obat
                </h3>

                <p>
                    Jadwal obat dapat terlewat dan stok obat dapat habis
                    tanpa disadari.
                </p>

            </article>


            <article class="info-card">

                <div class="number">
                    02
                </div>

                <h3>
                    Orang tua sakit sendirian di rumah
                </h3>

                <p>
                    Ketika anak sedang bekerja atau tinggal jauh,
                    kondisi orang tua sulit dipantau secara langsung.
                </p>

            </article>


            <article class="info-card">

                <div class="number">
                    03
                </div>

                <h3>
                    Harga obat sulit dibandingkan
                </h3>

                <p>
                    Obat yang sama dapat memiliki harga berbeda di
                    setiap apotek sehingga membutuhkan waktu untuk mengeceknya.
                </p>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     SOLUSI
========================================================= --}}

<section
    class="section"
    id="solusi"
>

    <div class="container">

        <div class="section-heading center">

            <span class="eyebrow">
                SOLUSI
            </span>

            <h2>
                Satu tempat untuk membantu
                mengelola kebutuhan obat keluarga.
            </h2>

            <p>
                Cure Log dirancang untuk membantu anak memantau kebutuhan
                kesehatan orang tua tanpa harus selalu berada di samping mereka.
            </p>

        </div>


        <div class="feature-grid">

            <article class="feature-card">

                <div class="feature-icon">
                    ⏰
                </div>

                <h3>
                    Pengingat Obat
                </h3>

                <p>
                    Mengingatkan jadwal minum obat agar dosis harian
                    tidak mudah terlewat.
                </p>

            </article>


            <article class="feature-card">

                <div class="feature-icon">
                    ↻
                </div>

                <h3>
                    Pengingat Beli Ulang
                </h3>

                <p>
                    Memberikan pengingat ketika persediaan obat
                    mulai mendekati habis.
                </p>

            </article>


            <article class="feature-card">

                <div class="feature-icon">
                    ♥
                </div>

                <h3>
                    Profil Kesehatan
                </h3>

                <p>
                    Menyimpan informasi kesehatan, obat yang digunakan,
                    dan kebutuhan keluarga dalam satu tempat.
                </p>

            </article>


            <article class="feature-card">

                <div class="feature-icon">
                    Rp
                </div>

                <h3>
                    Perbandingan Harga
                </h3>

                <p>
                    Membantu pengguna melihat perbedaan harga obat
                    dan lokasi pembeliannya.
                </p>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     UNTUK SIAPA
========================================================= --}}

<section
    class="section section-soft"
    id="untuk-siapa"
>

    <div class="container">

        <div class="section-heading">

            <span class="eyebrow">
                CUSTOMER SEGMENTS
            </span>

            <h2>
                Dibuat untuk keluarga
                yang membutuhkan pemantauan.
            </h2>

        </div>


        <div class="audience-grid">

            <article class="audience-card primary">

                <span class="audience-label">
                    UTAMA
                </span>

                <h3>
                    Pekerja Sibuk dengan Orang Tua Sakit
                </h3>

                <p>
                    Anak yang memiliki kesibukan pekerjaan tetapi tetap
                    ingin mengetahui jadwal obat, stok, dan kondisi orang tua.
                </p>

            </article>


            <article class="audience-card">

                <span class="audience-label">
                    PENGGUNA
                </span>

                <h3>
                    Lansia dan Pasien Kronis
                </h3>

                <p>
                    Pengguna yang membutuhkan pengingat untuk mengonsumsi
                    obat secara rutin dan teratur.
                </p>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     CHANNELS
========================================================= --}}

<section class="section">

    <div class="container two-column">

        <div class="section-heading">

            <span class="eyebrow">
                CHANNELS
            </span>

            <h2>
                Menjangkau keluarga
                melalui berbagai saluran.
            </h2>

            <p>
                Cure Log dapat diperkenalkan dan dikembangkan melalui
                saluran digital maupun jaringan komunitas kesehatan.
            </p>

        </div>


        <div class="list-card">

            <div class="list-item">

                <span class="list-number">
                    01
                </span>

                <div>

                    <strong>
                        Media Sosial
                    </strong>

                    <p>
                        Memperkenalkan Cure Log kepada keluarga dan pekerja.
                    </p>

                </div>

            </div>


            <div class="list-item">

                <span class="list-number">
                    02
                </span>

                <div>

                    <strong>
                        Komunitas Penyakit Kronis dan Apotek
                    </strong>

                    <p>
                        Membangun awareness melalui komunitas dan mitra kesehatan.
                    </p>

                </div>

            </div>


            <div class="list-item">

                <span class="list-number">
                    03
                </span>

                <div>

                    <strong>
                        Referral Keluarga
                    </strong>

                    <p>
                        Mendorong pengguna mengajak anggota keluarga lainnya.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     TENTANG
========================================================= --}}

<section
    class="section section-dark"
    id="tentang"
>

    <div class="container">

        <div class="section-heading light">

            <span class="eyebrow">
                UNFAIR ADVANTAGE
            </span>

            <h2>
                Semakin banyak digunakan,
                semakin kuat ekosistem Cure Log.
            </h2>

        </div>


        <div class="advantage-grid">

            <article>

                <span>
                    01
                </span>

                <h3>
                    Data Kepatuhan dan Harga
                </h3>

                <p>
                    Data penggunaan membantu membangun informasi harga
                    obat dan pola kepatuhan pengguna.
                </p>

            </article>


            <article>

                <span>
                    02
                </span>

                <h3>
                    Fokus pada Perawat dari Jauh
                </h3>

                <p>
                    Fitur dirancang khusus untuk keluarga yang tidak
                    dapat mendampingi orang tua setiap hari.
                </p>

            </article>


            <article>

                <span>
                    03
                </span>

                <h3>
                    Kemitraan Apotek dan Klinik
                </h3>

                <p>
                    Kemitraan dapat memperluas informasi harga,
                    lokasi, dan rujukan kesehatan.
                </p>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     KEY METRICS
========================================================= --}}

<section class="section">

    <div class="container">

        <div class="section-heading center">

            <span class="eyebrow">
                KEY METRICS
            </span>

            <h2>
                Mengukur apakah Cure Log
                benar-benar membantu pengguna.
            </h2>

        </div>


        <div class="metric-grid">

            <div class="metric-card">

                <strong>
                    Pengguna Aktif
                </strong>

                <span>
                    Jumlah pengguna aktif bulanan
                </span>

            </div>


            <div class="metric-card">

                <strong>
                    Kepatuhan Obat
                </strong>

                <span>
                    Tingkat kepatuhan terhadap jadwal minum obat
                </span>

            </div>


            <div class="metric-card">

                <strong>
                    Retensi
                </strong>

                <span>
                    Pengguna yang tetap menggunakan Cure Log
                </span>

            </div>


            <div class="metric-card">

                <strong>
                    Konversi Premium
                </strong>

                <span>
                    Pengguna gratis yang menggunakan paket premium
                </span>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     REVENUE + COST
========================================================= --}}

<section class="section section-soft">

    <div class="container business-grid">

        <div class="business-card">

            <span class="eyebrow">
                REVENUE STREAMS
            </span>

            <h2>
                Sumber Pendapatan
            </h2>

            <ul>

                <li>
                    Langganan premium
                </li>

                <li>
                    Komisi pembelian obat
                </li>

                <li>
                    Listing berbayar klinik/RS
                </li>

            </ul>

        </div>


        <div class="business-card">

            <span class="eyebrow">
                COST STRUCTURE
            </span>

            <h2>
                Struktur Biaya
            </h2>

            <ul>

                <li>
                    Pengembangan dan server
                </li>

                <li>
                    Data harga dan dokter
                </li>

                <li>
                    Apoteker validator, notifikasi, dan pemasaran
                </li>

            </ul>

        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}

<section class="cta">

    <div class="container cta-inner">

        <div>

            <span class="eyebrow">
                CURE LOG
            </span>

            <h2>
                Biarkan Cure Log membantu
                mengingatkan kebutuhan obat keluarga.
            </h2>

            <p>
                Orang tua lebih terpantau,
                Anda dapat bekerja dengan lebih tenang.
            </p>

        </div>


        <div>

            @auth

                <a
                    href="#solusi"
                    class="btn btn-white"
                >
                    Lihat Fitur
                </a>

                <a
                    href="{{ route('customize.features') }}"
                    class="btn btn-outline btn-white"
                >
                    Kustom Fitur
                </a>

            @else

                @if (Route::has('register'))

                    <a
                        href="{{ route('register') }}"
                        class="btn btn-white"
                    >
                        Mulai Gratis
                    </a>

                @endif

                <a
                    href="{{ route('customize.features') }}"
                    class="btn btn-outline btn-white"
                >
                    Kustom Fitur
                </a>

            @endauth

        </div>

    </div>

</section>


{{-- =========================================================
     FEEDBACK
========================================================= --}}

<section class="feedback-section" id="feedback">

    <div class="container feedback-grid">

        <div class="feedback-copy">
            <span class="eyebrow">
                FEEDBACK
            </span>

            <h2>
                Ceritakan pengalaman Anda
            </h2>

            <p>
                Apakah Cure Log membantu keluarga Anda? Beri tahu kami apa yang sudah bagus
                dan apa yang bisa kami tingkatkan agar lebih bermanfaat.
            </p>

            @if (session('feedback_success'))
                <div class="feedback-success">
                    {{ session('feedback_success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="feedback-error">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="feedback-card">
            <form method="POST" action="{{ route('feedback.store') }}" class="feedback-form">
                @csrf

                <div class="feedback-field">
                    <label for="name">Nama</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="feedback-field">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="nama@email.com">
                </div>

                <div class="feedback-field">
                    <label for="message">Feedback</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tulis feedback Anda di sini..." required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Kirim Feedback
                </button>
            </form>
        </div>

    </div>

    <div class="container feedback-list-wrap">
        <div class="feedback-list-header">
            <h3>Feedback terbaru</h3>
        </div>

        <div class="feedback-list">
            @forelse ($feedbacks as $item)
                <article class="feedback-item">
                    <div class="feedback-item-top">
                        <strong>{{ $item->name }}</strong>
                        <span>{{ $item->created_at->format('d M Y') }}</span>
                    </div>

                    <p>{{ $item->message }}</p>
                </article>
            @empty
                <div class="feedback-empty">
                    Belum ada feedback. Jadilah yang pertama mengirimkan pendapat.
                </div>
            @endforelse
        </div>
    </div>

</section>

</main>


{{-- =========================================================
     FOOTER
========================================================= --}}

<footer class="footer">

    <div class="container footer-inner">

        <a
            href="{{ url('/') }}"
            class="logo footer-logo"
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

</body>
</html>
