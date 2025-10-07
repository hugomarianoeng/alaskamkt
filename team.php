<!doctype html>
<html lang="pt-PT">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Team — Alaska Marketing</title>
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
    .team-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:28px;max-width:980px;margin:36px auto 0}
    .profile{background:var(--card);padding:28px;border-radius:8px;box-shadow:var(--shadow);text-align:center}
    .initials{width:96px;height:96px;border-radius:50%;background:#e8f6fb;color:var(--accent);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:28px;margin:0 auto 12px}
    .role{color:var(--accent);font-size:14px;margin-bottom:8px}
    .muted{color:var(--muted);font-size:14px}
    .profile h3{margin:8px 0 4px}
    .skills{display:flex;gap:8px;justify-content:center;flex-wrap:wrap;margin-top:16px}
    .skill-tag{background:#e9f6fb;color:var(--accent);padding:6px 12px;border-radius:20px;font-size:12px}
    .footer{background:var(--dark);color:#fff;padding:40px 0;margin-top:36px}
    .footer p{color:rgba(255,255,255,0.8)}
    /* responsive */
    @media (max-width:1000px){
      .team-grid{grid-template-columns:repeat(1,1fr)}
      .hero h1{font-size:44px}
    }
    @media (max-width:640px){
      nav ul{display:none}
      .hero{padding:56px 0}
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
        <li><a href="team.php" style="color:var(--accent)">Team</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a class="btn-cta" href="contact.php">Get Started</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="inner container">
    <h1>Meet Our Team</h1>
    <p>The visionary leaders and talented professionals behind Alaska Marketing's success, bringing expertise and passion to every project.</p>
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

<!-- LEADERSHIP TEAM -->
<section>
  <div class="container">
    <a href="index.php" class="btn-home">← Back to Home</a>
    
    <h2 class="section-title">Leadership Team</h2>
    <p class="section-sub">Meet the founders who are driving Alaska Marketing's vision and success.</p>

    <div class="team-grid">
      <div class="profile">
        <div class="initials">HM</div>
        <h3>Hugo Mariano</h3>
        <div class="role">Founder & CEO</div>
        <p class="muted">Leading Alaska Marketing with expertise in digital strategy and business growth, bringing years of experience in scaling businesses. Hugo's strategic vision and data-driven approach have helped countless clients achieve their marketing goals.</p>
        <div class="skills">
          <span class="skill-tag">Digital Strategy</span>
          <span class="skill-tag">Business Growth</span>
          <span class="skill-tag">Analytics</span>
          <span class="skill-tag">Leadership</span>
        </div>
      </div>

      <div class="profile">
        <div class="initials">FM</div>
        <h3>Francine Montibeller</h3>
        <div class="role">Co-Founder & Creative Director</div>
        <p class="muted">Creative visionary behind our brand identity and content strategies, specializing in visual design and campaigns. Francine's artistic eye and innovative approach bring brands to life through compelling visual storytelling.</p>
        <div class="skills">
          <span class="skill-tag">Creative Direction</span>
          <span class="skill-tag">Brand Design</span>
          <span class="skill-tag">Content Strategy</span>
          <span class="skill-tag">Visual Design</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EXTENDED TEAM -->
<section style="background:linear-gradient(180deg,#fbfeff, #f3fafc);padding:64px 0">
  <div class="container">
    <h2 class="section-title">Our Extended Team</h2>
    <p class="section-sub">Talented specialists who bring diverse skills and expertise to every project.</p>

    <div class="team-grid">
      <div class="profile">
        <div class="initials">SM</div>
        <h3>Sarah Mitchell</h3>
        <div class="role">Senior Digital Strategist</div>
        <p class="muted">Expert in developing comprehensive digital marketing strategies that drive results. Sarah specializes in paid advertising, SEO, and conversion optimization.</p>
        <div class="skills">
          <span class="skill-tag">PPC Campaigns</span>
          <span class="skill-tag">SEO</span>
          <span class="skill-tag">Analytics</span>
        </div>
      </div>

      <div class="profile">
        <div class="initials">JC</div>
        <h3>James Chen</h3>
        <div class="role">Lead Web Developer</div>
        <p class="muted">Full-stack developer with a passion for creating fast, beautiful, and user-friendly websites. James ensures every site we build is optimized for performance and conversions.</p>
        <div class="skills">
          <span class="skill-tag">Web Development</span>
          <span class="skill-tag">UX Design</span>
          <span class="skill-tag">Performance</span>
        </div>
      </div>

      <div class="profile">
        <div class="initials">ER</div>
        <h3>Emma Rodriguez</h3>
        <div class="role">Social Media Manager</div>
        <p class="muted">Social media expert who creates engaging content and builds vibrant online communities. Emma's strategies have helped brands grow their social presence exponentially.</p>
        <div class="skills">
          <span class="skill-tag">Social Media</span>
          <span class="skill-tag">Content Creation</span>
          <span class="skill-tag">Community</span>
        </div>
      </div>

      <div class="profile">
        <div class="initials">DK</div>
        <h3>David Kim</h3>
        <div class="role">Content Strategist</div>
        <p class="muted">Skilled writer and strategist who crafts compelling content that resonates with audiences. David's work drives engagement and builds brand authority.</p>
        <div class="skills">
          <span class="skill-tag">Content Writing</span>
          <span class="skill-tag">SEO Content</span>
          <span class="skill-tag">Strategy</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TEAM CULTURE -->
<section>
  <div class="container">
    <h2 class="section-title">Our Team Culture</h2>
    <p class="section-sub">What makes Alaska Marketing a great place to work and partner with.</p>

    <div style="max-width:980px;margin:36px auto 0;display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
      <div style="background:var(--card);padding:28px;border-radius:8px;box-shadow:var(--shadow);text-align:center">
        <div style="font-size:48px;margin-bottom:12px">🎯</div>
        <h3 style="margin:0 0 8px">Results-Focused</h3>
        <p class="muted">We're driven by delivering measurable results for our clients.</p>
      </div>

      <div style="background:var(--card);padding:28px;border-radius:8px;box-shadow:var(--shadow);text-align:center">
        <div style="font-size:48px;margin-bottom:12px">🤝</div>
        <h3 style="margin:0 0 8px">Collaborative</h3>
        <p class="muted">We work together as a team and with our clients as partners.</p>
      </div>

      <div style="background:var(--card);padding:28px;border-radius:8px;box-shadow:var(--shadow);text-align:center">
        <div style="font-size:48px;margin-bottom:12px">💡</div>
        <h3 style="margin:0 0 8px">Innovative</h3>
        <p class="muted">We constantly explore new ideas and stay ahead of trends.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:linear-gradient(180deg,#fbfeff, #f3fafc);padding:64px 0">
  <div class="container" style="text-align:center">
    <h2 class="section-title">Want to Work With Us?</h2>
    <p class="section-sub">Let's discuss how our team can help your business succeed.</p>
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
