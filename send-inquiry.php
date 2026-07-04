<?php
/* ============================================================
   MKV INTERNATIONAL — form handler
   Handles both the supplier registration form and the
   general contact form. Sends email via PHP mail() and
   keeps a backup copy in storage/inquiries.log
   ============================================================ */

require_once __DIR__ . '/includes/config.php';

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Honeypot — bots fill this hidden field; humans never see it
if (!empty($_POST['website_url'])) {
    header('Location: index.php');
    exit;
}

$formType = ($_POST['form_type'] ?? '') === 'supplier' ? 'supplier' : 'contact';
$backUrl  = $formType === 'supplier' ? 'suppliers.php' : 'contact.php';
$anchor   = $formType === 'supplier' ? '#supplier-form' : '';

function clean($key) {
    $v = trim($_POST[$key] ?? '');
    $v = str_replace(["\r", "\n"], ' ', $v); // header-injection guard
    return substr($v, 0, 500);
}

$email   = clean('email');
$person  = clean('contact_person');
$message = trim($_POST['message'] ?? '');
$message = substr($message, 0, 5000);

// Required fields
if ($person === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $backUrl . '?error=1' . $anchor);
    exit;
}

// Build the email body
if ($formType === 'supplier') {
    $subject = 'New Supplier Registration — ' . (clean('company') ?: $person);
    $lines = [
        'NEW SUPPLIER REGISTRATION',
        '=========================',
        'Company:        ' . clean('company'),
        'Contact person: ' . $person,
        'Designation:    ' . clean('designation'),
        'Email:          ' . $email,
        'Phone/WhatsApp: ' . clean('phone'),
        'City & State:   ' . clean('location'),
        'Category:       ' . clean('category'),
        'Established:    ' . clean('established'),
        'IEC:            ' . clean('iec'),
        'GST:            ' . clean('gst'),
        'Certifications: ' . clean('certifications'),
        'Exporting to:   ' . clean('markets'),
        'Typical MOQ:    ' . clean('moq'),
        'Catalogue:      ' . clean('catalogue'),
        '',
        'Products & capabilities:',
        $message,
    ];
} else {
    $subject = 'Website Enquiry — ' . (clean('subject') ?: 'General');
    $lines = [
        'WEBSITE CONTACT ENQUIRY',
        '=======================',
        'Name:           ' . $person,
        'Company:        ' . clean('company'),
        'Email:          ' . $email,
        'Phone/WhatsApp: ' . clean('phone'),
        'Enquiry type:   ' . clean('subject'),
        '',
        'Message:',
        $message,
    ];
}

$lines[] = '';
$lines[] = '---';
$lines[] = COMPANY_NAME . ' · Company No. ' . COMPANY_NO . ' · Registered office: ' . COMPANY_ADDR;
$lines[] = 'Sent: ' . date('Y-m-d H:i:s') . ' (server time)';
$lines[] = 'IP:   ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown');
$body = implode("\n", $lines);

// Backup log (works even if mail() fails on the host)
$storageDir = __DIR__ . '/storage';
if (!is_dir($storageDir)) {
    @mkdir($storageDir, 0755, true);
}
@file_put_contents(
    $storageDir . '/inquiries.log',
    "\n" . str_repeat('=', 60) . "\n" . $body . "\n",
    FILE_APPEND | LOCK_EX
);

// Send email
$domain  = parse_url(SITE_URL, PHP_URL_HOST) ?: 'mkvinternational.co.uk';
$domain  = preg_replace('/^www\./', '', $domain);
$headers = [
    'From: MKV International Website <noreply@' . $domain . '>',
    'Reply-To: ' . $person . ' <' . $email . '>',
    'X-Mailer: PHP/' . phpversion(),
    'Content-Type: text/plain; charset=UTF-8',
];
@mail(CONTACT_EMAIL, $subject, $body, implode("\r\n", $headers));

// Always show success to the visitor (enquiry is logged either way)
header('Location: ' . $backUrl . '?sent=1' . $anchor);
exit;
