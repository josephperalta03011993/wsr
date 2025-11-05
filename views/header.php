<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Homepage - find basic information in the WSR Library.">
  <meta name="author" content="Jaryne Moraleda Manrique, Ryan Manrique, Joseph Peralta">
  <title>Homepage | Welfare & Self-Reliance</title>

  <!-- Open Graph tags -->
  <meta property="og:title" content="WSR Library Programs">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://josephperalta03011993.github.io-website../public/assets/logo.png">
  <meta property="og:url" content="https://josephperalta03011993.github.io-website../public/index.html">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="icon" href="../public/images/logo.png" type="image/x-icon">

  <link rel="stylesheet" href="../public/css/styles.css">

  <script src="../public/js/main.js" defer></script>
</head>

<body>
  <header class="site-header">
    <!-- LOGO -->
    <a href="/index.php" class="logo">
      <img src="../public/images/logo.png" alt="WSR Logo"> <!-- need to figure out how to link this to index without duplicating -->
    </a>

    <!-- DESKTOP NAV -->
    <nav class="main-nav desktop-only" aria-label="Primary navigation">
      <a href="/index.php">Home</a>

      <!-- Programs & Services Mega-menu -->
      <div class="dropdown">
        <button class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
          Programs & Services
          <span class="material-icons">expand_more</span>
        </button>

        <div class="mega-menu">
          <!-- SWG -->
          <div class="submenu">
            <strong>Specialized Working Groups (SWG)</strong>
            <a href="/views/swg-how-to-organize.php">How to organize</a>
            <a href="/views/swg-roles.php">Roles and Responsibilities</a>
          </div>

          <!-- Self-reliance Courses -->
          <div class="submenu">
            <strong>Self-reliance Courses</strong>
            <a href="/views/self-reliance.php">Courses (all)</a>
            <a href="/views/self-reliance.php#courses">Courses</a>
            <a href="/views/self-reliance-manuals.php">Download Manuals</a>

            <strong style="margin-top:0.75rem;display:block;">QuickReg Registration</strong>
            <a href="/views/quickreg-group.php">Register a Group</a>
            <a href="/views/quickreg-conclude.php">Conclude a Group</a>
            <a href="/views/quickreg-certs.php">Print Certificates</a>
            <a href="/views/quickreg-share.php">Share success stories</a>
          </div>

          <!-- Education Services -->
          <div class="submenu">
            <a href="/wsr/views/education-services.php"><strong>Education Support Services</strong></a>

            <strong style="margin-top:0.5rem;display:block;">Perpetual Education Fund</strong>
            <a href="/views/pef-roadmap.php">Roadmap</a>
            <a href="/wsr/views/education-services.php#how-to-apply">How to Apply</a>
            <a href="/views/pef-schools.php">Approved schools & programs</a>
            <a href="/views/pef-loan.php">Apply for a PEF Loan</a>

            <strong style="margin-top:0.5rem;display:block;">Benson Agriculture & Food Scholarships</strong>
            <a href="/views/benson-roadmap.php">Roadmap</a>
            <a href="/views/benson-form.php">Download Application Form</a>
            <a href="mailto:wsrph-education@churchofjesuschrist.org?subject=Benson%20Scholarship%20Application">
              Submit an application (email)
            </a>

            <a href="/views/education-other.php">Other Resources</a>
            <a href="/views/education-success.php">Success Stories</a>
          </div>

          <!-- Employment Services -->
          <div class="submenu">
            <strong>Employment Services</strong>
            <a href="/views/employment.php">Landing Page</a>
            <a href="/views/ajs.php">AJS</a>
            <a href="/views/coaching.php">Personalized Coaching</a>

          <!-- Family & Humanitarian -->
            <strong>Family Services</strong>
            <a href="/views/family.php">Landing Page</a>
          </div>

          <div class="submenu">
            <strong>Humanitarian Services</strong>
            <a href="/views/humanitarian.php">Landing Page</a>

          <!-- My Plan -->
            <strong>My Plan Conference</strong>
            <a href="/views/myplan.php">Info & Registration</a>
          </div>
        </div>
      </div>

      <a href="/views/successstories.php">Success Stories</a>
      <a href="/views/contacts.php">Contact Us</a>
      <a href="/views/about.php">About Us</a>
    </nav>

    <!-- CTA BUTTON (desktop) -->
    <a href="#learn" class="btn btn-primary desktop-only">Learn</a>

    <!-- MOBILE TOGGLE -->
    <button class="mobile-toggle" aria-label="Open menu" aria-expanded="false">
      <span class="material-icons">menu</span>
    </button>
  </header>

  <!-- MOBILE DRAWER (hidden by default) -->
  <div class="mobile-drawer" aria-hidden="true">
    <div class="mobile-drawer-header">
      <a href="/index.php" class="logo mobile-logo">
        <img src="../public/images/logo.png" alt="WSR Logo">
      </a>
      <button class="mobile-close" aria-label="Close menu">
        <span class="material-icons">close</span>
      </button>
    </div>

    <nav class="mobile-nav" aria-label="Mobile navigation">
      <a href="/index.php" class="mobile-nav-link">Home</a>

      <!-- Mobile Accordion for Programs & Services -->
      <div class="mobile-accordion">
        <button class="mobile-accordion-toggle">
          Programs & Services
          <span class="material-icons">expand_more</span>
        </button>
        <div class="mobile-accordion-panel">
          <!-- repeat the same submenu structure -->
          <!-- (copy-paste the <div class="submenu"> blocks from the mega-menu) -->
          <div class="submenu">
            <strong>Specialized Working Groups (SWG)</strong>
            <a href="/views/swg-how-to-organize.php">How to organize</a>
            <a href="/views/swg-roles.php">Roles and Responsibilities</a>
          </div>
          <!-- … all other submenus … -->
        </div>
      </div>

      <a href="/views/successstories.php" class="mobile-nav-link">Success Stories</a>
      <a href="/views/contacts.php" class="mobile-nav-link">Contact Us</a>
      <a href="/views/about.php" class="mobile-nav-link">About Us</a>

      <a href="#learn" class="btn btn-primary mobile-cta">Learn</a>
    </nav>
  </div>