# MKV International — Company Website

PHP website for **MKV INTERNATIONAL LIMITED** (Company No. 14529274) — mkvinternational.co.uk

Six pages: Home, About Us, Industries (9 sourcing categories), How We Work, Become a Supplier (vendor registration form), Contact. No framework, no database — runs on any PHP 8+ hosting.

## Editing contact details

Everything lives in **`includes/config.php`** — email, hours, company details. Edit that one file, commit, redeploy. Contact is **email-only by design** (no phone number is published on the site).

## Deploying on Hostinger (Git)

1. hPanel → your website → **Advanced → GIT** — repo `https://github.com/milanjethva-09/mkvinternational.git`, branch `main`, directory blank (deploys to `public_html`)
2. Click **Deploy** after each push — or add the hPanel **Webhook URL** in GitHub → repo → Settings → Webhooks so every push deploys automatically
3. In hPanel: keep **SSL** enabled and make sure the mailbox **info@mkvinternational.co.uk** exists — both forms deliver there

Form submissions are also backed up server-side to `storage/inquiries.log` (blocked from web access; ignored by git).

## Local preview

```
php -S localhost:8000
```
