<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='8' fill='%230f2440'/%3E%3Ctext x='32' y='42' font-family='Georgia,serif' font-size='26' font-weight='bold' fill='%23c8a04b' text-anchor='middle'%3EMKV%3C/text%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Top legal bar -->
<div class="topbar">
  <div class="container topbar-inner">
    <span class="topbar-legal">Registered in England &amp; Wales &middot; Company No. <?php echo COMPANY_NO; ?></span>
    <span class="topbar-contact">
      <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
      <span class="topbar-sep">|</span>
      <a href="<?php echo wa_link(); ?>" target="_blank" rel="noopener">WhatsApp: <?php echo PHONE_DISPLAY; ?></a>
    </span>
  </div>
</div>

<!-- Navigation -->
<header class="site-header">
  <div class="container header-inner">
    <a href="index.php" class="brand" aria-label="MKV International — home">
      <span class="brand-mark">MKV</span>
      <span class="brand-text">
        <span class="brand-name">MKV INTERNATIONAL</span>
        <span class="brand-tag">Import &amp; Sourcing &middot; London</span>
      </span>
    </a>
    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <nav class="site-nav" aria-label="Main navigation">
      <a href="index.php"      class="<?php echo $currentPage==='home' ? 'active' : ''; ?>">Home</a>
      <a href="about.php"      class="<?php echo $currentPage==='about' ? 'active' : ''; ?>">About Us</a>
      <a href="industries.php" class="<?php echo $currentPage==='industries' ? 'active' : ''; ?>">Industries</a>
      <a href="how-we-work.php" class="<?php echo $currentPage==='process' ? 'active' : ''; ?>">How We Work</a>
      <a href="contact.php"    class="<?php echo $currentPage==='contact' ? 'active' : ''; ?>">Contact</a>
      <a href="suppliers.php"  class="nav-cta <?php echo $currentPage==='suppliers' ? 'active' : ''; ?>">Become a Supplier</a>
    </nav>
  </div>
</header>
