<?php
$currentPage = 'contact';
$pageTitle = 'Contact — MKV International Ltd, Covent Garden, London';
$pageDesc  = 'Contact MKV International Limited: 71-75 Shelton Street, Covent Garden, London WC2H 9JQ. Email and enquiry form — supplier enquiries answered within two business days.';
require 'includes/header.php';
$sent  = isset($_GET['sent']);
$error = isset($_GET['error']);
?>

<section class="page-banner">
  <div class="container">
    <span class="eyebrow">Contact</span>
    <h1>Talk to a decision-maker, not a call centre.</h1>
    <p>Every enquiry goes straight to the buying team in London. Supplier enquiries are answered within two business days.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-cards">
        <div class="contact-card">
          <h3>Registered Office</h3>
          <p><?php echo COMPANY_NAME; ?><br><?php echo COMPANY_ADDR; ?></p>
          <p style="margin-top:8px; font-size:13px;">Meetings by appointment.</p>
        </div>
        <div class="contact-card">
          <h3>Email</h3>
          <p><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p>
        </div>
        <div class="contact-card">
          <h3>Hours</h3>
          <p><?php echo HOURS_UK; ?><br><?php echo HOURS_IN; ?></p>
        </div>
        <div class="contact-card">
          <h3>Company Verification</h3>
          <p>Company No. <?php echo COMPANY_NO; ?> &middot; England &amp; Wales<br>
          <a href="<?php echo COMPANY_CH_URL; ?>" target="_blank" rel="noopener">View our record at Companies House ↗</a></p>
        </div>
      </div>

      <div class="form-wrap">
        <?php if ($sent): ?>
          <div class="alert alert-success"><strong>Message received — thank you.</strong> We will come back to you within two business days.</div>
        <?php elseif ($error): ?>
          <div class="alert alert-error"><strong>Something went wrong.</strong> Please check the required fields and try again — or email us directly at <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>.</div>
        <?php endif; ?>

        <h2 style="font-size:24px; margin-bottom:18px;">Send us a message</h2>
        <p style="color:var(--muted); font-size:14.5px; margin-bottom:24px;">Manufacturers: for faster routing, please use the <a href="suppliers.php">Become a Supplier</a> form instead.</p>

        <form action="send-inquiry.php" method="post">
          <input type="hidden" name="form_type" value="contact">
          <div class="hp-field"><label>Leave this field empty<input type="text" name="website_url" tabindex="-1" autocomplete="off"></label></div>

          <div class="form-grid">
            <div class="form-field">
              <label for="contact_person">Your Name *</label>
              <input type="text" id="contact_person" name="contact_person" required>
            </div>
            <div class="form-field">
              <label for="company">Company <span class="opt">(optional)</span></label>
              <input type="text" id="company" name="company">
            </div>
            <div class="form-field">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-field">
              <label for="phone">Phone / WhatsApp <span class="opt">(optional)</span></label>
              <input type="text" id="phone" name="phone">
            </div>
            <div class="form-field full">
              <label for="subject">Enquiry Type *</label>
              <select id="subject" name="subject" required>
                <option value="">— Select —</option>
                <option>Manufacturer / supplier enquiry</option>
                <option>Retailer / brand — sourcing enquiry</option>
                <option>Logistics / freight partner</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-field full">
              <label for="message">Message *</label>
              <textarea id="message" name="message" required></textarea>
            </div>
          </div>

          <div class="form-submit">
            <button type="submit" class="btn btn-navy">Send Message</button>
          </div>
          <p class="form-note">By submitting this form you agree to our <a href="privacy.php">Privacy Policy</a>.</p>
        </form>
      </div>
    </div>

    <div class="map-embed">
      <iframe title="MKV International — Covent Garden, London" src="https://maps.google.com/maps?q=71-75%20Shelton%20Street%2C%20Covent%20Garden%2C%20London%20WC2H%209JQ&t=&z=15&ie=UTF8&iwloc=&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
