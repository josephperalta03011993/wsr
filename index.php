<?php include_once('views/header.php'); ?>

<main>
  <!-- HERO CAROUSEL – fade in on load -->
  <section class="hero-carousel" data-aos="fade-down" data-aos-delay="100">
    <div class="carousel-container">
      <div class="carousel-slide active" style="background-image: url('<?= BASE_URL ?>/public/images/slider-1.png');"></div>
      <div class="carousel-slide" style="background-image: url('<?= BASE_URL ?>/public/images/slider-2.png');"></div>
      <div class="carousel-slide" style="background-image: url('<?= BASE_URL ?>/public/images/slider-3.png');"></div>
      <div class="carousel-slide" style="background-image: url('<?= BASE_URL ?>/public/images/slider-4.png');"></div>
      <div class="carousel-slide" style="background-image: url('<?= BASE_URL ?>/public/images/slider-5.png');"></div>

      <button class="carousel-btn prev">&#10094;</button>
      <button class="carousel-btn next">&#10095;</button>
    </div>
    <div class="carousel-indicators"></div>
  </section>

  <!-- HERO TEXT SECTION -->
  <section class="hero" data-aos="fade-up">
    <h2 data-aos="fade-up" data-aos-delay="200">Welfare and Self-Reliance Services</h2>
    <p data-aos="fade-up" data-aos-delay="400">Online resources of WSR products and services for Stake Leaders, Specialists, Unit Leaders, and members.</p>
    <div class="btn-group" data-aos="fade-up" data-aos-delay="600">
      <a href="#" class="btn btn-primary">Learn More</a>
      <a href="#" class="btn btn-outline">Get Involved</a>
    </div>
  </section>

  <!-- RESOURCES SECTION – cards slide up stagger -->
  <section class="resources">
    <div class="section-header" data-aos="fade-up">
      <h2>Building Self-Reliance through Education, Employment, and Entrepreneurship.</h2>
    </div>
    <div class="grid">
      <div class="card" data-aos="fade-up" data-aos-delay="100">
        <span class="material-icons">explore</span>
        <h3>WSR Products & Services</h3>
        <p>Discover a range of programs designed to uplift and support our values.</p>
        <a href="<?= BASE_URL ?>views/programs.php">Learn More →</a>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="200">
        <span class="material-icons">school</span>
        <h3>Self-Reliance Courses</h3>
        <p>Self-reliance courses are structured learning programs designed to help individuals become more capable of meeting their own needs and improving their quality of life. </p>
        <a href="<?= BASE_URL ?>views/sr-courses.php">View Courses →</a>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="300">
        <span class="material-icons">groups</span>
        <h3>Join a Self-Reliance Group</h3>
        <p>Become part of a network that celebrates achievements and supports others.</p>
        <a href="https://quickreg.churchofjesuschrist.org/" target="_blank">Join a Group →</a>
      </div>
    </div>
  </section>

  <!-- NEWS SECTION – cards from sides + fade -->
  <section class="news">
    <div class="section-header" data-aos="fade-up">
      <p class="subtitle">Updates</p>
      <h2>Latest Updates and Events</h2>
      <p>Stay informed about our latest programs and initiatives.</p>
    </div>
    <div class="grid">
      <div class="news-card" data-aos="fade-left" data-aos-delay="100">
        <img src="https://i.pinimg.com/736x/c8/9a/82/c89a82680e3a58c295d335eebefdfdea.jpg" alt="New Programs">
        <div class="card-body">
          <p class="subtitle">Updates</p>
          <h3>New PEF Approved Programs</h3>
          <p>Explore our new courses designed to enhance your skills and opportunities.</p>
          <a href="../wsr/views/programs.php">Read more →</a>
        </div>
      </div>
      <div class="news-card" data-aos="fade-up" data-aos-delay="200">
        <img src="https://i.pinimg.com/736x/06/51/2c/06512c71b581284a6c2de6cdc12a2446.jpg" alt="Success Stories">
        <div class="card-body">
          <p class="subtitle">Success Stories</p>
          <h3>Inspiring Success Stories</h3>
          <p>Be inspired by the achievements of our members.</p>
          <a href="../wsr/views/successstories.php">Read more →</a>
        </div>
      </div>
      <div class="news-card" data-aos="fade-right" data-aos-delay="100">
        <img src="https://i.pinimg.com/736x/d6/1b/98/d61b98d899a42d3d9151e1c7a71557a2.jpg" alt="Upcoming Events">
        <div class="card-body">
          <p class="subtitle">Events</p>
          <h3>Upcoming Events</h3>
          <p>Join our upcoming training and community events.</p>
          <a href="../wsr/views/news.php">Read more →</a>
        </div>
      </div>
    </div>
    <div class="center" data-aos="fade-up" data-aos-delay="300">
      <a href="#" class="btn btn-outline">View All</a>
    </div>
  </section>

  <!-- CTA SECTION – dramatic entrance -->
  <section class="cta">
    <img src="https://i.pinimg.com/736x/c6/9e/22/c69e2246df9dd5a3a0ad078271ed2140.jpg" alt="Get Involved" class="cta-bg">
    <div class="cta-content">
      <h2 data-aos="fade-up" data-aos-delay="200">Get Involved with WSR Today</h2>
      <p data-aos="fade-up" data-aos-delay="300">
        Apply as Senior Service Missionary for Family Services, Employment Services, Humanitarian, Education, and other support for the Welfare and Self-Reliance Services.
      </p>
      <div class="btn-group" data-aos-offset="-150" data-aos="fade-up" data-aos-delay="400">
        <a href="https://seniormissionary.churchofjesuschrist.org/srsite/help/submit-question?lang=eng" target="_blank" class="btn" id="btn-contact-home">Contact</a>
        <a href="https://seniormissionary.churchofjesuschrist.org/srsite/" target="_blank" class="btn" id="btn-join-home">Join</a>
      </div>
    </div>
  </section>
</main>

<?php include_once('views/footer.php'); ?>