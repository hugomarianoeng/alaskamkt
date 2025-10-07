<!doctype html>
<html lang="pt-PT">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Services — Alaska Marketing</title>
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
    .grid{display:grid;grid-template-columns:repeat(4,1fr);gap:22px}
    .grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:28px}
    .card{background:var(--card);padding:22px;border-radius:8px;box-shadow:var(--shadow);border:1px solid rgba(18,25,32,0.03)}
    .icon-circle{width:56px;height:56px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:#e9f6fb;margin-bottom:10px}
    .card h3{margin:6px 0 10px;font-size:18px}
    .muted{color:var(--muted);font-size:14px}
    .service-detail{background:var(--card);padding:32px;border-radius:8px;box-shadow:var(--shadow);margin-bottom:28px}
    .service-detail h3{color:var(--accent);margin-top:0}
    .service-detail ul{color:var(--muted);line-height:1.8}
    .footer{background:var(--dark);color:#fff;padding:40px 0;margin-top:36px}
    .footer p{color:rgba(255,255,255,0.8)}
    /* responsive */
    @media (max-width:1000px){
      .grid{grid-template-columns:repeat(2,1fr)}
      .grid-2{grid-template-columns:repeat(1,1fr)}
      .hero h1{font-size:44px}
    }
    @media (max-width:640px){
      nav ul{display:none}
      .hero{padding:56px 0}
      .grid{grid-template-columns:repeat(1,1fr)}
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
        <li><a href="services.php" style="color:var(--accent)">Services</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="team.php">Team</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a class="btn-cta" href="contact.php">Get Started</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="inner container">
    <h1>Our Services</h1>
    <p>Comprehensive digital marketing solutions designed to elevate your business and drive measurable results in today's competitive landscape.</p>
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

<!-- SERVICES OVERVIEW -->
<section>
  <div class="container">
    <a href="index.php" class="btn-home">← Back to Home</a>
    
    <div class="grid">
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

<!-- DETAILED SERVICES -->
<section style="background:#fbfeff;padding:64px 0">
  <div class="container">
    <h2 class="section-title">Service Details</h2>
    <p class="section-sub">Learn more about how each service can transform your business and drive growth.</p>

    <div style="max-width:980px;margin:36px auto 0">
      <div class="service-detail">
        <h3>🌐 Website Development & Design</h3>
        <p>We create stunning, high-performance websites that not only look great but also convert visitors into customers. Our approach combines modern design principles with technical excellence.</p>
        <ul>
          <li>Custom responsive design for all devices</li>
          <li>Fast loading times and optimal performance</li>
          <li>SEO-friendly architecture</li>
          <li>User-friendly content management systems</li>
          <li>E-commerce integration</li>
          <li>Ongoing maintenance and support</li>
        </ul>
      </div>

      <div class="service-detail">
        <h3>🎯 Paid Advertising Campaigns</h3>
        <p>Maximize your ROI with expertly managed paid advertising campaigns across Google Ads, Facebook, Instagram, and other platforms. We focus on driving qualified leads and measurable results.</p>
        <ul>
          <li>Strategic campaign planning and setup</li>
          <li>Keyword research and audience targeting</li>
          <li>Ad copywriting and creative design</li>
          <li>A/B testing and optimization</li>
          <li>Budget management and bid optimization</li>
          <li>Detailed performance reporting</li>
        </ul>
      </div>

      <div class="service-detail">
        <h3>🔗 Social Media Management</h3>
        <p>Build a strong social media presence that engages your audience and grows your brand. We handle everything from content creation to community management.</p>
        <ul>
          <li>Content strategy and planning</li>
          <li>Daily posting and scheduling</li>
          <li>Community engagement and response</li>
          <li>Influencer partnerships</li>
          <li>Social media advertising</li>
          <li>Performance analytics and insights</li>
        </ul>
      </div>

      <div class="service-detail">
        <h3>🔍 SEO Optimization</h3>
        <p>Improve your organic search rankings and drive more qualified traffic to your website with our comprehensive SEO services.</p>
        <ul>
          <li>Technical SEO audits and fixes</li>
          <li>Keyword research and strategy</li>
          <li>On-page optimization</li>
          <li>Link building and outreach</li>
          <li>Local SEO optimization</li>
          <li>Monthly reporting and recommendations</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section>
  <div class="container" style="text-align:center">
    <h2 class="section-title">Ready to Get Started?</h2>
    <p class="section-sub">Let's discuss how our services can help your business grow.</p>
    <a href="contact.php" class="btn-cta" style="padding:14px 28px;font-size:16px">Get Your Free Consultation →</a>
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
