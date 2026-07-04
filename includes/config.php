<?php
/* ============================================================
   MKV INTERNATIONAL LIMITED — site configuration
   This is the ONLY file you need to edit for contact details.
   Everything here updates across the whole website.
   ============================================================ */

/* --- Company (verified at Companies House — do not change) --- */
define('COMPANY_NAME',  'MKV International Limited');
define('COMPANY_NO',    '14529274');
define('COMPANY_ADDR',  '71–75 Shelton Street, Covent Garden, London WC2H 9JQ, United Kingdom');
define('COMPANY_CH_URL','https://find-and-update.company-information.service.gov.uk/company/14529274');
define('COMPANY_EST',   '2022');

/* --- Contact — TODO: replace the two phone placeholders --- */
define('SITE_URL',        'https://www.mkvinternational.co.uk');
define('CONTACT_EMAIL',   'info@mkvinternational.co.uk');   // shown on site + receives form enquiries
define('PHONE_DISPLAY',   '+44 7XXX XXX XXX');               // TODO: real number, e.g. +44 7911 123456
define('WHATSAPP_NUMBER', '447XXXXXXXXX');                   // TODO: digits only, no + (used in wa.me link)
define('HOURS_UK',        'Mon–Fri · 09:00–18:00 (UK)');
define('HOURS_IN',        'India enquiries answered until 22:30 IST');

/* --- Meta --- */
define('SITE_NAME', 'MKV International');

$currentPage = $currentPage ?? '';
$pageTitle   = $pageTitle   ?? SITE_NAME;
$pageDesc    = $pageDesc    ?? 'MKV International Limited — London-based import & sourcing company connecting Indian manufacturers with retailers across the UK and EU.';

function wa_link() {
    return 'https://wa.me/' . WHATSAPP_NUMBER;
}
