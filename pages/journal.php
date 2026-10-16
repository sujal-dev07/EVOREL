<?php
require_once __DIR__ . '/../includes/header.php';

$articles = [
  [
    'cat'     => 'Craft',
    'title'   => 'The Last Perfumers of Grasse — a Vanishing Craft',
    'excerpt' => 'We spent three days in the lavender fields of Grasse to understand what it truly means to compose a fragrance the old way — one flower at a time.',
    'date'    => 'October 12, 2026',
    'read'    => '6 min',
    'img'     => '/assets/images/atelier.jpg',
    'featured'=> true,
  ],
  [
    'cat'     => 'Ritual',
    'title'   => 'How to Layer Scent Like a Perfumer',
    'excerpt' => 'The professional method for building a signature scent profile using accords — base, heart, and top — applied directly to skin.',
    'date'    => 'September 28, 2026',
    'read'    => '4 min',
    'img'     => '/assets/images/product2.jpg',
    'featured'=> false,
  ],
  [
    'cat'     => 'Ingredient',
    'title'   => 'Oud — The Wood Worth Its Weight in Gold',
    'excerpt' => 'Why this ancient resinous wood commands extraordinary reverence — and price — from perfumers and collectors alike.',
    'date'    => 'August 15, 2026',
    'read'    => '5 min',
    'img'     => '/assets/images/product3.jpg',
    'featured'=> false,
  ],
  [
    'cat'     => 'Sourcing',
    'title'   => 'From Field to Flacon: Our Rose Harvest in Morocco',
    'excerpt' => 'A visual journey through the Dadès Valley at dawn, where we pick our rose de mai alongside the farmers we\'ve worked with for six years.',
    'date'    => 'July 3, 2026',
    'read'    => '7 min',
    'img'     => '/assets/images/product1.jpg',
    'featured'=> false,
  ],
];
?>

<!-- ── PAGE BANNER ── -->
<section class="page-banner" aria-labelledby="journal-heading">
  <p class="section-eyebrow">Stories</p>
  <h1 id="journal-heading">Journal</h1>
  <p>Fragrance rituals, ingredient stories, and chapters from the house.</p>
</section>

<!-- ── JOURNAL SECTION ── -->
<section class="journal-section" style="padding-top:60px;">
  <div class="container">

    <?php foreach ($articles as $a): ?>
    <?php if ($a['featured']): ?>
      <!-- Featured Large Card -->
      <article class="journal-card" style="margin-bottom:60px;"
               aria-label="<?= htmlspecialchars($a['title']) ?>">
        <div style="overflow:hidden;">
          <img
            src="<?= htmlspecialchars($a['img']) ?>"
            alt="<?= htmlspecialchars($a['title']) ?>"
            class="journal-card-img"
            style="aspect-ratio:16/7; object-fit:cover; width:100%; transition:transform 0.6s ease;"
            loading="eager"
          >
        </div>
        <div class="journal-card-body" style="max-width:620px;">
          <p class="journal-category"><?= htmlspecialchars($a['cat']) ?></p>
          <h2 class="journal-title" style="font-size:32px;">
            <?= htmlspecialchars($a['title']) ?>
          </h2>
          <p class="journal-excerpt"><?= htmlspecialchars($a['excerpt']) ?></p>
          <p class="journal-meta">
            <?= htmlspecialchars($a['date']) ?> &nbsp;·&nbsp; <?= htmlspecialchars($a['read']) ?> read
          </p>
          <a href="#" class="btn btn-outline btn-arrow" style="margin-top:20px; display:inline-flex;">
            <span>Read Article</span>
          </a>
        </div>
      </article>

      <div style="height:1px; background:rgba(201,169,110,0.12); margin-bottom:60px;"></div>

      <div class="journal-grid" style="margin-bottom:0;">
        <div class="journal-aside" style="grid-column:1/-1; display:grid; grid-template-columns:repeat(3,1fr); gap:36px;">
    <?php else: ?>
          <!-- Regular Card -->
          <article class="journal-card" aria-label="<?= htmlspecialchars($a['title']) ?>">
            <div style="overflow:hidden;">
              <img
                src="<?= htmlspecialchars($a['img']) ?>"
                alt="<?= htmlspecialchars($a['title']) ?>"
                class="journal-card-img"
                loading="lazy"
              >
            </div>
            <div class="journal-card-body">
              <p class="journal-category"><?= htmlspecialchars($a['cat']) ?></p>
              <h3 class="journal-title"><?= htmlspecialchars($a['title']) ?></h3>
              <p class="journal-excerpt"><?= htmlspecialchars($a['excerpt']) ?></p>
              <p class="journal-meta">
                <?= htmlspecialchars($a['date']) ?> &nbsp;·&nbsp; <?= htmlspecialchars($a['read']) ?> read
              </p>
            </div>
          </article>
    <?php endif; ?>
    <?php endforeach; ?>
        </div>
      </div>

  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
