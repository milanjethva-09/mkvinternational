<!-- Footer -->
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-col footer-about">
      <div class="brand footer-brand">
        <span class="brand-name">MKV INTERNATIONAL</span>
        <span class="brand-tag">IMPORT &amp; SOURCING &middot; LONDON</span>
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
