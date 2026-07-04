# MKV International — Company Website

PHP website for **MKV INTERNATIONAL LIMITED** (Company No. 14529274) — mkvinternational.co.uk

Six pages: Home, About Us, Industries, How We Work, Become a Supplier (vendor registration form), Contact. No framework, no database — runs on any PHP 8+ hosting.

## Editing contact details

Everything lives in **`includes/config.php`** — phone, WhatsApp, email, hours. Edit that one file, commit, redeploy.

Current TODO in that file: replace the two phone placeholders (`PHONE_DISPLAY`, `WHATSAPP_NUMBER`) with the real number.

## Deploying on Hostinger (Git)

1. hPanel → your website → **Advanced → GIT**
2. Repository: `git@github.com:milanjethva-09/mkvinternational.git` · Branch: `main` · Directory: leave blank (deploys to `public_html`)
3. Click **Deploy** after each push — or copy the **Webhook URL** from hPanel and add it in GitHub → repo → Settings → Webhooks, so every push deploys automatically
4. In hPanel enable **free SSL** (Let's Encrypt) and create the mailbox **info@mkvinternational.co.uk** — the forms deliver there

Form submissions are also backed up server-side to `storage/inquiries.log` (blocked from web access; ignored by git).

## Local preview

```
php -S localhost:8000
```
