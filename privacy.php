<?php
$currentPage = 'privacy';
$pageTitle = 'Privacy Policy — MKV International Ltd';
$pageDesc  = 'How MKV International Limited collects, uses and protects personal data submitted through this website, in line with UK GDPR and the Data Protection Act 2018.';
require 'includes/header.php';
?>

<section class="page-banner">
  <div class="container">
    <span class="eyebrow">Legal</span>
    <h1>Privacy Policy</h1>
    <p>How we collect, use and protect personal data submitted through this website.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div style="max-width:760px;">
      <p><strong>Last updated: 4 July 2026</strong></p>

      <h2>Who we are</h2>
      <p><?php echo COMPANY_NAME; ?> ("we", "us", "our") is the data controller for personal data collected through this website. We are registered in England &amp; Wales, company number <?php echo COMPANY_NO; ?>, with registered office at <?php echo COMPANY_ADDR; ?>. For any question about this policy or your data, contact us at <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>.</p>

      <h2>What we collect</h2>
      <p>We only collect personal data you choose to submit to us, through two forms on this site:</p>
      <ul>
        <li><strong>Contact form</strong> — name, email, company (optional), phone (optional), enquiry type and message.</li>
        <li><strong>Supplier registration form</strong> — company name, contact person, designation, email, phone, city &amp; state, product category, year established, IEC and GST numbers, certifications held, export markets, typical MOQ, a catalogue/website link, and a free-text description of your products and capabilities.</li>
      </ul>
      <p>When a form is submitted, our server also automatically records the submitting IP address and a timestamp, for security and record-keeping.</p>

      <h2>How we use it and our lawful basis</h2>
      <p>We use this data to respond to your enquiry, assess supplier applications against current and upcoming sourcing programmes, and maintain a record of business correspondence. We process this data under UK GDPR Article 6(1)(f) (legitimate interests — running our sourcing business and responding to enquiries) and, where your enquiry relates to a possible supply arrangement, Article 6(1)(b) (steps taken at your request prior to entering a contract). We do not use your data for automated decision-making or profiling, and we do not sell it.</p>

      <h2>How it's stored and who sees it</h2>
      <p>Form submissions are emailed to our internal buying/sourcing team and kept in a secure log on our hosting server as a backup record. Data is not shared with third parties except: (a) our email and hosting providers, who process it solely to deliver this service to us; (b) where relevant to progressing a genuine sourcing enquiry (for example, introducing a qualified supplier profile to a client operating under NDA); or (c) where we are required to by law.</p>

      <h2>How long we keep it</h2>
      <p>We keep enquiry and supplier registration data for as long as reasonably necessary to evaluate it and for our business records afterwards — typically no longer than 24 months from your last contact with us, unless an active business relationship continues beyond that or we are required to keep it longer by law.</p>

      <h2>Cookies</h2>
      <p>This website does not use analytics, advertising or tracking cookies, and does not use browser sessions. Pages load typefaces directly from Google Fonts (fonts.googleapis.com / fonts.gstatic.com); loading a font file exposes your IP address to Google as the request is made, in line with <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's privacy policy</a>. We do not set any cookies of our own.</p>

      <h2>International transfers</h2>
      <p>We are a UK company and our hosting and email infrastructure sit within the UK/EEA. We do not transfer personal data outside the UK or EEA other than the limited exposure to Google described above.</p>

      <h2>Your rights</h2>
      <p>Under UK GDPR you have the right to request access to, correction of, or erasure of your personal data, to restrict or object to our processing, and to receive a copy of your data in a portable format. To exercise any of these rights, email <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>. You also have the right to complain to the UK's data protection regulator, the <a href="https://ico.org.uk/make-a-complaint/" target="_blank" rel="noopener">Information Commissioner's Office (ICO)</a>, though we would welcome the chance to resolve any concern directly first.</p>

      <h2>Security</h2>
      <p>We use reasonable technical and organisational measures to protect the data you submit, including restricting access to authorised staff and securing our hosting environment. No method of transmission or storage is completely secure, and we cannot guarantee absolute security.</p>

      <h2>Changes to this policy</h2>
      <p>We may update this policy from time to time to reflect changes in our practices or the law. The "last updated" date above shows when it was last revised.</p>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
