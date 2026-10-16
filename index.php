<?php
require_once __DIR__ . '/includes/header.php';

// ── Products data
$featured = [
  [
    'id'    => 1,
    'name'  => 'Éclat de Rose',
    'tag'   => 'Floral · Eau de Parfum',
    'notes' => 'Rose centifolia, Patchouli, White Musk',
    'price' => '₹8,500',
    'img'   => '/assets/images/product1.jpg',
  ],
  [
    'id'    => 2,
    'name'  => 'Noir Éternity',
    'tag'   => 'Woody · Eau de Parfum',
    'notes' => 'Neroli, Sandalwood, Amber Resin',
    'price' => '₹9,200',
    'img'   => '/assets/images/product2.jpg',
  ],
  [
    'id'    => 3,
    'name'  => 'Sylvan Aura',
    'tag'   => 'Green · Eau de Parfum',
    'notes' => 'Vetiver, Oakmoss, Bergamot',
    'price' => '₹7,800',
    'img'   => '/assets/images/product3.jpg',
  ],
];
?>

<!-- ═══════ HERO ═══════ -->
<section class="hero" aria-label="Hero banner">
  <img
    src="/assets/images/hero.jpg"
    alt="A luxury ÉVORÈL perfume bottle resting on dark stone"
    class="hero-bg"
    loading="eager"
  >
  <div class="hero-overlay" aria-hidden="true"></div>

  <div class="hero-content">
    <p class="hero-eyebrow">New Chapter — Autumn 2026</p>
    <h1>
      The Scent of<br>
      <em>Rare Things</em>
    </h1>
    <p class="hero-desc">
      Each ÉVORÈL fragrance is an intimate chapter — distilled from the world's
      rarest botanicals and composed by a single nose in Grasse.
    </p>
    <div class="hero-actions">
      <a href="/pages/shop.php" class="btn btn-primary btn-arrow">
        <span>Explore Collection</span>
      </a>
      <a href="/pages/house.php" class="btn btn-outline">
        Our House
      </a>
    </div>
  </div>

  <div class="hero-scroll" aria-hidden="true">Scroll</div>
</section>

<!-- ═══════ MARQUEE ═══════ -->
<div class="marquee-section" aria-hidden="true">
  <div class="marquee-track">
    <?php
    $items = [
      'Rose Centifolia',
      'Sandalwood',
      'Vetiver',
      'Bergamot',
      'Oud',
      'Neroli',
      'Ambergris',
      'Patchouli',
    ];
    // Duplicate for seamless loop
    $all = array_merge($items, $items, $items, $items);
    foreach ($all as $item): ?>
      <span><?= htmlspecialchars($item) ?> <span class="dot">✦</span></span>
    <?php endforeach; ?>
  </div>
</div>

<!-- ═══════ FEATURED FRAGRANCES ═══════ -->
<section class="fragrances-section" id="collection" aria-labelledby="collection-heading">
  <div class="container">
    <div class="section-intro">
      <p class="section-eyebrow">The Collection</p>
      <h2 class="section-title" id="collection-heading">
        Crafted for <em>Memory</em>
      </h2>
      <p class="section-sub">
        Twelve chapters, each a world unto itself. Wear them alone,
        or layer them for a scent entirely your own.
      </p>
    </div>

    <div class="fragrances-grid">
      <?php foreach ($featured as $p): ?>
      <article class="fragrance-card" aria-label="<?= htmlspecialchars($p['name']) ?>">
        <div class="fragrance-card-image">
          <img
            src="<?= htmlspecialchars($p['img']) ?>"
            alt="<?= htmlspecialchars($p['name']) ?> fragrance bottle"
            loading="lazy"
          >
          <div class="fragrance-card-overlay" aria-hidden="true"></div>
        </div>
        <div class="fragrance-card-body">
          <p class="fragrance-tag"><?= htmlspecialchars($p['tag']) ?></p>
          <h3 class="fragrance-name"><?= htmlspecialchars($p['name']) ?></h3>
          <p class="fragrance-notes"><?= htmlspecialchars($p['notes']) ?></p>
          <div class="fragrance-footer">
            <span class="fragrance-price"><?= htmlspecialchars($p['price']) ?></span>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center; margin-top:52px;">
      <a href="/pages/shop.php" class="btn btn-outline btn-arrow">
        <span>View Full Collection</span>
      </a>
    </div>
  </div>
</section>

<!-- ═══════ ABOUT / STORY ═══════ -->
<section class="about-section" id="about" aria-labelledby="about-heading">
  <div class="container">
    <div class="about-grid">

      <!-- Image Side -->
      <div class="about-image-wrap">
        <img
          src="/assets/images/atelier.jpg"
          alt="The ÉVORÈL atelier in Grasse, France"
          class="about-image-main"
          loading="lazy"
        >
        <div class="about-badge" aria-hidden="true">
          <strong>XII</strong>
          <span>Chapters</span>
        </div>
      </div>

      <!-- Text Side -->
      <div class="about-content">
        <p class="section-eyebrow">Our House</p>
        <h2 class="section-title" id="about-heading">
          A Single Nose.<br><em>A Thousand Memories.</em>
        </h2>
        <p class="about-text">
          ÉVORÈL was born in a small atelier in Grasse, France — the world's
          perfume capital. Our founder, Élise Évorèl, spent two decades
          apprenticing under the last generation of traditional perfumers before
          composing our first twelve chapters.
        </p>
        <p class="about-text">
          Every ingredient is ethically sourced, every formula hand-composed.
          No shortcuts. No synthetic shortcuts. Just the honest beauty of rare
          natural materials, shaped into scent.
        </p>

        <div class="about-stats">
          <div class="stat-item">
            <div class="stat-number">12</div>
            <div class="stat-label">Fragrances</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">30+</div>
            <div class="stat-label">Ingredients</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">6</div>
            <div class="stat-label">Countries</div>
          </div>
        </div>

        <a href="/pages/house.php" class="btn btn-outline btn-arrow">
          <span>Read Our Story</span>
        </a>
      </div>

    </div>
  </div>
</section>



<!-- ═══════ JOURNAL ═══════ -->
<section class="journal-section" id="journal" aria-labelledby="journal-heading">
  <div class="container">
    <div class="section-intro">
      <p class="section-eyebrow">Journal</p>
      <h2 class="section-title" id="journal-heading">From the <em>House</em></h2>
    </div>

    <div class="journal-grid">
      <!-- Featured Article -->
      <article class="journal-card">
        <img
          src="/assets/images/atelier.jpg"
          alt="The art of nose-led perfumery in Grasse"
          class="journal-card-img"
          loading="lazy"
        >
        <div class="journal-card-body">
          <p class="journal-category">Craft</p>
          <h3 class="journal-title">
            The Last Perfumers of Grasse — a Vanishing Craft
          </h3>
          <p class="journal-excerpt">
            We spent three days in the lavender fields of Grasse to understand
            what it truly means to compose a fragrance the old way.
          </p>
          <p class="journal-meta">October 2026 &nbsp;·&nbsp; 6 min read</p>
        </div>
      </article>

      <!-- Sidebar Articles -->
      <aside class="journal-aside">
        <?php
        $articles = [
          [
            'cat'     => 'Ritual',
            'title'   => 'How to Layer Scent Like a Perfumer',
            'excerpt' => 'The professional method for building a signature scent profile using accords.',
            'date'    => 'September 2026',
            'read'    => '4 min',
            'img'     => '/assets/images/product2.jpg',
          ],
          [
            'cat'     => 'Ingredient',
            'title'   => 'Oud — The Wood Worth Its Weight in Gold',
            'excerpt' => 'Why this ancient resinous wood commands extraordinary reverence — and price.',
            'date'    => 'August 2026',
            'read'    => '5 min',
            'img'     => '/assets/images/product3.jpg',
          ],
        ];
        foreach ($articles as $a): ?>
        <article class="journal-card journal-card-small">
          <img
            src="<?= htmlspecialchars($a['img']) ?>"
            alt="<?= htmlspecialchars($a['title']) ?>"
            class="journal-card-img"
            loading="lazy"
          >
          <div class="journal-card-body">
            <p class="journal-category"><?= htmlspecialchars($a['cat']) ?></p>
            <h3 class="journal-title"><?= htmlspecialchars($a['title']) ?></h3>
            <p class="journal-meta">
              <?= htmlspecialchars($a['date']) ?> &nbsp;·&nbsp; <?= htmlspecialchars($a['read']) ?> read
            </p>
          </div>
        </article>
        <?php endforeach; ?>
      </aside>
    </div>

    <div style="text-align:center; margin-top:52px;">
      <a href="/pages/journal.php" class="btn btn-outline btn-arrow">
        <span>Read All Articles</span>
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
