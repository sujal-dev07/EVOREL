<?php
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ── PAGE BANNER ── -->
<section class="page-banner" aria-labelledby="house-heading">
  <p class="section-eyebrow">About Us</p>
  <h1 id="house-heading">Our House</h1>
  <p>A story written in scent — from the fields of Grasse to your skin.</p>
</section>

<!-- ── HOUSE SECTION ── -->
<section class="house-section">
  <div class="container">

    <!-- Story Block 1 -->
    <div class="house-story">
      <img
        src="/assets/images/atelier.jpg"
        alt="The ÉVORÈL atelier in Grasse, France"
        loading="lazy"
      >
      <div class="house-text">
        <p class="section-eyebrow">The Beginning</p>
        <h2>Born in a<br>Grasse Atelier</h2>
        <p>
          ÉVORÈL was founded in 2018 by master perfumer Élise Évorèl, who spent
          twenty years under the tutelage of the legendary Grasse perfumers
          Henri Beaumont and Sabine Verlaine. It was in their sun-drenched
          atelier that she learned to read fragrance the way a poet reads verse.
        </p>
        <p>
          The house takes its name from its founder, but also from the Provençal
          word for gold — <em>l'or</em> — reflecting the house's commitment to
          the most precious materials the natural world can offer.
        </p>
        <a href="/pages/shop.php" class="btn btn-outline btn-arrow" style="margin-top:10px;">
          <span>Explore the Collection</span>
        </a>
      </div>
    </div>

    <!-- Story Block 2 -->
    <div class="house-story reverse">
      <img
        src="/assets/images/hero.jpg"
        alt="Rare ingredients used by ÉVORÈL Parfums"
        loading="lazy"
      >
      <div class="house-text">
        <p class="section-eyebrow">Ingredients &amp; Sourcing</p>
        <h2>Every Ingredient.<br>Ethically Chosen.</h2>
        <p>
          We work directly with growers in Morocco, India, Madagascar, and
          the Comoros Islands. Every rose, every vetiver root, every vanilla
          pod is harvested by hand under Fair-Trade agreements that we helped
          write ourselves.
        </p>
        <p>
          No ingredient enters our formulas without our nose signing off on
          every batch. Consistency matters — but so does the small variation
          that makes each vintage slightly, beautifully different.
        </p>
      </div>
    </div>

    <!-- Values Grid -->
    <div class="section-intro" style="margin-top:0;">
      <p class="section-eyebrow">Our Values</p>
      <h2 class="section-title">What We <em>Believe</em></h2>
    </div>

    <div class="values-grid">
      <div class="value-card">
        <span class="value-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 1 10-1.3 7.7-6.2 8-9 8Z"/>
            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
          </svg>
        </span>
        <h3>Sustainability</h3>
        <p>
          All packaging is made from recycled materials. Our refill programme
          lets you return bottles for a 20% discount on your next order.
        </p>
      </div>
      <div class="value-card">
        <span class="value-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
            <path d="m11 17 2 2a1 1 0 0 0 1.4 0l4.3-4.3a1 1 0 0 0 0-1.4l-2.6-2.6a1 1 0 0 0-1.4 0l-1.4 1.4"/>
            <path d="m18 10 1.3-1.3a1 1 0 0 0 0-1.4l-2.6-2.6a1 1 0 0 0-1.4 0L14 6"/>
            <path d="m2 14 6 6"/>
            <path d="M7 8 2 13"/>
            <path d="m9 15 2 2"/>
            <path d="m15 9 2 2"/>
            <path d="M11 7 8.5 4.5a1 1 0 0 0-1.4 0L3 8.6a1 1 0 0 0 0 1.4l5.5 5.5"/>
          </svg>
        </span>
        <h3>Fair Trade</h3>
        <p>
          We pay above-market rates for every ingredient and maintain
          multi-year contracts with all our farming partners.
        </p>
      </div>
      <div class="value-card">
        <span class="value-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 16c1.5 0 3-1 3-3 0-3-3-4-4.5-5.5L17 4a2 2 0 0 0-3.5-1.5L11 6a2 2 0 0 0-3-1.5 2 2 0 0 0-2 2.5L7 9C5 10 3 12 3 14.5A4.5 4.5 0 0 0 7.5 19H14c3 0 4-1 4-3Z"/>
            <path d="m19.5 16.5-1.5-.5"/>
            <path d="M8 12h.01"/>
          </svg>
        </span>
        <h3>Cruelty-Free</h3>
        <p>
          All ÉVORÈL fragrances are certified cruelty-free and vegan. We will
          never use animal-derived ingredients outside of historical ambergris
          ethically sourced from the sea floor.
        </p>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
