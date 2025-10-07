<!doctype html>
<html lang="pt-PT">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>About — Alaska Marketing</title>
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
    .why-grid{display:flex;gap:24px;justify-content:center;align-items:flex-start;max-width:980px;margin:0 auto;flex-wrap:wrap}
    .why-item{text-align:center;max-width:300px}
    .icon-circle{width:56px;height:56px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:#e9f6fb;margin-bottom:10px}
    .muted{color:var(--muted);font-size:14px}
    .content-box{background:var(--card);padding:32px;border-radius:8px;box-shadow:var(--shadow);max-width:980px;margin:0 auto 28px}
    .content-box h3{color:var(--accent);margin-top:0}
    .stats{display:grid;grid-template-columns:repeat(4,1fr);gap:28px;max-width:980px;margin:36px auto}
    .stat-item{text-align:center;background:var(--card);padding:28px;border-radius:8px;box-shadow:var(--shadow)}
    .stat-number{font-size:48px;font-weight:800;color:var(--accent);margin:0}
    .stat-label{color:var(--muted);margin-top:8px}
    .footer{background:var(--dark);color:#fff;padding:40px 0;margin-top:36px}
    .footer p{color:rgba(255,255,255,0.8)}
    /* responsive */
    @media (max-width:1000px){
      .stats{grid-template-columns:repeat(2,1fr)}
      .hero h1{font-size:44px}
    }
    @media (max-width:640px){
      nav ul{display:none}
      .hero{padding:56px 0}
      .stats{grid-template-columns:repeat(1,1fr)}
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
        <li><a href="about.php" style="color:var(--accent)">About</a></li>
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
    <h1>About Alaska Marketing</h1>
    <p>We're a digital marketing agency dedicated to helping businesses reach new heights with strategic, data-driven solutions.</p>
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

<!-- OUR STORY -->
<section>
  <div class="container">
    <a href="index.php" class="btn-home">← Back to Home</a>
    
    <div class="content-box">
      <h3>Our Story</h3>
      <p>Alaska Marketing was founded with a simple mission: to help businesses navigate the complex world of digital marketing with clarity and confidence. Just like the majestic Alaskan landscape, we believe in reaching new heights and exploring uncharted territories.</p>
      <p>Our journey began when our founders, Hugo Mariano and Francine Montibeller, recognized a gap in the market for authentic, results-driven digital marketing services. They combined their expertise in business strategy and creative design to create an agency that truly partners with clients to achieve their goals.</p>
      <p>Today, we work with businesses of all sizes, from startups to established enterprises, helping them build their digital presence, reach their target audiences, and achieve measurable growth.</p>
    </div>

    <div class="stats">
      <div class="stat-item">
        <p class="stat-number">150+</p>
        <p class="stat-label">Projects Completed</p>
      </div>
      <div class="stat-item">
        <p class="stat-number">50+</p>
        <p class="stat-label">Happy Clients</p>
      </div>
      <div class="stat-item">
        <p class="stat-number">5+</p>
        <p class="stat-label">Years Experience</p>
      </div>
      <div class="stat-item">
        <p class="stat-number">98%</p>
        <p class="stat-label">Client Satisfaction</p>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section style="background:linear-gradient(180deg,#fbfeff, #f3fafc);padding:64px 0">
  <div class="container">
    <h2 class="section-title">Why Choose Alaska Marketing?</h2>
    <p class="section-sub">We plan and execute campaigns that align with your business objectives, deliver measurable ROI and offer full-service support.</p>

    <div class="why-grid" style="margin-top:28px">
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

      <div class="why-item">
        <div class="icon-circle" style="margin:0 auto 12px">🤝</div>
        <h3>Client Partnership</h3>
        <p class="muted">We work closely with you as a true partner, understanding your business and adapting to your needs.</p>
      </div>

      <div class="why-item">
        <div class="icon-circle" style="margin:0 auto 12px">💡</div>
        <h3>Creative Excellence</h3>
        <p class="muted">Our creative team delivers stunning designs and compelling content that captures attention.</p>
      </div>

      <div class="why-item">
        <div class="icon-circle" style="margin:0 auto 12px">📊</div>
        <h3>Transparent Reporting</h3>
        <p class="muted">Regular, detailed reports keep you informed about campaign performance and ROI.</p>
      </div>
    </div>
  </div>
</section>

<!-- OUR VALUES -->
<section>
  <div class="container">
    <h2 class="section-title">Our Values</h2>
    <p class="section-sub">The principles that guide everything we do.</p>

    <div class="content-box">
      <h3>🎯 Results-Driven</h3>
      <p>We focus on delivering measurable results that impact your bottom line. Every strategy, campaign, and creative decision is made with your business goals in mind.</p>
    </div>

    <div class="content-box">
      <h3>🤝 Integrity & Transparency</h3>
      <p>We believe in honest communication and transparent reporting. You'll always know exactly what we're doing, why we're doing it, and what results we're achieving.</p>
    </div>

    <div class="content-box">
      <h3>💡 Innovation</h3>
      <p>The digital landscape is constantly evolving, and so are we. We stay ahead of trends and continuously explore new strategies to keep your business competitive.</p>
    </div>

    <div class="content-box">
      <h3>🌟 Excellence</h3>
      <p>We're committed to delivering exceptional quality in everything we do, from strategy and execution to customer service and support.</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:linear-gradient(180deg,#fbfeff, #f3fafc);padding:64px 0">
  <div class="container" style="text-align:center">
    <h2 class="section-title">Ready to Work Together?</h2>
    <p class="section-sub">Let's discuss how we can help your business grow.</p>
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
