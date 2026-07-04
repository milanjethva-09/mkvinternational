<?php
$currentPage = 'suppliers';
$pageTitle = 'Become a Supplier — Partner with a UK Buyer | MKV International';
$pageDesc  = 'Indian manufacturers: register as a supplier with MKV International, London. No registration fees. Submit your company profile, certifications and product range for UK & EU retail programmes.';
require 'includes/header.php';
$sent  = isset($_GET['sent']);
$error = isset($_GET['error']);
?>

<section class="page-banner">
  <div class="container">
    <span class="eyebrow">For Indian Manufacturers</span>
    <h1>Become a supplier to UK &amp; EU retail.</h1>
    <p>You focus on manufacturing. We bring the buyers, the specs, the QC framework and the import compliance. No registration fees, no middle layers — a direct line to a London buying office.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Onboarding</span>
      <h2>From first contact to first order.</h2>
    </div>
    <div class="steps" style="grid-template-columns: repeat(3, 1fr);">
      <div class="step reveal">
        <div class="step-num">1</div>
        <h3>Submit Your Profile</h3>
        <p>Use the form below — company details, product category, certifications and export history. Takes ten minutes.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">2</div>
        <h3>Desk Review</h3>
        <p>We verify certifications and assess fit against live and upcoming programmes. Reply within two business days.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">3</div>
        <h3>Introduction Call</h3>
        <p>A scheduled call to discuss your capabilities, capacities, current export markets and which programmes could suit you.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">4</div>
        <h3>Sampling</h3>
        <p>When a matching RFQ arises, you receive a full tech pack and develop counter-samples against it.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">5</div>
        <h3>Trial Order</h3>
        <p>A first order with written PO, agreed payment terms and independent pre-shipment inspection to the agreed AQL.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">6</div>
        <h3>Ongoing Programme</h3>
        <p>Successful trial orders grow into seasonal repeat programmes with forecasts shared where possible.</p>
      </div>
    </div>
  </div>
</section>

<section class="section alt" id="supplier-form">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Supplier Registration</span>
      <h2>Submit your company profile.</h2>
      <p>Fields marked * are required. Information is used only to evaluate a sourcing partnership and is treated as commercially confidential. <strong>There is no registration or listing fee — we never charge suppliers.</strong></p>
    </div>

    <div class="form-wrap">
      <?php if ($sent): ?>
        <div class="alert alert-success"><strong>Thank you — your profile has been received.</strong> Our sourcing team will review it and respond within two business days. For anything urgent, email us directly at <?php echo CONTACT_EMAIL; ?>.</div>
      <?php elseif ($error): ?>
        <div class="alert alert-error"><strong>Something went wrong.</strong> Please check the required fields and try again — or email your profile directly to <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>.</div>
      <?php endif; ?>

      <form action="send-inquiry.php" method="post">
        <input type="hidden" name="form_type" value="supplier">
        <div class="hp-field"><label>Leave this field empty<input type="text" name="website_url" tabindex="-1" autocomplete="off"></label></div>

        <div class="form-grid">
          <div class="form-field">
            <label for="company">Company Name *</label>
            <input type="text" id="company" name="company" required>
          </div>
          <div class="form-field">
            <label for="contact_person">Contact Person *</label>
            <input type="text" id="contact_person" name="contact_person" required>
          </div>
          <div class="form-field">
            <label for="designation">Designation <span class="opt">(optional)</span></label>
            <input type="text" id="designation" name="designation" placeholder="e.g. Export Manager / Director">
          </div>
          <div class="form-field">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-field">
            <label for="phone">Phone / WhatsApp *</label>
            <input type="text" id="phone" name="phone" placeholder="+91 ..." required>
          </div>
          <div class="form-field">
            <label for="location">City &amp; State *</label>
            <input type="text" id="location" name="location" placeholder="e.g. Panipat, Haryana" required>
          </div>
          <div class="form-field">
            <label for="category">Product Category *</label>
            <select id="category" name="category" required>
              <option value="">— Select category —</option>
              <option>Organic &amp; Wellness</option>
              <option>Fashion &amp; Apparel</option>
              <option>Leather Goods</option>
              <option>Home &amp; Kitchen</option>
              <option>Handicrafts &amp; Lifestyle</option>
              <option>Agro &amp; Food Products</option>
              <option>Beauty &amp; Personal Care</option>
              <option>Engineering &amp; Hardware</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-field">
            <label for="established">Year Established <span class="opt">(optional)</span></label>
            <input type="text" id="established" name="established" placeholder="e.g. 2008">
          </div>
          <div class="form-field">
            <label for="iec">IEC — Import Export Code <span class="opt">(optional)</span></label>
            <input type="text" id="iec" name="iec">
          </div>
          <div class="form-field">
            <label for="gst">GST Number <span class="opt">(optional)</span></label>
            <input type="text" id="gst" name="gst">
          </div>
          <div class="form-field full">
            <label for="certifications">Certifications Held <span class="opt">(GOTS, OEKO-TEX, ISO, SEDEX, LWG, Organic…)</span></label>
            <input type="text" id="certifications" name="certifications">
          </div>
          <div class="form-field">
            <label for="markets">Currently Exporting To <span class="opt">(optional)</span></label>
            <input type="text" id="markets" name="markets" placeholder="e.g. USA, Germany, UAE — or domestic only">
          </div>
          <div class="form-field">
            <label for="moq">Typical MOQ <span class="opt">(optional)</span></label>
            <input type="text" id="moq" name="moq" placeholder="e.g. 500 pcs / 1,000 m²">
          </div>
          <div class="form-field full">
            <label for="catalogue">Website / Catalogue Link <span class="opt">(optional)</span></label>
            <input type="text" id="catalogue" name="catalogue" placeholder="Website, IndiaMART page or Google Drive catalogue link">
          </div>
          <div class="form-field full">
            <label for="message">Products &amp; Capabilities *</label>
            <textarea id="message" name="message" placeholder="Tell us what you manufacture, your monthly capacity, key machinery/processes, and anything else a buyer should know." required></textarea>
          </div>
        </div>

        <div class="form-submit">
          <button type="submit" class="btn btn-navy">Submit Company Profile</button>
        </div>
        <p class="form-note">By submitting this form you agree to our <a href="privacy.php">Privacy Policy</a>.</p>
        <p class="form-note">Prefer email? Send your company profile and catalogue directly to <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>.</p>
      </form>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Supplier FAQ</span>
      <h2>Questions manufacturers ask us.</h2>
    </div>

    <details class="faq-item">
      <summary>Do you charge any registration, listing or file-processing fee?</summary>
      <div class="faq-body">Never. We earn from the buy side of the trade, not from suppliers. If anyone claiming to represent a UK or EU buyer asks you for an onboarding fee, treat it as a red flag — genuine import houses do not work that way.</div>
    </details>
    <details class="faq-item">
      <summary>What order sizes should we expect?</summary>
      <div class="faq-body">It depends on the category and the client programme. The pattern is always the same: sampling, then a trial order sized sensibly for both sides, then scale into repeat programmes once quality and delivery are proven. We will discuss realistic volumes openly on the introduction call — we don't promise inflated numbers to win attention.</div>
    </details>
    <details class="faq-item">
      <summary>What are your payment terms?</summary>
      <div class="faq-body">Letter of Credit at sight, or telegraphic transfer (TT) with an agreed advance and balance structure — in USD, GBP or EUR. Terms are fixed in the purchase order before production begins and honoured as written.</div>
    </details>
    <details class="faq-item">
      <summary>Do we need export experience to work with you?</summary>
      <div class="faq-body">Export experience and an IEC are preferred, but strong manufacturers currently selling domestically are also considered if quality systems are genuine — the merchant-export route exists for exactly this situation. Tell us your actual position in the form; honesty gets you further than a polished story.</div>
    </details>
    <details class="faq-item">
      <summary>How is quality checked? Who bears inspection costs?</summary>
      <div class="faq-body">Independent pre-shipment inspection to the AQL level agreed in the PO (our default is AQL 2.5). Buy-side inspection costs are ours. Because the standard is agreed in writing before production, there are no moving goalposts at shipment time.</div>
    </details>
    <details class="faq-item">
      <summary>Will you visit our factory?</summary>
      <div class="faq-body">For significant programmes, yes — audits and factory visits by ourselves or independent inspection partners are part of qualification. For initial onboarding, verified certificates, a video walkthrough and references are usually sufficient.</div>
    </details>
    <details class="faq-item">
      <summary>Why don't you show your client names on this website?</summary>
      <div class="faq-body">Our retail clients treat their supply chains as commercially confidential, and we work under NDA. The same discretion protects you: we don't disclose our manufacturers' details to third parties either. What we can show openly is our company registration — <a href="<?php echo COMPANY_CH_URL; ?>" target="_blank" rel="noopener">verify us at UK Companies House (No. <?php echo COMPANY_NO; ?>) ↗</a></div>
    </details>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
