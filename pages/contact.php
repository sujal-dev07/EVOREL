<?php
require_once __DIR__ . '/../includes/header.php';

// ── Handle contact form POST
$form_success = false;
$form_errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
  $name    = trim($_POST['name']    ?? '');
  $email   = trim($_POST['email']   ?? '');
  $subject = trim($_POST['subject'] ?? '');
  $message = trim($_POST['message'] ?? '');

  if (empty($name))    $form_errors[] = 'Name is required.';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $form_errors[] = 'A valid email is required.';
  if (empty($message)) $form_errors[] = 'Message is required.';

  if (empty($form_errors)) {
    // In production: mail('contact@evorel.com', $subject, $message) or API call
    $form_success = true;
  }
}
?>

<!-- ── PAGE BANNER ── -->
<section class="page-banner" aria-labelledby="contact-heading">
  <p class="section-eyebrow">Reach Out</p>
  <h1 id="contact-heading">Contact</h1>
  <p>We'd love to hear from you — enquiries, collaborations, or simply a question about scent.</p>
</section>

<!-- ── CONTACT SECTION ── -->
<section class="contact-section">
  <div class="container">
    <div class="contact-grid">

      <!-- Left: Info -->
      <div class="contact-info">
        <h3>Get in Touch</h3>
        <p>
          Our team is based in Paris and typically responds within one business
          day. For urgent order queries, please include your order number in
          the subject line.
        </p>

        <div class="contact-item">
          <span class="contact-item-icon" aria-hidden="true">
            <i class="ph ph-envelope-simple"></i>
          </span>
          <div class="contact-item-text">
            <h4>Email</h4>
            <p>hello@evorelparfums.com</p>
          </div>
        </div>

        <div class="contact-item">
          <span class="contact-item-icon" aria-hidden="true">
            <i class="ph ph-phone"></i>
          </span>
          <div class="contact-item-text">
            <h4>Phone</h4>
            <p>+91 98989 85856</p>
          </div>
        </div>

        <div class="contact-item">
          <span class="contact-item-icon" aria-hidden="true">
            <i class="ph ph-map-pin"></i>
          </span>
          <div class="contact-item-text">
            <h4>Atelier &amp; Showroom</h4>
            <p>12 Gravity Complex Nadiad </p>
          </div>
        </div>

        <div class="contact-item">
          <span class="contact-item-icon" aria-hidden="true">
            <i class="ph ph-clock"></i>
          </span>
          <div class="contact-item-text">
            <h4>Opening Hours</h4>
            <p>Mon–Sat, 10:00 – 18:00 IST</p>
          </div>
        </div>
      </div>

      <!-- Right: Form -->
      <div>
        <?php if ($form_success): ?>
          <div class="form-success" style="display:block;">
            <strong>Thank you, <?= htmlspecialchars($name) ?>.</strong><br>
            Your message has been received. We'll be in touch within one business day.
          </div>
        <?php else: ?>

          <?php if (!empty($form_errors)): ?>
            <div class="form-success" style="display:block; border-color:rgba(201,169,110,0.4);">
              <?php foreach ($form_errors as $err): ?>
                <p style="margin:0 0 4px;">⚠ <?= htmlspecialchars($err) ?></p>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <form class="contact-form" method="POST" action="#" aria-label="Contact form">

            <div class="form-row">
              <div class="form-group">
                <label for="contact-name">Full Name</label>
                <input
                  type="text"
                  id="contact-name"
                  name="name"
                  placeholder="Your name"
                  required
                  value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
                >
              </div>
              <div class="form-group">
                <label for="contact-email">Email Address</label>
                <input
                  type="email"
                  id="contact-email"
                  name="email"
                  placeholder="your@email.com"
                  required
                  value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                >
              </div>
            </div>

            <div class="form-group">
              <label for="contact-subject">Subject</label>
              <select id="contact-subject" name="subject">
                <option value="Order Enquiry">Order Enquiry</option>
                <option value="Wholesale">Wholesale</option>
                <option value="Press & Media">Press &amp; Media</option>
                <option value="Collaboration">Collaboration</option>
                <option value="General">General</option>
              </select>
            </div>

            <div class="form-group">
              <label for="contact-message">Message</label>
              <textarea
                id="contact-message"
                name="message"
                placeholder="Tell us how we can help…"
                required
              ><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
            </div>

            <button type="submit" name="contact_submit" class="btn btn-primary btn-arrow"
                    style="align-self:flex-start;">
              <span>Send Message</span>
            </button>

          </form>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
