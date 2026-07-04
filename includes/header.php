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
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Ccircle cx='32' cy='32' r='30' fill='%230f2440'/%3E%3Ccircle cx='32' cy='32' r='28' fill='none' stroke='%23c8a04b' stroke-width='2.5'/%3E%3Ctext x='32' y='39' font-family='Georgia,serif' font-size='17' font-weight='bold' fill='%23c8a04b' text-anchor='middle' letter-spacing='1'%3EMKV%3C/text%3E%3C/svg%3E">
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
    </span>
  </div>
</div>

<!-- Navigation -->
<header class="site-header">
  <div class="container header-inner">
    <a href="index.php" class="brand" aria-label="MKV International — home">
      <svg class="brand-mark" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="32" cy="32" r="30" fill="#0f2440"/><circle cx="32" cy="32" r="29" fill="none" stroke="#c8a04b" stroke-width="2"/><circle cx="32" cy="32" r="24" fill="none" stroke="#c8a04b" stroke-width="0.8" opacity="0.7"/><rect x="30.6" y="5.6" width="2.8" height="2.8" transform="rotate(45 32 7)" fill="#c8a04b"/><rect x="30.6" y="55.6" width="2.8" height="2.8" transform="rotate(45 32 57)" fill="#c8a04b"/><text x="32" y="36.5" font-family="Fraunces, Georgia, serif" font-size="15.5" font-weight="600" letter-spacing="1.2" fill="#c8a04b" text-anchor="middle">MKV</text><text x="32" y="45.5" font-family="Inter, Arial, sans-serif" font-size="5" letter-spacing="2.2" fill="#e3c98a" text-anchor="middle">LONDON</text></svg>
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
