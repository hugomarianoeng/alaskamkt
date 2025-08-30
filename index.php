<?php
// index.php - simples handler que grava contactos em messages.txt
$success = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitizar entradas
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
        // Preparar linha a gravar
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
        // Tentar gravar (cria o ficheiro se não existir)
        if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX) !== false) {
            $success = true;
            // Limpar valores para não reaparecer no form
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
  <title>Alaska Marketing — Demo</title>
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
    .brand{font-weight:700;color:var(--dark);font-size:20px}
    nav ul{display:flex;gap:22px;list-style:none;padding:0;margin:0;align-items:center}
    nav a{color:var(--muted);text-decoration:none}
    .btn-cta{background:var(--dark);color:#fff;padding:10px 14px;border-radius:8px;box-shadow:0 6px 18px rgba(17,24,32,0.12);text-decoration:none}
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
    .hero h1 .accent{color:rgba(255,255,255,0.95);display:block}
    .hero p{color:rgba(255,255,255,0.9);font-size:18px;margin-top:18px}
    .hero .cta{margin-top:28px;display:flex;gap:12px;justify-content:center;flex-wrap:wrap}
    .btn-white{background:#fff;color:var(--dark);padding:12px 20px;border-radius:8px;text-decoration:none}
    /* SVG mountains are absolute to create layered effect */
    .mountains{position:absolute;left:0;right:0;bottom:0;height:320px;pointer-events:none;opacity:0.22}
    /* SECTION: services */
    section{padding:64px 0}
    h2.section-title{font-size:44px;text-align:center;margin:12px 0 8px}
    .section-sub{max-width:760px;margin:0 auto;text-align:center;color:var(--muted);margin-bottom:34px}
    .grid{display:grid;grid-template-columns:repeat(4,1fr);gap:22px}
    .card{background:var(--card);padding:22px;border-radius:8px;box-shadow:var(--shadow);border:1px solid rgba(18,25,32,0.03)}
    .icon-circle{width:56px;height:56px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:#e9f6fb;margin-bottom:10px}
    .card h3{margin:6px 0 10px;font-size:18px}
    .muted{color:var(--muted);font-size:14px}
    /* WHY */
    .why{padding:56px 0;background:linear-gradient(180deg,#fbfeff, #f3fafc)}
    .why-grid{display:flex;gap:24px;justify-content:center;align-items:flex-start;max-width:980px;margin:0 auto}
    .why-item{text-align:center;max-width:300px}
    /* TEAM */
    .team-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:28px;max-width:980px;margin:36px auto 0}
    .profile{background:var(--card);padding:28px;border-radius:8px;box-shadow:var(--shadow);text-align:center}
    .initials{width:96px;height:96px;border-radius:50%;background:#e8f6fb;color:var(--accent);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:28px;margin:0 auto 12px}
    .role{color:var(--accent);font-size:14px;margin-bottom:8px}
    /* CONTACT */
    .contact-wrap{display:flex;gap:28px;max-width:1100px;margin:0 auto;padding:12px 0}
    .contact-left{flex:1;padding:18px}
    .contact-right{width:420px;background:#fff;padding:18px;border-radius:8px;box-shadow:var(--shadow);border:1px solid rgba(18,25,32,0.03)}
    .input{width:100%;padding:10px;border-radius:6px;border:1px solid #e6eef2;margin-bottom:10px}
    textarea.input{height:120px;resize:vertical;padding-top:12px}
    .btn-submit{display:inline-block;background:var(--dark);color:#fff;padding:12px 18px;border-radius:6px;border:none;width:100%;cursor:pointer}
    .footer{background:var(--dark);color:#fff;padding:40px 0;margin-top:36px}
    .footer p{color:rgba(255,255,255,0.8)}
    /* responsive */
    @media (max-width:1000px){
      .grid{grid-template-columns:repeat(2,1fr)}
      .hero h1{font-size:44px}
      .team-grid{grid-template-columns:repeat(1,1fr)}
    }
    @media (max-width:640px){
      nav ul{display:none}
      .hero{padding:56px 0}
      .grid{grid-template-columns:repeat(1,1fr)}
      .contact-wrap{flex-direction:column}
      .contact-right{width:100%}
    }
    /* small helpers */
    .muted-small{color:var(--muted);font-size:13px}
    .success{background:#e6ffef;border:1px solid #bff3d0;padding:10px;border-radius:6px;color:#064e2d;margin-bottom:12px}
    .error{background:#fff0f0;border:1px solid #f3c0c0;padding:10px;border-radius:6px;color:#6b1a1a;margin-bottom:12px}
  </style>
</head>
<body>

<header>
  <div class="container nav">
    <div class="brand">Alaska Marketing</div>
    <nav>
      <ul>
        <li><a href="#services">Services</a></li>
        <li><a href="#why">About</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a class="btn-cta" href="#contact">Get Started</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- HERO -->
<section class="hero" id="home">
  <div class="inner container">
    <h1>
      Digital Marketing
      <span class="accent">Cold as Ice,</span>
      Results that Soar
    </h1>
    <p>Reach new heights with Alaska Marketing's expert digital solutions. From website development to paid advertising, we deliver results as reliable as mountain peaks.</p>

    <div class="cta">
      <a class="btn-white" href="#contact">Get Your Free Consultation →</a>
      <a class="btn-white" style="background:transparent;border:1px solid rgba(255,255,255,0.3);color:#fff" href="#services">View Our Work</a>
    </div>
  </div>

  <!-- Simple layered SVG mountains -->
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

<!-- SERVICES -->
<section id="services">
  <div class="container">
    <h2 class="section-title">Our Services</h2>
    <p class="section-sub">Comprehensive digital marketing solutions designed to elevate your business and drive measurable results in today's competitive landscape.</p>

    <div class="grid" aria-hidden="false">
      <div class="card">
        <div class="icon-circle">🌐</div>
        <h3>Website Development & Design</h3>
        <p class="muted">Custom websites that convert visitors into customers with modern design and optimal performance.</p>
      </div>

      <div class="card">
        <div class="icon-circle">🎯</div>
        <h3>Paid Advertising Campaigns</h3>
        <p class="muted">Strategic Google Ads and Facebook campaigns that maximize ROI and drive qualified leads.</p>
      </div>

      <div class="card">
        <div class="icon-circle">🔗</div>
        <h3>Social Media Management</h3>
        <p class="muted">Engaging social presence that builds brand awareness and community engagement.</p>
      </div>

      <div class="card">
        <div class="icon-circle">✏️</div>
        <h3>Content Creation & Post Design</h3>
        <p class="muted">Compelling visual content and copy that captures attention and drives engagement.</p>
      </div>

      <div class="card">
        <div class="icon-circle">🔍</div>
        <h3>SEO Optimization</h3>
        <p class="muted">Improve your search rankings and organic visibility with proven SEO strategies.</p>
      </div>

      <div class="card">
        <div class="icon-circle">🎨</div>
        <h3>Brand Identity Design</h3>
        <p class="muted">Professional branding that establishes trust and differentiates your business.</p>
      </div>

      <div class="card">
        <div class="icon-circle">✉️</div>
        <h3>Email Marketing</h3>
        <p class="muted">Targeted email campaigns that nurture leads and maintain customer relationships.</p>
      </div>

      <div class="card">
        <div class="icon-circle">📊</div>
        <h3>Analytics & Reporting</h3>
        <p class="muted">Data-driven insights and detailed reporting to optimize your marketing performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section class="why" id="why">
  <div class="container">
    <h2 class="section-title">Why Choose Alaska Marketing?</h2>
    <p class="section-sub">We plan and execute campaigns that align with your business objectives, deliver measurable ROI and offer full-service support.</p>

    <div class="why-grid" style="margin-top:28px;flex-wrap:wrap">
      <div class="why-item">
        <div class="icon-circle" style="margin:0 auto 12px">🎯</div>
        <h3>Strategic Approach</h3>
        <p class="muted">Every campaign is meticulously planned with data-driven strategies that align with your business goals.</p>
      </div>

      <div class="why-item">
        <div class="icon-circle" style="margin:0 auto 12px">📈</div>
        <h3>Proven Results</h3>
        <p class="muted">Track record of delivering measurable ROI and sustainable growth for businesses across industries.</p>
      </div>

      <div class="why-item">
        <div class="icon-circle" style="margin:0 auto 12px">🌐</div>
        <h3>Full-Service Solutions</h3>
        <p class="muted">From website development to ongoing campaigns, we're your complete digital partner.</p>
      </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section id="team">
  <div class="container">
    <h2 class="section-title">Meet Our Team</h2>
    <p class="section-sub">The visionary leaders behind Alaska Marketing's success, bringing expertise and passion to every project.</p>

    <div class="team-grid">
      <div class="profile">
        <div class="initials">HM</div>
        <h3>Hugo Mariano</h3>
        <div class="role">Founder & CEO</div>
        <p class="muted">Leading Alaska Marketing with expertise in digital strategy and business growth, bringing years of experience in scaling businesses.</p>
      </div>

      <div class="profile">
        <div class="initials">FM</div>
        <h3>Francine Montibeller</h3>
        <div class="role">Co-Founder & Creative Director</div>
        <p class="muted">Creative visionary behind our brand identity and content strategies, specializing in visual design and campaigns.</p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="container">
    <h2 class="section-title" style="text-align:left">Start Your Project Today</h2>
    <p class="section-sub" style="text-align:left">Ready to elevate your digital presence? Get in touch for a free consultation.</p>

    <div class="contact-wrap">
      <div class="contact-left">
        <h3>Get in Touch</h3>
        <p class="muted-small">✉️ hello@alaskamarketing.com</p>
        <p class="muted-small">📞 +1 (555) 123-4567</p>
        <p class="muted-small">📍 Anchorage, Alaska</p>

        <h4 style="margin-top:18px">Follow Us</h4>
        <div style="display:flex;gap:12px;margin-top:8px">
          <div style="width:36px;height:36px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center;border:1px solid #e6eef2">🔗</div>
          <div style="width:36px;height:36px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center;border:1px solid #e6eef2">📷</div>
          <div style="width:36px;height:36px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center;border:1px solid #e6eef2">✉️</div>
        </div>
      </div>

      <div class="contact-right">
        <?php if ($success): ?>
          <div class="success">Obrigado — a sua mensagem foi recebida com sucesso. Responderemos em breve.</div>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
          <div class="error">
            <?php foreach ($errors as $e) echo htmlspecialchars($e) . "<br>"; ?>
          </div>
        <?php endif; ?>

        <form method="post" action="#contact" novalidate>
          <div style="display:flex;gap:8px">
            <input class="input" type="text" name="first_name" placeholder="First Name" value="<?php echo isset($first)?htmlspecialchars($first):''; ?>" />
            <input class="input" type="text" name="last_name" placeholder="Last Name" value="<?php echo isset($last)?htmlspecialchars($last):''; ?>" />
          </div>
          <input class="input" type="email" name="email" placeholder="john@example.com" value="<?php echo isset($email)?htmlspecialchars($email):''; ?>" />
          <input class="input" type="text" name="company" placeholder="Your Company" value="<?php echo isset($company)?htmlspecialchars($company):''; ?>" />
          <textarea class="input" name="message" placeholder="Tell us about your project..."><?php echo isset($message)?htmlspecialchars($message):''; ?></textarea>

          <button class="btn-submit" type="submit">Send Message ✈</button>
        </form>
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