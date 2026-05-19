<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pustaka Nusantara — Perpustakaan Digital</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --ink:          #1c1410;
      --ink-soft:     #4a3f35;
      --ink-muted:    #8a7a6e;
      --parchment:    #f5f0e8;
      --parchment-dk: #ede5d5;
      --cream:        #faf7f2;
      --gold:         #b8860b;
      --gold-lt:      #d4a843;
      --rust:         #8b3a2a;
      --teal:         #2a5c5a;
      --border:       #d4c9b5;
      --border-dk:    #a89880;
      --shadow-warm:  0 2px 12px rgba(28,20,16,.10);
      --shadow-deep:  0 8px 32px rgba(28,20,16,.15);
      --r:            4px;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'Jost', sans-serif;
      background: var(--parchment);
      color: var(--ink);
      line-height: 1.7;
      overflow-x: hidden;
    }

    /* ── TEXTURE OVERLAY ── */
    body::before {
      content: '';
      position: fixed; inset: 0;
      background-image:
        url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none;
      z-index: 9998;
      mix-blend-mode: multiply;
    }

    /* ── NAVBAR ── */
    .navbar {
      position: fixed; top: 0; width: 100%; z-index: 1000;
      background: rgba(245,240,232,.95);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--border-dk);
      padding: 0;
    }
    .nav-inner {
      max-width: 1200px; margin: 0 auto;
      display: flex; align-items: center;
      padding: 0 2rem; height: 64px;
    }
    .nav-brand {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem; font-weight: 700;
      color: var(--ink); text-decoration: none;
      letter-spacing: .02em; white-space: nowrap;
    }
    .nav-brand span { color: var(--gold); font-style: italic; }
    .nav-links {
      display: flex; gap: .25rem;
      margin-left: auto; list-style: none;
    }
    .nav-links a {
      font-size: .82rem; font-weight: 500; letter-spacing: .1em;
      text-transform: uppercase; color: var(--ink-soft);
      text-decoration: none; padding: .45rem .9rem;
      border-radius: var(--r); transition: all .2s;
    }
    .nav-links a:hover, .nav-links a.active {
      color: var(--ink); background: var(--parchment-dk);
    }
    .nav-toggle { display: none; background: none; border: none; cursor: pointer; padding: .5rem; }
    .nav-toggle span {
      display: block; width: 22px; height: 1.5px;
      background: var(--ink); margin: 5px 0; transition: .3s;
    }

    /* ── ORNAMENT LINE ── */
    .ornament {
      display: flex; align-items: center; gap: 1rem;
      color: var(--gold); font-size: .75rem; letter-spacing: .3em;
      text-transform: uppercase;
    }
    .ornament::before, .ornament::after {
      content: ''; flex: 1; height: 1px; background: var(--gold-lt); opacity: .5;
    }

    /* ── HERO ── */
    .hero {
      min-height: 100vh;
      display: grid; grid-template-columns: 1fr 1fr;
      align-items: center;
      padding: 80px 0 0;
      position: relative; overflow: hidden;
    }
    .hero-bg {
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 60% 80% at 70% 50%, rgba(42,92,90,.06) 0%, transparent 70%),
        radial-gradient(ellipse 40% 60% at 20% 80%, rgba(184,134,11,.06) 0%, transparent 70%);
    }
    .hero-pattern {
      position: absolute; right: 0; top: 0; bottom: 0; width: 50%;
      background:
        repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(184,134,11,.07) 39px, rgba(184,134,11,.07) 40px),
        repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(184,134,11,.07) 39px, rgba(184,134,11,.07) 40px);
    }
    .hero-left {
      position: relative; z-index: 1;
      padding: 5rem 3rem 5rem 6rem;
    }
    .hero-eyebrow {
      font-size: .72rem; font-weight: 600; letter-spacing: .18em;
      text-transform: uppercase; color: var(--gold);
      display: flex; align-items: center; gap: .75rem;
      margin-bottom: 1.75rem;
    }
    .hero-eyebrow::before { content: ''; display: block; width: 32px; height: 1px; background: var(--gold); }
    .hero-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(3rem, 5vw, 5rem);
      font-weight: 700; line-height: 1.05;
      color: var(--ink); margin-bottom: 1.5rem;
    }
    .hero-title em {
      font-style: italic; color: var(--teal);
      display: block;
    }
    .hero-lead {
      font-size: 1.05rem; color: var(--ink-soft);
      max-width: 440px; margin-bottom: 3rem;
      font-weight: 300; line-height: 1.8;
    }
    .hero-cta {
      display: flex; gap: 1rem; flex-wrap: wrap;
    }
    .btn-primary {
      display: inline-flex; align-items: center; gap: .6rem;
      background: var(--ink); color: var(--parchment);
      text-decoration: none; padding: .85rem 2rem;
      font-size: .82rem; font-weight: 600; letter-spacing: .1em;
      text-transform: uppercase; border-radius: var(--r);
      transition: all .25s; border: 1.5px solid var(--ink);
    }
    .btn-primary:hover { background: var(--ink-soft); border-color: var(--ink-soft); }
    .btn-outline {
      display: inline-flex; align-items: center; gap: .6rem;
      background: transparent; color: var(--ink);
      text-decoration: none; padding: .85rem 2rem;
      font-size: .82rem; font-weight: 600; letter-spacing: .1em;
      text-transform: uppercase; border-radius: var(--r);
      transition: all .25s; border: 1.5px solid var(--border-dk);
    }
    .btn-outline:hover { border-color: var(--ink); background: var(--parchment-dk); }

    .hero-right {
      position: relative; z-index: 1;
      display: flex; align-items: center; justify-content: center;
      padding: 5rem 4rem 5rem 2rem;
    }
    .book-stack {
      position: relative; width: 280px; height: 380px;
    }
    .book-item {
      position: absolute;
      width: 180px; height: 260px;
      border-radius: 3px 8px 8px 3px;
      box-shadow: -4px 4px 20px rgba(28,20,16,.25);
      display: flex; align-items: center; justify-content: center;
    }
    .book-item:nth-child(1) {
      bottom: 0; left: 20px;
      background: linear-gradient(135deg, #2a5c5a, #1a3c3a);
      transform: rotate(-8deg);
      width: 165px; height: 240px;
    }
    .book-item:nth-child(2) {
      bottom: 20px; left: 50px;
      background: linear-gradient(135deg, #6b4226, #3d2010);
      transform: rotate(-2deg);
      width: 175px; height: 255px;
    }
    .book-item:nth-child(3) {
      bottom: 35px; left: 70px;
      background: linear-gradient(135deg, #b8860b, #7a5a07);
      transform: rotate(4deg);
      width: 170px; height: 250px;
    }
    .book-spine {
      writing-mode: vertical-rl; text-orientation: mixed;
      font-family: 'Cormorant Garamond', serif;
      font-size: .75rem; letter-spacing: .12em;
      color: rgba(255,255,255,.6); transform: rotate(180deg);
      text-transform: uppercase;
    }
    .hero-badge {
      position: absolute; top: 60px; right: -10px;
      background: var(--cream); border: 1px solid var(--border-dk);
      border-radius: 50%; width: 90px; height: 90px;
      display: flex; flex-direction: column; align-items: center;
      justify-content: center; box-shadow: var(--shadow-warm);
      font-family: 'Cormorant Garamond', serif;
    }
    .hero-badge .num {
      font-size: 1.5rem; font-weight: 700; color: var(--gold); line-height: 1;
    }
    .hero-badge .lbl {
      font-size: .6rem; letter-spacing: .08em; color: var(--ink-muted);
      text-transform: uppercase; text-align: center;
    }

    /* ── STATS ── */
    .stats {
      background: var(--ink);
      padding: 2.5rem 0;
    }
    .stats-inner {
      max-width: 1200px; margin: 0 auto; padding: 0 2rem;
      display: grid; grid-template-columns: repeat(4, 1fr);
      gap: 0;
    }
    .stat {
      text-align: center; padding: 1.5rem;
      border-right: 1px solid rgba(255,255,255,.08);
    }
    .stat:last-child { border-right: none; }
    .stat-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 2.8rem; font-weight: 700; line-height: 1;
      color: var(--gold-lt);
    }
    .stat-lbl {
      font-size: .72rem; letter-spacing: .12em; text-transform: uppercase;
      color: rgba(255,255,255,.45); margin-top: .4rem;
    }

    /* ── SECTION ── */
    .section {
      max-width: 1200px; margin: 0 auto;
      padding: 6rem 2rem;
    }
    .section-head { text-align: center; margin-bottom: 4rem; }
    .section-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 5rem; font-weight: 700;
      color: var(--parchment-dk); line-height: 1;
      display: block; margin-bottom: -.5rem;
    }
    .section-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2rem, 3.5vw, 3rem);
      font-weight: 700; color: var(--ink);
      position: relative; display: inline-block;
    }
    .section-title::after {
      content: ''; display: block;
      width: 60px; height: 2px;
      background: var(--gold); margin: .75rem auto 0;
    }
    .section-sub {
      color: var(--ink-muted); font-size: 1rem;
      max-width: 480px; margin: 1.25rem auto 0;
      font-weight: 300;
    }

    /* ── GENRE CARDS ── */
    .genre-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }
    .genre-card {
      position: relative; overflow: hidden;
      border-radius: var(--r);
      border: 1px solid var(--border);
      background: var(--cream);
      transition: all .3s;
      text-decoration: none; color: inherit;
    }
    .genre-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-deep); border-color: var(--border-dk); }
    .genre-cover {
      height: 200px; position: relative;
      display: flex; align-items: flex-end; padding: 1.5rem;
    }
    .genre-cover::before {
      content: ''; position: absolute; inset: 0;
      background: linear-gradient(to top, rgba(28,20,16,.7) 0%, transparent 60%);
    }
    .genre-number {
      position: absolute; top: 1.25rem; right: 1.25rem;
      font-family: 'Cormorant Garamond', serif;
      font-size: 3rem; font-weight: 700; line-height: 1;
      color: rgba(255,255,255,.15);
    }
    .genre-tag {
      position: relative; z-index: 1;
      font-size: .68rem; font-weight: 600; letter-spacing: .14em;
      text-transform: uppercase; color: rgba(255,255,255,.8);
      background: rgba(255,255,255,.15); backdrop-filter: blur(4px);
      padding: .3rem .75rem; border-radius: 2px;
    }
    .genre-body { padding: 1.5rem; }
    .genre-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.35rem; font-weight: 700;
      margin-bottom: .5rem; color: var(--ink);
    }
    .genre-desc {
      font-size: .88rem; color: var(--ink-muted);
      line-height: 1.7; font-weight: 300;
    }
    .genre-arrow {
      display: inline-flex; align-items: center; gap: .4rem;
      margin-top: 1rem; font-size: .75rem; font-weight: 600;
      letter-spacing: .1em; text-transform: uppercase; color: var(--gold);
      transition: gap .2s;
    }
    .genre-card:hover .genre-arrow { gap: .75rem; }

    /* ── QUOTE SECTION ── */
    .quote-section {
      background: var(--ink);
      padding: 6rem 2rem;
      text-align: center;
      position: relative; overflow: hidden;
    }
    .quote-section::before {
      content: '"';
      position: absolute; left: 2rem; top: -2rem;
      font-family: 'Cormorant Garamond', serif;
      font-size: 20rem; font-weight: 700;
      color: rgba(255,255,255,.03); line-height: 1;
    }
    .quote-text {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(1.6rem, 3vw, 2.4rem);
      font-style: italic; font-weight: 400;
      color: rgba(255,255,255,.9); line-height: 1.5;
      max-width: 700px; margin: 0 auto 1.5rem;
      position: relative; z-index: 1;
    }
    .quote-author {
      font-size: .78rem; letter-spacing: .18em;
      text-transform: uppercase; color: var(--gold-lt);
      position: relative; z-index: 1;
    }

    /* ── CTA ── */
    .cta-section {
      padding: 6rem 2rem;
      background: var(--parchment-dk);
      text-align: center;
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
    }
    .cta-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 700; color: var(--ink);
      margin-bottom: 1rem;
    }
    .cta-sub {
      font-size: 1rem; color: var(--ink-muted);
      margin-bottom: 2.5rem; font-weight: 300;
    }

    /* ── FOOTER ── */
    footer {
      background: var(--ink-soft);
      color: rgba(255,255,255,.7);
      padding: 3rem 0 2rem;
    }
    .footer-inner {
      max-width: 1200px; margin: 0 auto;
      padding: 0 2rem;
      display: grid; grid-template-columns: 1fr auto;
      gap: 2rem; align-items: center;
    }
    .footer-brand {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.35rem; font-weight: 700;
      color: #fff; margin-bottom: .35rem;
    }
    .footer-brand span { color: var(--gold-lt); font-style: italic; }
    .footer-tagline { font-size: .85rem; font-weight: 300; }
    .footer-links {
      display: flex; gap: 1.5rem; list-style: none;
      align-items: center;
    }
    .footer-links a {
      font-size: .78rem; letter-spacing: .1em;
      text-transform: uppercase; color: rgba(255,255,255,.5);
      text-decoration: none; transition: color .2s;
    }
    .footer-links a:hover { color: #fff; }
    .footer-copy {
      max-width: 1200px; margin: 0 auto;
      padding: 1.5rem 2rem 0;
      border-top: 1px solid rgba(255,255,255,.08);
      font-size: .75rem; color: rgba(255,255,255,.3);
      text-align: center; margin-top: 2rem;
    }

    /* ── MOBILE ── */
    @media (max-width: 900px) {
      .hero { grid-template-columns: 1fr; min-height: auto; padding-top: 64px; }
      .hero-left { padding: 4rem 2rem 2rem; }
      .hero-right { padding: 2rem; display: none; }
      .genre-grid { grid-template-columns: 1fr; }
      .stats-inner { grid-template-columns: repeat(2, 1fr); }
      .stat { border-right: none; border-bottom: 1px solid rgba(255,255,255,.08); }
      .stat:nth-child(odd) { border-right: 1px solid rgba(255,255,255,.08); }
      .footer-inner { grid-template-columns: 1fr; }
      .nav-links { display: none; flex-direction: column; position: absolute; top: 64px; left: 0; right: 0; background: var(--parchment); border-bottom: 1px solid var(--border); padding: 1rem; }
      .nav-links.open { display: flex; }
      .nav-toggle { display: block; margin-left: auto; }
      .hero-pattern { display: none; }
    }

    /* ── ANIMATIONS ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-eyebrow { animation: fadeUp .6s ease both; }
    .hero-title   { animation: fadeUp .7s .1s ease both; }
    .hero-lead    { animation: fadeUp .7s .2s ease both; }
    .hero-cta     { animation: fadeUp .7s .3s ease both; }
    .book-stack   { animation: fadeUp .9s .4s ease both; }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="nav-inner">
    <a class="nav-brand" href="index.php">Pustaka <span>Nusantara</span></a>
    <button class="nav-toggle" onclick="this.nextElementSibling.classList.toggle('open')">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links">
      <li><a href="index.php" class="active">Beranda</a></li>
      <li><a href="barang.php">Koleksi</a></li>
      <li><a href="tentang.php">Tentang</a></li>
    </ul>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-pattern"></div>

  <div class="hero-left">
    <div class="hero-eyebrow">Perpustakaan Digital Indonesia</div>
    <h1 class="hero-title">
      Dunia Penuh<br>
      <em>Pengetahuan</em>
      di Ujung Jari
    </h1>
    <p class="hero-lead">
      Ribuan buku pilihan dari penulis terbaik — tersedia kapan saja,
      di mana saja. Mulai perjalanan literasi Anda hari ini.
    </p>
    <div class="hero-cta">
      <a href="barang.php" class="btn-primary">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        Jelajahi Koleksi
      </a>
      <a href="tentang.php" class="btn-outline">Tentang Kami</a>
    </div>
  </div>

  <div class="hero-right">
    <div class="book-stack">
      <div class="book-item">
        <span class="book-spine">Sejarah Nusantara</span>
      </div>
      <div class="book-item">
        <span class="book-spine">Filsafat Timur</span>
      </div>
      <div class="book-item">
        <span class="book-spine">Sastra Indonesia</span>
      </div>
      <div class="hero-badge">
        <span class="num">10K+</span>
        <span class="lbl">Judul Buku</span>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<div class="stats">
  <div class="stats-inner">
    <div class="stat">
      <div class="stat-num">10.000+</div>
      <div class="stat-lbl">Judul Buku</div>
    </div>
    <div class="stat">
      <div class="stat-num">5.000+</div>
      <div class="stat-lbl">Pengguna Aktif</div>
    </div>
    <div class="stat">
      <div class="stat-num">2+</div>
      <div class="stat-lbl">Tahun Beroperasi</div>
    </div>
    <div class="stat">
      <div class="stat-num">99%</div>
      <div class="stat-lbl">Kepuasan Pelanggan</div>
    </div>
  </div>
</div>

<!-- GENRE SECTION -->
<div class="section">
  <div class="section-head">
    <div class="ornament">Koleksi Pilihan</div>
    <span class="section-num">01</span>
    <h2 class="section-title">Genre Unggulan</h2>
    <p class="section-sub">Dari filsafat hingga teknologi — semua tersedia dalam satu platform</p>
  </div>

  <div class="genre-grid">
    <a href="barang.php" class="genre-card">
      <div class="genre-cover" style="background: linear-gradient(145deg, #2a5c5a 0%, #1a3c3a 100%);">
        <div class="genre-number">01</div>
        <span class="genre-tag">Filsafat</span>
      </div>
      <div class="genre-body">
        <h3 class="genre-title">Filsafat & Pemikiran</h3>
        <p class="genre-desc">Eksplorasi pemikiran kontemporer dan klasik dari para filsuf terkemuka dunia Timur dan Barat.</p>
        <span class="genre-arrow">Lihat Koleksi →</span>
      </div>
    </a>

    <a href="barang.php" class="genre-card">
      <div class="genre-cover" style="background: linear-gradient(145deg, #6b4226 0%, #3d2010 100%);">
        <div class="genre-number">02</div>
        <span class="genre-tag">Sastra</span>
      </div>
      <div class="genre-body">
        <h3 class="genre-title">Sastra Indonesia</h3>
        <p class="genre-desc">Karya-karya terbaik penulis Indonesia dari era Pujangga Baru hingga generasi kontemporer.</p>
        <span class="genre-arrow">Lihat Koleksi →</span>
      </div>
    </a>

    <a href="barang.php" class="genre-card">
      <div class="genre-cover" style="background: linear-gradient(145deg, #b8860b 0%, #7a5a07 100%);">
        <div class="genre-number">03</div>
        <span class="genre-tag">Sains & Teknologi</span>
      </div>
      <div class="genre-body">
        <h3 class="genre-title">Sains & Teknologi</h3>
        <p class="genre-desc">Pengetahuan terkini tentang inovasi, penemuan ilmiah, dan perkembangan teknologi masa depan.</p>
        <span class="genre-arrow">Lihat Koleksi →</span>
      </div>
    </a>
  </div>
</div>

<!-- QUOTE -->
<div class="quote-section">
  <p class="quote-text">
    "Membaca adalah menghirup dunia yang tak terbatas dalam ruang yang tak berbatas."
  </p>
  <span class="quote-author">— Pramoedya Ananta Toer</span>
</div>

<!-- CTA -->
<div class="cta-section">
  <h2 class="cta-title">Siap Memulai Perjalanan Literasi?</h2>
  <p class="cta-sub">Temukan buku impian Anda dari koleksi kami yang terus bertambah setiap minggu.</p>
  <a href="barang.php" class="btn-primary" style="display: inline-flex;">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
    Lihat Semua Koleksi
  </a>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div>
      <div class="footer-brand">Pustaka <span>Nusantara</span></div>
      <div class="footer-tagline">Membawa pengetahuan berkualitas ke mana pun Anda pergi.</div>
    </div>
    <ul class="footer-links">
      <li><a href="index.php">Beranda</a></li>
      <li><a href="barang.php">Koleksi</a></li>
      <li><a href="tentang.php">Tentang</a></li>
    </ul>
  </div>
  <div class="footer-copy">&copy; 2026 Pustaka Nusantara. Seluruh hak cipta dilindungi.</div>
</footer>

</body>
</html>