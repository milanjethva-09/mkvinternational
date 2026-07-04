<!-- Footer -->
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-col footer-about">
      <div class="brand footer-brand">
        <span class="brand-name">MKV INTERNATIONAL</span>
        <span class="brand-tag">IMPORT &amp; SOURCING &middot; LONDON</span>
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
