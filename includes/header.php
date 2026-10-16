<?php
// header.php — included on every page
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  $page_titles = [
    'index'   => 'ÉVORÈL Parfums — Niche Luxury Fragrances',
    'shop'    => 'Shop All Fragrances — ÉVORÈL Parfums',
    'house'   => 'Our House — The Story of ÉVORÈL Parfums',
    'journal' => 'Journal — ÉVORÈL Parfums',
    'contact' => 'Contact Us — ÉVORÈL Parfums',
  ];
  $page_descs = [
    'index'   => 'ÉVORÈL is a niche luxury fragrance house crafting rare, artisanal perfumes inspired by memory, nature, and the passage of time.',
    'shop'    => 'Explore the full ÉVORÈL fragrance collection. Artisanal Eau de Parfums crafted with the rarest natural ingredients.',
    'house'   => 'Discover the philosophy, sourcing ethics, and artisanal craft behind every ÉVORÈL fragrance.',
    'journal' => 'Fragrance rituals, ingredient stories, and editorial chapters from the world of ÉVORÈL.',
    'contact' => 'Reach out to the ÉVORÈL team for orders, press, collaborations, and general enquiries.',
  ];
  $title = $page_titles[$current_page] ?? 'ÉVORÈL Parfums';
  $desc  = $page_descs[$current_page]  ?? 'ÉVORÈL — Luxury Niche Fragrances';
  ?>

  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:title"       content="<?= htmlspecialchars($title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:type"        content="website">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- Icons (Phosphor) -->
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1/src/index.js" defer></script>

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- ── SITE HEADER ── -->
<header class="site-header" id="site-header">
  <div class="header-inner">

    <!-- Logo -->
    <a href="/index.php" class="site-logo" aria-label="ÉVORÈL Parfums — Home">
      <span class="accent">É</span>VOR<span class="accent">È</span>L
    </a>

    <!-- Main Navigation -->
    <nav class="site-nav" aria-label="Primary navigation">
      
      <a href="/pages/shop.php"    class="<?= $current_page === 'shop'    ? 'active' : '' ?>">Fragrances</a>
      <a href="/pages/house.php"   class="<?= $current_page === 'house'   ? 'active' : '' ?>">House</a>
      <a href="/pages/journal.php" class="<?= $current_page === 'journal' ? 'active' : '' ?>">Journal</a>
      <a href="/pages/contact.php" class="<?= $current_page === 'contact' ? 'active' : '' ?>">Contact</a>
    </nav>

    <!-- Header Icons -->
    <div class="header-icons">
      <button class="menu-toggle" aria-label="Open menu" id="menu-toggle"
              aria-expanded="false" aria-controls="mobile-nav">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div><!-- /.header-inner -->
</header>

<!-- ── MOBILE NAV OVERLAY ── -->
<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation">
  <button class="mobile-nav-close" id="mobile-nav-close" aria-label="Close menu">
    <i class="ph ph-x"></i>
  </button>
  <a href="/index.php">Home</a>
  <a href="/pages/shop.php">Shop</a>
  <a href="/pages/shop.php">Fragrances</a>
  <a href="/pages/house.php">House</a>
  <a href="/pages/journal.php">Journal</a>
  <a href="/pages/contact.php">Contact</a>
</nav>

<main id="main-content">
