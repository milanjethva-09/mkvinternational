<!-- Footer -->
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-col footer-about">
      <div class="brand footer-brand">
        <svg class="brand-mark" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="32" cy="32" r="30" fill="#0f2440"/><circle cx="32" cy="32" r="29" fill="none" stroke="#c8a04b" stroke-width="2"/><circle cx="32" cy="32" r="24" fill="none" stroke="#c8a04b" stroke-width="0.8" opacity="0.7"/><rect x="30.6" y="5.6" width="2.8" height="2.8" transform="rotate(45 32 7)" fill="#c8a04b"/><rect x="30.6" y="55.6" width="2.8" height="2.8" transform="rotate(45 32 57)" fill="#c8a04b"/><text x="32" y="36.5" font-family="Fraunces, Georgia, serif" font-size="15.5" font-weight="600" letter-spacing="1.2" fill="#c8a04b" text-anchor="middle">MKV</text><text x="32" y="45.5" font-family="Inter, Arial, sans-serif" font-size="5" letter-spacing="2.2" fill="#e3c98a" text-anchor="middle">LONDON</text></svg>
        <span class="brand-text">
          <span class="brand-name">MKV INTERNATIONAL</span>
          <span class="brand-tag">Import &amp; Sourcing &middot; London</span>
        </span>
      </div>
      <p>A London-based import and sourcing house connecting quality-certified Indian manufacturers with retailers and brands across the United Kingdom and the European Union.</p>
    </div>

    <div class="footer-col">
      <h4>Company</h4>
      <a href="about.php">About Us</a>
      <a href="how-we-work.php">How We Work</a>
      <a href="suppliers.php">Become a Supplier</a>
      <a href="contact.php">Contact</a>
      <a href="<?php echo COMPANY_CH_URL; ?>" target="_blank" rel="noopener">Companies House Record ↗</a>
    </div>

    <div class="footer-col">
      <h4>Sourcing Categories</h4>
      <a href="industries.php#organic">Organic &amp; Wellness</a>
      <a href="industries.php#pharma">Pharmaceutical &amp; Nutraceutical</a>
      <a href="industries.php#fashion">Fashion &amp; Apparel</a>
      <a href="industries.php#leather">Leather Goods</a>
      <a href="industries.php#home">Home &amp; Kitchen</a>
      <a href="industries.php#handicrafts">Handicrafts &amp; Lifestyle</a>
      <a href="industries.php#agro">Agro &amp; Food Products</a>
      <a href="industries.php#beauty">Beauty &amp; Personal Care</a>
      <a href="industries.php#hardware">Engineering &amp; Hardware</a>
    </div>

    <div class="footer-col">
      <h4>Contact</h4>
      <p class="footer-contact-line"><?php echo COMPANY_ADDR; ?></p>
      <p class="footer-contact-line"><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p>
      <p class="footer-contact-line footer-hours"><?php echo HOURS_UK; ?><br><?php echo HOURS_IN; ?></p>
    </div>
  </div>

  <div class="footer-legal">
    <div class="container">
      <p><?php echo COMPANY_NAME; ?> &middot; Registered in England &amp; Wales &middot; Company No. <?php echo COMPANY_NO; ?> &middot; Incorporated December <?php echo COMPANY_EST; ?><br>
      Registered office: <?php echo COMPANY_ADDR; ?></p>
      <p>&copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?>. All rights reserved.</p>
    </div>
  </div>
</footer>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "<?php echo COMPANY_NAME; ?>",
  "legalName": "MKV INTERNATIONAL LIMITED",
  "url": "<?php echo SITE_URL; ?>",
  "email": "<?php echo CONTACT_EMAIL; ?>",
  "foundingDate": "2022-12-08",
  "identifier": {
    "@type": "PropertyValue",
    "propertyID": "Companies House Registration Number",
    "value": "<?php echo COMPANY_NO; ?>"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "71-75 Shelton Street, Covent Garden",
    "addressLocality": "London",
    "postalCode": "WC2H 9JQ",
    "addressCountry": "GB"
  },
  "areaServed": ["GB", "EU", "IN"],
  "knowsLanguage": "en",
  "description": "London-based import and sourcing company connecting Indian manufacturers with retailers across the UK and EU."
}
</script>
<script src="assets/js/main.js"></script>
</body>
</html>
