<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kustom Fitur - Cure Log</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700|bricolage-grotesque:600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>

<header class="navbar">
    <div class="container nav-inner">
        <a href="{{ url('/') }}" class="logo">
            <span class="logo-icon">+</span>
            <span>Cure Log</span>
        </a>

        <nav class="nav-menu">
            <a href="{{ url('/') }}#solusi">Solusi</a>
            <a href="{{ url('/') }}#untuk-siapa">Untuk Siapa</a>
            <a href="{{ url('/') }}#feedback">Feedback</a>
        </nav>

        <div class="nav-actions">
            <a href="{{ url('/') }}" class="btn btn-outline btn-small">Kembali</a>
        </div>
    </div>
</header>

<main>
    <section class="custom-feature-hero">
        <div class="container custom-feature-wrap">
            <div class="custom-feature-copy">
                <span class="eyebrow">CUSTOMIZE</span>
                <h1>Atur fitur sesuai kebutuhan keluarga Anda</h1>
                <p>
                    Pilih fitur yang paling penting bagi kebutuhan pengingat obat di rumah.
                    Preferensi ini akan tersimpan di browser Anda, tanpa mengubah contoh landing page utama.
                </p>
            </div>

            <div class="custom-feature-panel">
                <div class="custom-feature-item active">
                    <div>
                        <span class="feature-tag">Prioritas 1</span>
                        <h3>Pengingat Obat</h3>
                    </div>
                    <button type="button">Aktif</button>
                </div>

                <div class="custom-feature-item">
                    <div>
                        <span class="feature-tag">Prioritas 2</span>
                        <h3>Jadwal Keluarga</h3>
                    </div>
                    <button type="button">Aktif</button>
                </div>

                <div class="custom-feature-item">
                    <div>
                        <span class="feature-tag">Prioritas 3</span>
                        <h3>Bandingkan Harga Obat</h3>
                    </div>
                    <button type="button">Nonaktif</button>
                </div>

                <div class="custom-feature-item">
                    <div>
                        <span class="feature-tag">Prioritas 4</span>
                        <h3>Catatan Kesehatan</h3>
                    </div>
                    <button type="button">Aktif</button>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-soft">
        <div class="container custom-feature-grid">
            <div class="custom-option-card">
                <span class="eyebrow">PILIHAN</span>
                <h2>Yang ingin ditampilkan</h2>

                <form id="feature-form" class="feature-form">
                    <label class="checkbox-row">
                        <input type="checkbox" name="feature" value="Pengingat minum obat" checked>
                        <span>Pengingat minum obat</span>
                    </label>

                    <label class="checkbox-row">
                        <input type="checkbox" name="feature" value="Riwayat pengingat" checked>
                        <span>Riwayat pengingat</span>
                    </label>

                    <label class="checkbox-row">
                        <input type="checkbox" name="feature" value="Pengelolaan stok obat">
                        <span>Pengelolaan stok obat</span>
                    </label>

                    <label class="checkbox-row">
                        <input type="checkbox" name="feature" value="Notifikasi keluarga" checked>
                        <span>Notifikasi keluarga</span>
                    </label>

                    <label class="checkbox-row">
                        <input type="checkbox" name="feature" value="Bandingkan harga obat">
                        <span>Bandingkan harga obat</span>
                    </label>

                    <div class="feature-actions">
                        <button type="submit" class="btn btn-primary">Simpan Preferensi</button>
                        <button type="button" class="btn btn-outline" id="reset-features">Reset</button>
                    </div>
                </form>
            </div>

            <div class="custom-option-card">
                <span class="eyebrow">PENGATURAN</span>
                <h2>Sesuaikan dengan kebutuhan</h2>

                <div class="toggle-row">
                    <span>Notifikasi SMS</span>
                    <label class="switch">
                        <input type="checkbox" class="setting-toggle" data-setting="sms" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="toggle-row">
                    <span>Pengingat WhatsApp</span>
                    <label class="switch">
                        <input type="checkbox" class="setting-toggle" data-setting="whatsapp" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="toggle-row">
                    <span>Riwayat konsumsi obat</span>
                    <label class="switch">
                        <input type="checkbox" class="setting-toggle" data-setting="history">
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="feature-summary">
                    <h3>Preferensi aktif</h3>
                    <ul id="feature-summary-list">
                        <li>Pengingat minum obat</li>
                        <li>Riwayat pengingat</li>
                        <li>Notifikasi keluarga</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container footer-inner">
        <a href="{{ url('/') }}" class="logo footer-logo">
            <span class="logo-icon">+</span>
            <span>Cure Log</span>
        </a>

        <p>Cure Log membantu mengingatkan dan membandingkan kebutuhan obat keluarga.</p>

        <span>© {{ date('Y') }} Cure Log</span>
    </div>
</footer>

<script>
    const STORAGE_KEY = 'curelog_custom_features';
    const form = document.getElementById('feature-form');
    const summaryList = document.getElementById('feature-summary-list');
    const resetBtn = document.getElementById('reset-features');

    const defaultFeatures = [
        'Pengingat minum obat',
        'Riwayat pengingat',
        'Notifikasi keluarga'
    ];

    function renderSummary(items) {
        if (!summaryList) return;

        summaryList.innerHTML = '';

        if (!items.length) {
            summaryList.innerHTML = '<li>Belum ada fitur yang dipilih.</li>';
            return;
        }

        items.forEach((item) => {
            const li = document.createElement('li');
            li.textContent = item;
            summaryList.appendChild(li);
        });
    }

    function loadFromStorage() {
        const saved = localStorage.getItem(STORAGE_KEY);

        if (!saved) {
            renderSummary(defaultFeatures);
            return;
        }

        try {
            const parsed = JSON.parse(saved);
            const features = Array.isArray(parsed) ? parsed : defaultFeatures;

            const checkboxes = document.querySelectorAll('input[name="feature"]');
            checkboxes.forEach((checkbox) => {
                checkbox.checked = features.includes(checkbox.value);
            });

            renderSummary(features.filter(Boolean));
        } catch (error) {
            renderSummary(defaultFeatures);
        }
    }

    function saveFeatures() {
        const selected = [...document.querySelectorAll('input[name="feature"]:checked')]
            .map((input) => input.value);

        localStorage.setItem(STORAGE_KEY, JSON.stringify(selected));
        renderSummary(selected);
    }

    if (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            saveFeatures();
            const button = form.querySelector('button[type="submit"]');
            button.textContent = 'Tersimpan';
            setTimeout(() => {
                button.textContent = 'Simpan Preferensi';
            }, 1200);
        });
    }

    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            const checkboxes = document.querySelectorAll('input[name="feature"]');
            checkboxes.forEach((checkbox) => {
                checkbox.checked = defaultFeatures.includes(checkbox.value);
            });

            localStorage.setItem(STORAGE_KEY, JSON.stringify(defaultFeatures));
            renderSummary(defaultFeatures);
        });
    }

    document.querySelectorAll('.setting-toggle').forEach((toggle) => {
        toggle.addEventListener('change', function () {
            const key = this.dataset.setting;
            const value = this.checked;
            const savedSettings = JSON.parse(localStorage.getItem('curelog_settings') || '{}');
            savedSettings[key] = value;
            localStorage.setItem('curelog_settings', JSON.stringify(savedSettings));
        });
    });

    loadFromStorage();
</script>
</body>
</html>
