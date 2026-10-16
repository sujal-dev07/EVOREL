<?php
// footer.php — included on every page
?>
</main><!-- /#main-content -->

<!-- ══════════════════════════════════════════
     SITE FOOTER
══════════════════════════════════════════ -->
<footer class="site-footer" role="contentinfo">

  <!-- Footer Main Grid -->
  <div class="footer-main">

    <!-- Column 1: About -->
    <div class="footer-col">
      <h3 class="footer-col-title">About ÉVORÈL</h3>
      <ul class="footer-links">
        <li><a href="/pages/house.php">Our House</a></li>
        
        <li><a href="/pages/journal.php">Journal</a></li>
     
      </ul>
    </div>

    <!-- Column 3: Shop -->
    <div class="footer-col">
      <h3 class="footer-col-title">Shop</h3>
      <ul class="footer-links">
        <li><a href="/pages/shop.php">All Fragrances</a></li>
        <li><a href="/pages/shop.php">Bath &amp; Body</a></li>
        <li><a href="/pages/shop.php">Discovery Set</a></li>
        
      </ul>
    </div>

    <!-- Column 4: Newsletter -->
    <div class="footer-col">
      <p class="footer-newsletter-title">Stay close to the house</p>
      <p class="footer-newsletter-sub">
        Receive new fragrance chapters, rituals, and occasional updates
      </p>

      <?php
      $newsletter_success = false;
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsletter_email'])) {
        $email = filter_var(trim($_POST['newsletter_email']), FILTER_VALIDATE_EMAIL);
        if ($email) {
          // In production: save to DB or send to mailing list API
          $newsletter_success = true;
        }
      }
      ?>

      <?php if ($newsletter_success): ?>
        <div class="form-success" style="display:block; background:rgba(44,41,32,0.12); border:1px solid rgba(44,41,32,0.25); color:var(--footer-text); padding:14px 18px; font-size:13px;">
          Thank you — welcome to the house.
        </div>
      <?php else: ?>
        <form class="newsletter-form" method="POST" action="#footer"
              aria-label="Newsletter subscription">
          <input
            type="email"
            name="newsletter_email"
            id="newsletter-email"
            placeholder="Your email"
            required
            aria-label="Email address for newsletter"
          >
          <button type="submit" aria-label="Join newsletter">
            JOIN &nbsp;&#8599;
          </button>
        </form>
      <?php endif; ?>
    </div>

  </div><!-- /.footer-main -->

  <!-- Footer Bottom Bar -->
  <div class="footer-bottom">

    <div>
      <div class="footer-logo">ÉVORÈL</div>
      <p class="footer-copy">
        &copy; <?= date('Y') ?> ÉVORÈL. All rights reserved.
      </p>
    </div>

  </div><!-- /.footer-bottom -->

</footer>

<!-- ══════════════════════════════════════════
     JAVASCRIPT
══════════════════════════════════════════ -->
<script>
(function () {
  'use strict';

  /* ── Sticky header ── */
  const header = document.getElementById('site-header');
  let lastScroll = 0;
  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    header.classList.toggle('scrolled', y > 60);
    lastScroll = y;
  }, { passive: true });

  /* ── Hero image pan on load ── */
  const hero = document.querySelector('.hero');
  if (hero) {
    window.addEventListener('load', () => hero.classList.add('loaded'), { once: true });
  }

  /* ── Mobile menu ── */
  const toggle   = document.getElementById('menu-toggle');
  const mobileNav = document.getElementById('mobile-nav');
  const closeBtn  = document.getElementById('mobile-nav-close');

  function openMenu() {
    mobileNav.classList.add('open');
    document.body.style.overflow = 'hidden';
    toggle.setAttribute('aria-expanded', 'true');
  }

  function closeMenu() {
    mobileNav.classList.remove('open');
    document.body.style.overflow = '';
    toggle.setAttribute('aria-expanded', 'false');
  }

  if (toggle)   toggle.addEventListener('click', openMenu);
  if (closeBtn) closeBtn.addEventListener('click', closeMenu);
  if (mobileNav) {
    mobileNav.addEventListener('click', (e) => {
      if (e.target === mobileNav) closeMenu();
    });
  }
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMenu();
  });

  /* ── Marquee pause on hover ── */
  const track = document.querySelector('.marquee-track');
  if (track) {
    track.addEventListener('mouseenter', () => track.style.animationPlayState = 'paused');
    track.addEventListener('mouseleave', () => track.style.animationPlayState = 'running');
  }

  /* ── Fragrance filter buttons (shop page) ── */
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const filter = this.dataset.filter;
      document.querySelectorAll('.product-item').forEach(card => {
        if (filter === 'all' || card.dataset.category === filter) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  /* ── Fade-in on scroll (Intersection Observer) ── */
  const fadeEls = document.querySelectorAll(
    '.fragrance-card, .journal-card, .value-card, .journal-card-small, .about-grid, .house-story'
  );

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  fadeEls.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(28px)';
    el.style.transition = 'opacity 0.7s ease, transform 0.7s ease';
    observer.observe(el);
  });

})();
</script>

</body>
</html>
