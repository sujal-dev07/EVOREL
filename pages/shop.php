<?php
require_once __DIR__ . '/../includes/header.php';

// ── All products
$products = [
  ['id'=>1,'name'=>'Éclat de Rose',   'cat'=>'floral', 'tag'=>'Floral · EDP', 'notes'=>'Rose centifolia, Patchouli, White Musk',  'price'=>'₹8,500', 'img'=>'/assets/images/product1.jpg'],
  ['id'=>2,'name'=>'Noir Éternity',   'cat'=>'woody',  'tag'=>'Woody · EDP',  'notes'=>'Neroli, Sandalwood, Amber Resin',          'price'=>'₹9,200', 'img'=>'/assets/images/product2.jpg'],
  ['id'=>3,'name'=>'Sylvan Aura',     'cat'=>'green',  'tag'=>'Green · EDP',  'notes'=>'Vetiver, Oakmoss, Bergamot',               'price'=>'₹7,800', 'img'=>'/assets/images/product3.jpg'],
  ['id'=>4,'name'=>'Velours de Nuit', 'cat'=>'oriental','tag'=>'Oriental · EDP','notes'=>'Oud, Vanilla, Labdanum',                 'price'=>'₹11,500','img'=>'/assets/images/product4.jpg'],
  ['id'=>5,'name'=>'Lumière Blanche', 'cat'=>'floral', 'tag'=>'Floral · EDP', 'notes'=>'Jasmine, Iris, Cedar',                    'price'=>'₹8,900', 'img'=>'/assets/images/product5.jpg'],
  ['id'=>6,'name'=>'Forêt Sauvage',   'cat'=>'woody',  'tag'=>'Woody · EDP',  'notes'=>'Pine, Black Pepper, Labdanum',             'price'=>'₹9,800', 'img'=>'/assets/images/product6.jpg'],
  ['id'=>7,'name'=>'Soir de Mer',     'cat'=>'aquatic','tag'=>'Aquatic · EDP','notes'=>'Sea Salt, Ambergris, Driftwood',           'price'=>'₹8,200', 'img'=>'/assets/images/product7.jpg'],
  ['id'=>8,'name'=>'Tabac Doré',      'cat'=>'oriental','tag'=>'Oriental · EDP','notes'=>'Tobacco, Honey, Tonka Bean',             'price'=>'₹10,400','img'=>'/assets/images/product8.jpg'],
];
?>

<!-- ── PAGE BANNER ── -->
<section class="page-banner" aria-labelledby="shop-heading">
  <p class="section-eyebrow">The Collection</p>
  <h1 id="shop-heading">All Fragrances</h1>
  <p>Twelve chapters. Each one a world unto itself.</p>
</section>

<!-- ── SHOP SECTION ── -->
<section class="shop-section">
  <div class="container">

    <!-- Filter Bar -->
    <div class="shop-filters" role="group" aria-label="Filter fragrances by type">
      <button class="filter-btn active" data-filter="all"     id="filter-all">All</button>
      <button class="filter-btn"        data-filter="floral"  id="filter-floral">Floral</button>
      <button class="filter-btn"        data-filter="woody"   id="filter-woody">Woody</button>
      <button class="filter-btn"        data-filter="oriental" id="filter-oriental">Oriental</button>
      <button class="filter-btn"        data-filter="green"   id="filter-green">Green</button>
      <button class="filter-btn"        data-filter="aquatic" id="filter-aquatic">Aquatic</button>
    </div>

    <!-- Products Grid -->
    <div class="products-grid" id="products-grid">
      <?php foreach ($products as $p): ?>
      <article
        class="fragrance-card product-item"
        data-category="<?= htmlspecialchars($p['cat']) ?>"
        aria-label="<?= htmlspecialchars($p['name']) ?>"
      >
        <div class="fragrance-card-image">
          <img
            src="<?= htmlspecialchars($p['img']) ?>"
            alt="<?= htmlspecialchars($p['name']) ?> perfume bottle"
            loading="lazy"
          >
          <div class="fragrance-card-overlay" aria-hidden="true"></div>
        </div>
        <div class="fragrance-card-body">
          <p class="fragrance-tag"><?= htmlspecialchars($p['tag']) ?></p>
          <h2 class="fragrance-name"><?= htmlspecialchars($p['name']) ?></h2>
          <p class="fragrance-notes"><?= htmlspecialchars($p['notes']) ?></p>
          <div class="fragrance-footer">
            <span class="fragrance-price"><?= htmlspecialchars($p['price']) ?></span>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
