<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Koleksi Buku — Pustaka Nusantara</title>
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
    body::before {
      content: '';
      position: fixed; inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none; z-index: 9998; mix-blend-mode: multiply;
    }

    /* NAVBAR */
    .navbar {
      position: fixed; top: 0; width: 100%; z-index: 1000;
      background: rgba(245,240,232,.95); backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--border-dk);
    }
    .nav-inner {
      max-width: 1200px; margin: 0 auto;
      display: flex; align-items: center;
      padding: 0 2rem; height: 64px;
    }
    .nav-brand {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem; font-weight: 700;
      color: var(--ink); text-decoration: none; letter-spacing: .02em;
    }
    .nav-brand span { color: var(--gold); font-style: italic; }
    .nav-links {
      display: flex; gap: .25rem; margin-left: auto; list-style: none;
    }
    .nav-links a {
      font-size: .82rem; font-weight: 500; letter-spacing: .1em;
      text-transform: uppercase; color: var(--ink-soft);
      text-decoration: none; padding: .45rem .9rem;
      border-radius: var(--r); transition: all .2s;
    }
    .nav-links a:hover, .nav-links a.active { color: var(--ink); background: var(--parchment-dk); }
    .nav-toggle { display: none; background: none; border: none; cursor: pointer; padding: .5rem; }
    .nav-toggle span { display: block; width: 22px; height: 1.5px; background: var(--ink); margin: 5px 0; }

    /* PAGE HERO */
    .page-hero {
      padding: 110px 0 60px;
      background: var(--ink); position: relative; overflow: hidden;
    }
    .page-hero::before {
      content: '';
      position: absolute; inset: 0;
      background:
        repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(184,134,11,.05) 39px, rgba(184,134,11,.05) 40px),
        repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(184,134,11,.05) 39px, rgba(184,134,11,.05) 40px);
    }
    .page-hero-inner {
      max-width: 1200px; margin: 0 auto; padding: 0 2rem;
      position: relative; z-index: 1;
    }
    .page-hero-eyebrow {
      font-size: .72rem; font-weight: 600; letter-spacing: .18em;
      text-transform: uppercase; color: var(--gold);
      display: flex; align-items: center; gap: .75rem; margin-bottom: 1rem;
    }
    .page-hero-eyebrow::before { content: ''; display: block; width: 32px; height: 1px; background: var(--gold); }
    .page-hero-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2rem, 4vw, 3.5rem);
      font-weight: 700; color: #fff; margin-bottom: .75rem;
    }
    .page-hero-sub { font-size: 1rem; color: rgba(255,255,255,.55); font-weight: 300; }

    /* CONTENT AREA */
    .content-area {
      max-width: 1200px; margin: 0 auto;
      padding: 3rem 2rem 5rem;
    }

    /* TOOLBAR */
    .toolbar {
      display: flex; align-items: center; justify-content: space-between;
      margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;
    }
    .toolbar-left {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem; font-weight: 700; color: var(--ink);
    }
    .toolbar-left span { color: var(--ink-muted); font-size: 1rem; font-family: 'Jost', sans-serif; font-weight: 300; margin-left: .5rem; }
    .search-box {
      display: flex; align-items: center; gap: .5rem;
      border: 1px solid var(--border-dk); border-radius: var(--r);
      background: var(--cream); padding: 0 1rem;
      transition: border-color .2s;
    }
    .search-box:focus-within { border-color: var(--gold); }
    .search-box svg { color: var(--ink-muted); flex-shrink: 0; }
    .search-box input {
      border: none; background: none; outline: none;
      font-family: 'Jost', sans-serif; font-size: .88rem;
      color: var(--ink); padding: .7rem 0; width: 220px;
    }
    .search-box input::placeholder { color: var(--ink-muted); }

    /* GRID */
    .books-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 1.5rem;
    }

    /* BOOK CARD */
    .book-card {
      background: var(--cream);
      border: 1px solid var(--border);
      border-radius: var(--r);
      overflow: hidden;
      display: flex; flex-direction: column;
      transition: all .3s;
      position: relative;
    }
    .book-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-deep); border-color: var(--border-dk); }

    .book-cover {
      height: 200px; position: relative; overflow: hidden;
      display: flex; align-items: flex-end; padding: 1.25rem;
    }
    .cover-pattern {
      position: absolute; inset: 0;
      background-image:
        repeating-linear-gradient(45deg, rgba(255,255,255,.03) 0, rgba(255,255,255,.03) 1px, transparent 1px, transparent 12px),
        repeating-linear-gradient(-45deg, rgba(255,255,255,.03) 0, rgba(255,255,255,.03) 1px, transparent 1px, transparent 12px);
    }
    .cover-id {
      position: absolute; top: 1rem; right: 1rem;
      font-family: 'Cormorant Garamond', serif;
      font-size: .75rem; font-weight: 700;
      color: rgba(255,255,255,.5); letter-spacing: .06em;
    }
    .cover-genre {
      position: relative; z-index: 1;
      font-size: .65rem; font-weight: 600; letter-spacing: .14em;
      text-transform: uppercase; color: rgba(255,255,255,.75);
      background: rgba(255,255,255,.12); backdrop-filter: blur(4px);
      padding: .25rem .7rem; border-radius: 2px;
    }

    /* COLOR PALETTES */
    .book-card:nth-child(5n+1) .book-cover { background: linear-gradient(160deg, #2a5c5a, #13302f); }
    .book-card:nth-child(5n+2) .book-cover { background: linear-gradient(160deg, #6b4226, #3a1a08); }
    .book-card:nth-child(5n+3) .book-cover { background: linear-gradient(160deg, #b8860b, #7a5807); }
    .book-card:nth-child(5n+4) .book-cover { background: linear-gradient(160deg, #8b3a2a, #4a1510); }
    .book-card:nth-child(5n+5) .book-cover { background: linear-gradient(160deg, #3a5080, #1a2840); }

    .book-body {
      padding: 1.5rem; flex: 1; display: flex; flex-direction: column;
    }
    .book-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.15rem; font-weight: 700; line-height: 1.3;
      margin-bottom: .35rem; color: var(--ink);
    }
    .book-author {
      font-size: .82rem; color: var(--ink-muted); font-weight: 400;
      margin-bottom: auto; display: flex; align-items: center; gap: .35rem;
    }
    .book-author::before {
      content: ''; display: inline-block;
      width: 16px; height: 1px; background: var(--border-dk);
    }
    .book-price {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem; font-weight: 700;
      color: var(--teal); margin-top: 1.25rem;
      display: flex; align-items: baseline; gap: .25rem;
    }
    .book-price .currency {
      font-size: .8rem; font-family: 'Jost', sans-serif;
      font-weight: 500; color: var(--ink-muted); letter-spacing: .05em;
    }
    .stock-row {
      display: flex; align-items: center; justify-content: space-between;
      margin-top: .75rem; padding-top: .75rem;
      border-top: 1px solid var(--border);
    }
    .stock-badge {
      font-size: .68rem; font-weight: 600; letter-spacing: .1em;
      text-transform: uppercase; padding: .25rem .75rem; border-radius: 2px;
    }
    .stock-high   { background: #eaf5ee; color: #1a6632; }
    .stock-medium { background: #fdf5e5; color: #8a5a0a; }
    .stock-low    { background: #faeaea; color: #8a1a1a; }
    .stock-out    { background: var(--parchment-dk); color: var(--ink-muted); }

    .book-footer { padding: 0 1.5rem 1.5rem; }
    .btn-detail {
      width: 100%; border: 1.5px solid var(--ink);
      background: transparent; color: var(--ink);
      padding: .8rem 1.25rem;
      border-radius: var(--r);
      font-family: 'Jost', sans-serif;
      font-size: .78rem; font-weight: 600; letter-spacing: .1em;
      text-transform: uppercase;
      cursor: pointer; transition: all .2s;
      display: flex; align-items: center; justify-content: center; gap: .6rem;
    }
    .btn-detail:hover { background: var(--ink); color: var(--parchment); }
    .btn-detail:disabled { border-color: var(--border); color: var(--ink-muted); cursor: not-allowed; }
    .btn-detail:disabled:hover { background: transparent; color: var(--ink-muted); }

    /* MODAL OVERLAY */
    .modal-overlay {
      display: none; position: fixed; inset: 0;
      background: rgba(28,20,16,.7); z-index: 9000;
      align-items: center; justify-content: center;
      padding: 1rem;
      backdrop-filter: blur(4px);
    }
    .modal-overlay.open { display: flex; }

    .modal-box {
      background: var(--cream);
      border: 1px solid var(--border-dk);
      border-radius: var(--r);
      width: 100%; max-width: 560px;
      overflow: hidden;
      animation: slideUp .25s ease;
    }
    @keyframes slideUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .modal-head {
      background: var(--ink); padding: 1.5rem 2rem;
      display: flex; align-items: flex-start; justify-content: space-between; gap: 1rem;
    }
    .modal-head-lbl {
      font-size: .68rem; font-weight: 600; letter-spacing: .14em;
      text-transform: uppercase; color: var(--gold); margin-bottom: .35rem;
    }
    .modal-head-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.4rem; font-weight: 700; color: #fff; line-height: 1.2;
    }
    .modal-head-author { font-size: .82rem; color: rgba(255,255,255,.5); margin-top: .2rem; }
    .modal-close {
      background: rgba(255,255,255,.1); border: none;
      color: rgba(255,255,255,.7); width: 32px; height: 32px;
      border-radius: 2px; cursor: pointer; font-size: 1rem;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0; transition: all .2s;
    }
    .modal-close:hover { background: rgba(255,255,255,.2); color: #fff; }

    .modal-body { padding: 2rem; }
    .modal-info {
      display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;
      margin-bottom: 1.75rem;
    }
    .modal-info-box {
      background: var(--parchment);
      border: 1px solid var(--border);
      border-radius: var(--r); padding: 1rem 1.25rem;
    }
    .modal-info-lbl {
      font-size: .68rem; font-weight: 600; letter-spacing: .12em;
      text-transform: uppercase; color: var(--ink-muted); margin-bottom: .4rem;
    }
    .modal-info-val {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem; font-weight: 700; color: var(--ink);
    }
    .modal-info-val.price { color: var(--teal); }

    .qty-label {
      font-size: .78rem; font-weight: 600; letter-spacing: .1em;
      text-transform: uppercase; color: var(--ink-soft); margin-bottom: .75rem;
    }
    .qty-row {
      display: flex; align-items: center;
      border: 1px solid var(--border-dk); border-radius: var(--r);
      overflow: hidden; background: var(--parchment);
    }
    .qty-btn {
      width: 52px; height: 52px; border: none;
      background: var(--parchment-dk); cursor: pointer;
      font-size: 1.25rem; color: var(--ink);
      transition: background .2s; flex-shrink: 0;
    }
    .qty-btn:hover { background: var(--border); }
    .qty-input {
      flex: 1; border: none; background: transparent; outline: none;
      text-align: center; font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem; font-weight: 700; color: var(--ink);
      height: 52px;
    }

    .modal-footer {
      padding: 0 2rem 2rem;
      display: flex; gap: .75rem;
    }
    .btn-cancel {
      flex: 1; padding: .85rem;
      border: 1.5px solid var(--border-dk);
      background: transparent; color: var(--ink-soft);
      border-radius: var(--r);
      font-family: 'Jost', sans-serif; font-size: .78rem;
      font-weight: 600; letter-spacing: .1em; text-transform: uppercase;
      cursor: pointer; transition: all .2s;
    }
    .btn-cancel:hover { background: var(--parchment-dk); }
    .btn-beli {
      flex: 2; padding: .85rem;
      border: 1.5px solid var(--teal);
      background: var(--teal); color: #fff;
      border-radius: var(--r);
      font-family: 'Jost', sans-serif; font-size: .78rem;
      font-weight: 600; letter-spacing: .1em; text-transform: uppercase;
      cursor: pointer; transition: all .2s;
      display: flex; align-items: center; justify-content: center; gap: .5rem;
    }
    .btn-beli:hover { background: #1f4442; border-color: #1f4442; }

    /* TOAST */
    .toast-wrap {
      position: fixed; top: 5rem; right: 1.5rem; z-index: 9999;
      display: flex; flex-direction: column; gap: .75rem;
    }
    .toast {
      background: var(--ink); color: #fff;
      border-left: 3px solid var(--gold);
      border-radius: var(--r); padding: 1rem 1.5rem;
      max-width: 360px; box-shadow: var(--shadow-deep);
      font-size: .88rem; line-height: 1.5;
      animation: toastIn .3s ease;
    }
    .toast.error { border-left-color: var(--rust); }
    @keyframes toastIn {
      from { opacity: 0; transform: translateX(20px); }
      to   { opacity: 1; transform: translateX(0); }
    }
    .toast-title {
      font-size: .68rem; font-weight: 600; letter-spacing: .12em;
      text-transform: uppercase; color: var(--gold-lt); margin-bottom: .25rem;
    }
    .toast.error .toast-title { color: #e8a0a0; }

    /* EMPTY STATE */
    .empty-state {
      text-align: center; padding: 5rem 2rem;
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem; color: var(--ink-muted); font-style: italic;
    }

    /* DIVIDER */
    .divider {
      border: none; border-top: 1px solid var(--border);
      margin: 2rem 0;
    }

    /* FOOTER */
    footer { background: var(--ink-soft); color: rgba(255,255,255,.7); padding: 3rem 0 2rem; }
    .footer-inner {
      max-width: 1200px; margin: 0 auto; padding: 0 2rem;
      display: grid; grid-template-columns: 1fr auto; gap: 2rem; align-items: center;
    }
    .footer-brand {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.35rem; font-weight: 700; color: #fff; margin-bottom: .35rem;
    }
    .footer-brand span { color: var(--gold-lt); font-style: italic; }
    .footer-tagline { font-size: .85rem; font-weight: 300; }
    .footer-links { display: flex; gap: 1.5rem; list-style: none; align-items: center; }
    .footer-links a {
      font-size: .78rem; letter-spacing: .1em; text-transform: uppercase;
      color: rgba(255,255,255,.5); text-decoration: none; transition: color .2s;
    }
    .footer-links a:hover { color: #fff; }
    .footer-copy {
      max-width: 1200px; margin: 2rem auto 0; padding: 1.5rem 2rem 0;
      border-top: 1px solid rgba(255,255,255,.08);
      font-size: .75rem; color: rgba(255,255,255,.3); text-align: center;
    }

    @media (max-width: 900px) {
      .footer-inner { grid-template-columns: 1fr; }
      .nav-links { display: none; flex-direction: column; position: absolute; top: 64px; left: 0; right: 0; background: var(--parchment); border-bottom: 1px solid var(--border); padding: 1rem; }
      .nav-links.open { display: flex; }
      .nav-toggle { display: block; margin-left: auto; }
      .toolbar { flex-direction: column; align-items: flex-start; }
    }
    @media (max-width: 600px) {
      .modal-info { grid-template-columns: 1fr; }
    }
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
      <li><a href="index.php">Beranda</a></li>
      <li><a href="barang.php" class="active">Koleksi</a></li>
      <li><a href="tentang.php">Tentang</a></li>
    </ul>
  </div>
</nav>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="page-hero-inner">
    <div class="page-hero-eyebrow">Koleksi Premium</div>
    <h1 class="page-hero-title">Temukan Buku Favorit Anda</h1>
    <p class="page-hero-sub">Ribuan koleksi buku berkualitas tersedia untuk Anda</p>
  </div>
</div>

<!-- TOAST -->
<div class="toast-wrap" id="toastWrap"></div>

<!-- MODAL (single reusable) -->
<div class="modal-overlay" id="modalOverlay">
  <div class="modal-box" id="modalBox">
    <div class="modal-head">
      <div>
        <div class="modal-head-lbl">Transaksi Pembelian</div>
        <div class="modal-head-title" id="mTitle">—</div>
        <div class="modal-head-author" id="mAuthor">—</div>
      </div>
      <button class="modal-close" onclick="closeModal()">✕</button>
    </div>
    <form method="POST" action="barang.php" id="purchaseForm">
      <input type="hidden" name="aksi" value="beli">
      <input type="hidden" name="id_buku" id="mId">
      <div class="modal-body">
        <div class="modal-info">
          <div class="modal-info-box">
            <div class="modal-info-lbl">Stok Tersedia</div>
            <div class="modal-info-val" id="mStock">—</div>
          </div>
          <div class="modal-info-box">
            <div class="modal-info-lbl">Harga Per Buku</div>
            <div class="modal-info-val price" id="mPrice">—</div>
          </div>
        </div>
        <div class="qty-label">Jumlah Pembelian</div>
        <div class="qty-row">
          <button type="button" class="qty-btn" onclick="changeQty(-1)">−</button>
          <input type="number" name="jumlah" id="mQty" class="qty-input" value="1" min="1">
          <button type="button" class="qty-btn" onclick="changeQty(1)">+</button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cancel" onclick="closeModal()">Batal</button>
        <button type="submit" class="btn-beli">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          Beli Sekarang
        </button>
      </div>
    </form>
  </div>
</div>

<!-- CONTENT -->
<div class="content-area">

<?php
$success_message = '';
$error_message   = '';

$conn = mysqli_connect("localhost","root","","db_buku");

if (!$conn) {
  echo '<p class="empty-state">Koneksi database gagal.</p>';
  exit;
}
mysqli_set_charset($conn, "utf8mb4");

/* PROSES BELI */
if (
  $_SERVER['REQUEST_METHOD'] === 'POST' &&
  isset($_POST['aksi']) &&
  $_POST['aksi'] === 'beli'
) {
  $id_buku = trim($_POST['id_buku'] ?? '');
  $jumlah  = (int)($_POST['jumlah'] ?? 0);

  if ($jumlah < 1) {
    $error_message = "Jumlah tidak valid.";
  } else {
    $stmt = mysqli_prepare($conn,"SELECT * FROM data_buku WHERE id_buku = ?");
    mysqli_stmt_bind_param($stmt,"s",$id_buku);
    mysqli_stmt_execute($stmt);
    $book = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
    mysqli_stmt_close($stmt);

    if (!$book) {
      $error_message = "Buku tidak ditemukan.";
    } elseif ($jumlah > (int)$book['stok']) {
      $error_message = "Stok tidak mencukupi. Tersedia: " . $book['stok'] . " buku.";
    } else {
      $stok_baru = (int)$book['stok'] - $jumlah;
      $upd = mysqli_prepare($conn,"UPDATE data_buku SET stok=? WHERE id_buku=?");
      mysqli_stmt_bind_param($upd,"is",$stok_baru,$id_buku);
      if (mysqli_stmt_execute($upd)) {
        $success_message = "Berhasil membeli <strong>" . htmlspecialchars($book['nama_buku']) . "</strong> sebanyak {$jumlah} buku.";
      } else {
        $error_message = "Gagal memproses pembelian. Silakan coba lagi.";
      }
      mysqli_stmt_close($upd);
    }
  }
}

/* AMBIL DATA */
$query = mysqli_query($conn,"SELECT * FROM data_buku ORDER BY id_buku ASC");
$total = mysqli_num_rows($query);
?>

  <div class="toolbar">
    <div class="toolbar-left">
      Katalog Buku
      <span><?= $total ?> judul tersedia</span>
    </div>
    <div class="search-box">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
      <input type="text" placeholder="Cari judul atau penulis..." id="searchInput" oninput="filterBooks()">
    </div>
  </div>

<?php if ($total > 0): ?>
  <div class="books-grid" id="booksGrid">
  <?php while($row = mysqli_fetch_assoc($query)):
    $stok = (int)$row['stok'];
    $stok_class = $stok >= 50 ? 'stock-high' : ($stok >= 10 ? 'stock-medium' : ($stok > 0 ? 'stock-low' : 'stock-out'));
    $stok_text  = $stok > 0 ? "{$stok} tersedia" : "Stok Habis";
    $harga_fmt  = 'Rp ' . number_format($row['harga'], 0, ',', '.');
  ?>
  <article class="book-card"
    data-title="<?= strtolower(htmlspecialchars($row['nama_buku'])) ?>"
    data-author="<?= strtolower(htmlspecialchars($row['penulis'])) ?>">
    <div class="book-cover">
      <div class="cover-pattern"></div>
      <div class="cover-id">#<?= htmlspecialchars($row['id_buku']) ?></div>
      <span class="cover-genre">Buku</span>
    </div>
    <div class="book-body">
      <h3 class="book-title"><?= htmlspecialchars($row['nama_buku']) ?></h3>
      <p class="book-author"><?= htmlspecialchars($row['penulis']) ?></p>
      <div class="book-price">
        <span class="currency">Rp</span>
        <?= number_format($row['harga'],0,',','.') ?>
      </div>
      <div class="stock-row">
        <span class="stock-badge <?= $stok_class ?>"><?= $stok_text ?></span>
      </div>
    </div>
    <div class="book-footer">
      <button class="btn-detail"
        <?php if ($stok > 0): ?>
          onclick="openModal(
            '<?= htmlspecialchars(addslashes($row['id_buku'])) ?>',
            '<?= htmlspecialchars(addslashes($row['nama_buku'])) ?>',
            '<?= htmlspecialchars(addslashes($row['penulis'])) ?>',
            <?= $stok ?>,
            '<?= $harga_fmt ?>'
          )"
        <?php else: ?>
          disabled
        <?php endif; ?>>
        <?php if ($stok > 0): ?>
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          Detail & Beli
        <?php else: ?>
          Stok Habis
        <?php endif; ?>
      </button>
    </div>
  </article>
  <?php endwhile; ?>
  </div>
<?php else: ?>
  <p class="empty-state">Belum ada buku dalam koleksi.</p>
<?php endif; ?>

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

<script>
/* ── MODAL ── */
let currentMax = 1;

function openModal(id, title, author, stock, price) {
  currentMax = stock;
  document.getElementById('mId').value     = id;
  document.getElementById('mTitle').textContent  = title;
  document.getElementById('mAuthor').textContent = author;
  document.getElementById('mStock').textContent  = stock + ' buku';
  document.getElementById('mPrice').textContent  = price;
  const qtyInput = document.getElementById('mQty');
  qtyInput.value = 1;
  qtyInput.max   = stock;
  document.getElementById('modalOverlay').classList.add('open');
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  document.getElementById('modalOverlay').classList.remove('open');
  document.body.style.overflow = '';
}

document.getElementById('modalOverlay').addEventListener('click', function(e) {
  if (e.target === this) closeModal();
});

function changeQty(delta) {
  const inp = document.getElementById('mQty');
  let v = parseInt(inp.value) || 1;
  v = Math.min(Math.max(v + delta, 1), currentMax);
  inp.value = v;
}

/* ── SEARCH ── */
function filterBooks() {
  const q = document.getElementById('searchInput').value.toLowerCase();
  document.querySelectorAll('.book-card').forEach(card => {
    const match = card.dataset.title.includes(q) || card.dataset.author.includes(q);
    card.style.display = match ? '' : 'none';
  });
}

/* ── TOAST ── */
function showToast(msg, type = 'success') {
  const wrap = document.getElementById('toastWrap');
  const t = document.createElement('div');
  t.className = 'toast' + (type === 'error' ? ' error' : '');
  t.innerHTML = `<div class="toast-title">${type === 'error' ? 'Terjadi Kesalahan' : 'Transaksi Berhasil'}</div>${msg}`;
  wrap.appendChild(t);
  setTimeout(() => t.remove(), 5000);
}

<?php if ($success_message): ?>
window.addEventListener('DOMContentLoaded', () => showToast('<?= addslashes($success_message) ?>'));
<?php elseif ($error_message): ?>
window.addEventListener('DOMContentLoaded', () => showToast('<?= addslashes($error_message) ?>', 'error'));
<?php endif; ?>
</script>
</body>
</html>