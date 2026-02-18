
<?php
  //define('BASE_URL', 'https://www.wsrph.org/'); 
  define('BASE_URL', '/wsr/'); 
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Homepage - find basic information in the WSR Library.">
  <meta name="author" content="Jaryne Moraleda Manrique, Ryan Manrique, Joseph Peralta,">
  <title>Homepage | Welfare & Self-Reliance</title>

  <!-- Open Graph tags -->
  <meta property="og:title" content="WSR Library Programs">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://josephperalta03011993.github.io-website../public/assets/logo.png">
  <meta property="og:url" content="https://josephperalta03011993.github.io-website../public/index.html">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="icon" href="<?= BASE_URL ?>/public/images/logo.png" type="image/x-icon">
  <!-- In views/header.php, inside <head> -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/styles.css">

  <script src="<?= BASE_URL ?>/public/js/main.js" defer></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
  <header class="site-header">
    <!-- LOGO -->
    <a href="/index.php" class="logo">
      <img src="<?= BASE_URL ?>/public/images/logo.png" alt="WSR Logo"> <!-- need to figure out how to link this to index without duplicating -->
    </a>

    <!-- DESKTOP NAV -->
    <nav class="main-nav desktop-only" aria-label="Primary navigation">
      <a href="<?= BASE_URL ?>">Home</a>

      <!-- Programs & Services Mega-menu -->
      <div class="dropdown" x-data="{ menuOpen: false, openSection: null}">
        <button class="dropdown-toggle" 
                @click="menuOpen = !menuOpen"
                aria-haspopup="true" 
                :aria-expanded="menuOpen">
            Programs & Services
          <span class="material-icons">expand_more</span>
        </button>

        <!-- Programs & Services submenu -->
        <div class="leaders-menu" x-show="menuOpen" x-transition x-cloak>
          <!-- Self-Reliance Courses -->  
          <div class="submenu">
            <button class="submenu-title"
                    @click="openSection = openSection === 'swg' ? null : 'swg'"
                    :class="{ 'active': openSection === 'swg' }">
              Self-Reliance Courses
            </button>
            <div class="submenu-panel" x-show="openSection === 'swg'" x-transition x-cloak>
              <a href="<?= BASE_URL ?>views/sr-courses.php">Courses</a>
              <a href="<?= BASE_URL ?>views/sr-courses.php#sr-courses">Download Manuals</a>
            </div>
          </div>
          <!-- Education Support Services -->
          <div class="submenu">
            <button class="submenu-title"
                    @click="openSection = openSection === 'education' ? null : 'education'"
                    :class="{ 'active': openSection === 'education' }">
              Education Support Services
            </button>
            <div>
              <div class="submenu-panel" x-show="openSection === 'education'" x-transition x-cloak>
                <a href="<?= BASE_URL ?>views/pef.php">Perpetual Education Fund</a>
                <a href="<?= BASE_URL ?>views/benson-scholarship.php">Benson Scholarship</a>
                <a href="<?= BASE_URL ?>views/education-services.php">Education Resources</a>
                <a href="<?= BASE_URL ?>views/scholarships-grants.php">Scholarships & Grants</a>
            </div>
          </div>
          <!-- Employment Services -->
          <div class="submenu">
            <button class="submenu-title"
                    @click="openSection = openSection === 'employmentServices' ? null : 'employmentServices'"
                    :class="{ 'active': openSection === 'employmentServices' }">
              Employment Services
            </button>
            <div class="submenu-panel" x-show="openSection === 'employmentServices'" x-transition x-cloak>
              <a href="/views/ajs.php">AJS</a>
              <a href="/views/coaching.php">Personalized Coaching</a>
            </div>
          </div>
          <!-- Humanitarian Services -->
          <div class="submenu">
            <button class="submenu-title"
                    @click="openSection = openSection === 'humanitarian' ? null : 'humanitarian'"
                    :class="{ 'active': openSection === 'humanitarian' }">
              Humanitarian Services
            </button>
          </div>
          <!-- Family Services -->
          <div class="submenu">
            <button class="submenu-title"
                    @click="openSection = openSection === 'family' ? null : 'family'"
                    :class="{ 'active': openSection === 'family' }">
              Family Services
            </button>
            <div class="submenu-panel" x-show="openSection === 'family'" x-transition x-cloak>
              <a href="/views/fs_cosultation.php">Consultation</a>
              <a href="/views/self-reliance.php#courses">Addiction Recovery Support Groups</a>
              <a href="/views/self-reliance-manuals.php">Courses</a>
              <a href="/views/self-reliance-manuals.php">Online Resources</a>
            </div>
          </div>
          <!-- My Plan Conference -->
          <div class="submenu">
            <button class="submenu-title"
                    @click="openSection = openSection === 'myplan' ? null : 'myplan'"
                    :class="{ 'active': openSection === 'myplan' }">
              My Plan Conference
            </button>
            <div class="submenu-panel" x-show="openSection === 'myplan'" x-transition x-cloak>
              <a href="/views/myplan.php">Info & Registration</a>
            </div>
          </div>
        </div>
      </div>

      <a href="<?= BASE_URL ?>views/successstories.php">Success Stories</a>
      <a href="<?= BASE_URL ?>views/contacts.php">About Us</a> <!--Contact Us will go to this page-->
      <div class="dropdown" x-data="{ menuOpen: false, openSection: null }">
        <!-- Leaders Resources button -->
        <button class="dropdown-toggle"
                @click="menuOpen = !menuOpen"
                aria-haspopup="true"
                :aria-expanded="menuOpen">
            Leaders Resources
          <span class="material-icons">expand_more</span>
        </button>

        <!-- Leaders submenu -->
        <div class="leaders-menu" x-show="menuOpen" x-transition x-cloak>
          
          <!-- SWG -->
          <div class="submenu">
            <button class="submenu-title"
                    @click="openSection = openSection === 'swg' ? null : 'swg'"
                    :class="{ 'active': openSection === 'swg' }">
              Specialized Working Groups
            </button>
            <div class="submenu-panel" x-show="openSection === 'swg'" x-transition x-cloak>
              <a href="<?= BASE_URL ?>views/swg.php">Overview</a>
              <a href="/views/swg-how-to-organize.php">How to Organize</a>
              <a href="/views/swg-roles.php">Roles and Responsibilities</a>
            </div>
          </div>

          <!-- QuickReg -->
          <div class="submenu">
            <button class="submenu-title"
                    @click="openSection = openSection === 'quickreg' ? null : 'quickreg'"
                    :class="{ 'active': openSection === 'quickreg' }">
              QuickReg Registration
            </button>
            <div class="submenu-panel" x-show="openSection === 'quickreg'" x-transition x-cloak>
              <a href="https://www.englishconnect.org/quickreg-flyer.pdf" target="_blank">Register a Group</a>
              <a href="https://rise.articulate.com/share/..." target="_blank">Conclude a Group</a>
              <a href="https://rise.articulate.com/share/..." target="_blank">Print Certificates</a>
              <a href="https://rise.articulate.com/share/..." target="_blank">QuickReg 2.0 Training</a>
              <a href="https://rise.articulate.com/share/..." target="_blank">FAQs</a>
            </div>
          </div>
        </div>
      </div>

    </nav>

    <!-- CTA BUTTON (desktop) -->
    <!-- <a href="#learn" class="btn btn-primary desktop-only">Learn</a> -->

    <!-- MOBILE TOGGLE -->
    <button class="mobile-toggle" aria-label="Open menu" aria-expanded="false">
      <span class="material-icons">menu</span>
    </button>
  </header>

  <!-- MOBILE DRAWER (hidden by default) -->
  <div class="mobile-drawer" aria-hidden="true">
    <div class="mobile-drawer-header">
      <a href="/index.php" class="logo mobile-logo">
        <img src="<?= BASE_URL ?>/public/images/logo.png" alt="WSR Logo">
      </a>
      <button class="mobile-close" aria-label="Close menu">
        <span class="material-icons">close</span>
      </button>
    </div>

    <nav class="mobile-nav" aria-label="Mobile navigation">
      <a href="<?= BASE_URL ?>/index.php" class="mobile-nav-link">Home</a>

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

      <a href="<?= BASE_URL ?>views/successstories.php" class="mobile-nav-link">Success Stories</a>
      <a href="<?= BASE_URL ?>views/contacts.php" class="mobile-nav-link">Contact Us</a>
      <a href="<?= BASE_URL ?>views/about.php" class="mobile-nav-link">About Us</a>

      <!-- <a href="#learn" class="btn btn-primary mobile-cta">Learn</a> -->
    </nav>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init({
        duration: 800,
        easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
        once: true,        // Animation happens only once
        offset: -150,
        delay: 0,
      });

      setTimeout(function() {
        AOS.refresh();
      }, 800);  // 800ms delay
    });
  </script>