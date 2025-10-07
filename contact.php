<?php
// contact.php - handles contact form submissions
$success = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $first = trim(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING));
    $last = trim(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $company = trim(filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    if (!$first) $errors[] = "Por favor, indique o nome.";
    if (!$last) $errors[] = "Por favor, indique o apelido.";
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email inválido.";
    if (!$message) $errors[] = "Por favor, escreva uma mensagem.";

    if (empty($errors)) {
        // Prepare entry to save
        $entry = sprintf(
            "[%s] %s %s <%s> | %s\nMessage: %s\n\n",
            date('Y-m-d H:i:s'),
            $first,
            $last,
            $email,
            $company,
            $message
        );

        $file = __DIR__ . '/messages.txt';
        // Try to save (creates file if it doesn't exist)
        if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX) !== false) {
            $success = true;
            // Clear values so they don't reappear in form
            $first = $last = $email = $company = $message = '';
        } else {
            $errors[] = "Não foi possível gravar a sua mensagem. Verifique permissões do ficheiro messages.txt.";
        }
    }
}
?>
<!doctype html>
<html lang="pt-PT">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contact — Alaska Marketing</title>
  <style>
    :root{
      --accent:#118fd6;
      --dark:#2f3a44;
      --muted:#7b8893;
      --card:#ffffff;
      --bg:#f7fbfd;
      --hero-start:#15384f;
      --hero-end:#0ea0e6;
      --shadow: 0 6px 18px rgba(17,24,32,0.08);
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    body{margin:0;color:var(--dark);background:var(--bg);line-height:1.5}
    header{background:rgba(255,255,255,0.9);backdrop-filter: blur(4px);position:sticky;top:0;z-index:10;border-bottom:1px solid #eef3f6}
    .container{max-width:1150px;margin:0 auto;padding:0 24px}
    .nav{display:flex;align-items:center;justify-content:space-between;padding:18px 0}
    .brand{font-weight:700;color:var(--dark);font-size:20px;text-decoration:none}
    nav ul{display:flex;gap:22px;list-style:none;padding:0;margin:0;align-items:center}
    nav a{color:var(--muted);text-decoration:none}
    .btn-cta{background:var(--dark);color:#fff;padding:10px 14px;border-radius:8px;box-shadow:0 6px 18px rgba(17,24,32,0.12);text-decoration:none}
    .btn-home{background:var(--accent);color:#fff;padding:10px 14px;border-radius:8px;text-decoration:none;display:inline-block;margin-bottom:20px}
    /* HERO */
    .hero{
      color:#fff;
      padding:80px 0 90px;
      text-align:center;
      position:relative;
      overflow:hidden;
      background: linear-gradient(180deg,var(--hero-start),var(--hero-end));
    }
    .hero .inner{max-width:880px;margin:0 auto;padding:30px 16px}
    .hero h1{font-size:56px;margin:8px 0 8px;line-height:1.02;font-weight:800}
    .hero p{color:rgba(255,255,255,0.9);font-size:18px;margin-top:18px}
    .mountains{position:absolute;left:0;right:0;bottom:0;height:320px;pointer-events:none;opacity:0.22}
    /* SECTION */
    section{padding:64px 0}
    h2.section-title{font-size:44px;text-align:center;margin:12px 0 8px}
    .section-sub{max-width:760px;margin:0 auto;text-align:center;color:var(--muted);margin-bottom:34px}
    .contact-wrap{display:flex;gap:28px;max-width:1100px;margin:0 auto;padding:12px 0}
    .contact-left{flex:1;padding:18px}
    .contact-right{width:420px;background:#fff;padding:18px;border-radius:8px;box-shadow:var(--shadow);border:1px solid rgba(18,25,32,0.03)}
    .input{width:100%;padding:10px;border-radius:6px;border:1px solid #e6eef2;margin-bottom:10px}
    textarea.input{height:120px;resize:vertical;padding-top:12px}
    .btn-submit{display:inline-block;background:var(--dark);color:#fff;padding:12px 18px;border-radius:6px;border:none;width:100%;cursor:pointer}
    .muted-small{color:var(--muted);font-size:13px}
    .success{background:#e6ffef;border:1px solid #bff3d0;padding:10px;border-radius:6px;color:#064e2d;margin-bottom:12px}
    .error{background:#fff0f0;border:1px solid #f3c0c0;padding:10px;border-radius:6px;color:#6b1a1a;margin-bottom:12px}
    .info-card{background:var(--card);padding:24px;border-radius:8px;box-shadow:var(--shadow);margin-bottom:20px}
    .info-card h3{margin-top:0;color:var(--accent)}
    .footer{background:var(--dark);color:#fff;padding:40px 0;margin-top:36px}
    .footer p{color:rgba(255,255,255,0.8)}
    /* responsive */
    @media (max-width:1000px){
      .hero h1{font-size:44px}
    }
    @media (max-width:640px){
      nav ul{display:none}
      .hero{padding:56px 0}
      .contact-wrap{flex-direction:column}
      .contact-right{width:100%}
    }
  </style>
</head>
<body>

<header>
  <div class="container nav">
    <a href="index.php" class="brand">Alaska Marketing</a>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="team.php">Team</a></li>
        <li><a href="contact.php" style="color:var(--accent)">Contact</a></li>
        <li><a class="btn-cta" href="contact.php">Get Started</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="inner container">
    <h1>Get In Touch</h1>
    <p>Ready to elevate your digital presence? Let's discuss how we can help your business grow.</p>
  </div>

  <svg class="mountains" viewBox="0 0 1200 260" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <linearGradient id="g1" x1="0" x2="0" y1="0" y2="1">
        <stop offset="0" stop-color="#ffffff" stop-opacity="0.06"/>
        <stop offset="1" stop-color="#ffffff" stop-opacity="0.02"/>
      </linearGradient>
    </defs>
    <path d="M0,220 L140,110 L220,160 L320,80 L420,140 L540,50 L720,160 L900,80 L1080,160 L1200,120 L1200,260 L0,260 Z" fill="#0b73a7" opacity="0.16"/>
    <path d="M0,240 L180,140 L300,190 L420,100 L540,160 L680,80 L820,180 L980,100 L1200,200 L1200,260 L0,260 Z" fill="#0d8fbd" opacity="0.12"/>
    <rect x="0" y="200" width="1200" height="60" fill="url(#g1)"/>
  </svg>
</section>

<!-- CONTACT SECTION -->
<section>
  <div class="container">
    <a href="index.php" class="btn-home">← Back to Home</a>

    <div class="contact-wrap">
      <div class="contact-left">
        <h2 style="margin-top:0">Start Your Project Today</h2>
        <p style="color:var(--muted)">Ready to elevate your digital presence? Get in touch for a free consultation.</p>

        <div class="info-card">
          <h3>📧 Email</h3>
          <p class="muted-small">hello@alaskamarketing.com</p>
          <p class="muted-small" style="margin-top:8px">We typically respond within 24 hours</p>
        </div>

        <div class="info-card">
          <h3>📞 Phone</h3>
          <p class="muted-small">+1 (555) 123-4567</p>
          <p class="muted-small" style="margin-top:8px">Mon-Fri: 9am - 6pm (Alaska Time)</p>
        </div>

        <div class="info-card">
          <h3>📍 Location</h3>
          <p class="muted-small">Anchorage, Alaska</p>
          <p class="muted-small" style="margin-top:8px">Serving clients worldwide</p>
        </div>

        <h4 style="margin-top:24px">Follow Us</h4>
        <div style="display:flex;gap:12px;margin-top:12px">
          <div style="width:36px;height:36px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center;border:1px solid #e6eef2;box-shadow:var(--shadow)">🔗</div>
          <div style="width:36px;height:36px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center;border:1px solid #e6eef2;box-shadow:var(--shadow)">📷</div>
          <div style="width:36px;height:36px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center;border:1px solid #e6eef2;box-shadow:var(--shadow)">✉️</div>
        </div>
      </div>

      <div class="contact-right">
        <h3 style="margin-top:0">Send Us a Message</h3>
        
        <?php if ($success): ?>
          <div class="success">✓ Thank you for your message! We'll get back to you soon.</div>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
          <div class="error">
            <?php foreach ($errors as $e) echo htmlspecialchars($e) . "<br>"; ?>
          </div>
        <?php endif; ?>

        <form method="post" action="contact.php" novalidate>
          <div style="display:flex;gap:8px">
            <input class="input" type="text" name="first_name" placeholder="First Name" value="<?php echo isset($first)?htmlspecialchars($first):''; ?>" required />
            <input class="input" type="text" name="last_name" placeholder="Last Name" value="<?php echo isset($last)?htmlspecialchars($last):''; ?>" required />
          </div>
          <input class="input" type="email" name="email" placeholder="john@example.com" value="<?php echo isset($email)?htmlspecialchars($email):''; ?>" required />
          <input class="input" type="text" name="company" placeholder="Your Company (Optional)" value="<?php echo isset($company)?htmlspecialchars($company):''; ?>" />
          <textarea class="input" name="message" placeholder="Tell us about your project..." required><?php echo isset($message)?htmlspecialchars($message):''; ?></textarea>

          <button class="btn-submit" type="submit">Send Message ✈</button>
        </form>

        <p class="muted-small" style="margin-top:12px;text-align:center">We respect your privacy and will never share your information.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section style="background:linear-gradient(180deg,#fbfeff, #f3fafc);padding:64px 0">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <p class="section-sub">Quick answers to common questions about working with us.</p>

    <div style="max-width:880px;margin:36px auto 0">
      <div class="info-card">
        <h3>How long does it take to get started?</h3>
        <p class="muted-small">We can typically begin work within 1-2 weeks after our initial consultation and agreement on project scope.</p>
      </div>

      <div class="info-card">
        <h3>What is your pricing structure?</h3>
        <p class="muted-small">Our pricing varies based on project scope and services required. We offer both project-based and monthly retainer options. Contact us for a custom quote.</p>
      </div>

      <div class="info-card">
        <h3>Do you work with businesses outside of Alaska?</h3>
        <p class="muted-small">Absolutely! While we're based in Alaska, we work with clients worldwide through virtual meetings and collaboration tools.</p>
      </div>

      <div class="info-card">
        <h3>What makes Alaska Marketing different?</h3>
        <p class="muted-small">We combine strategic thinking with creative excellence, delivering data-driven results while maintaining transparent communication throughout every project.</p>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="container" style="text-align:center">
    <h3 style="margin:0;color:#fff">Alaska Marketing</h3>
    <p style="margin:8px auto 0;max-width:700px">Digital marketing solutions as reliable as mountain peaks.</p>
    <p style="margin-top:18px;color:rgba(255,255,255,0.6)">© <?php echo date('Y'); ?> Alaska Marketing. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
