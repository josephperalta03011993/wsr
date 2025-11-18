<?php
  include_once('views/header.php');
?>

  <main>
    <!-- Image Carousel Section ///// temp imgs -->
    <section class="hero-carousel">
      <div class="carousel-container">
        <div class="carousel-slide active"
          style="background-image: url('<?= BASE_URL ?>/public/images/slider-1.png');">
        </div>
        <div class="carousel-slide"
          style="background-image: url('<?= BASE_URL ?>/public/images/slider-2.png');">
        </div>
        <div class="carousel-slide"
          style="background-image: url(''<?= BASE_URL ?>/public/images/slider-3.png');">
        </div>
        <div class="carousel-slide"
          style="background-image: url(''<?= BASE_URL ?>/public/images/slider-4.png');">
        </div>
        <div class="carousel-slide"
          style="background-image: url(''<?= BASE_URL ?>/public/images/slider-5.png');">
        </div>

        <button class="carousel-btn prev">&#10094;</button>
        <button class="carousel-btn next">&#10095;</button>
      </div>
      <div class="carousel-indicators"></div>
    </section>

    <!-- Hero Section -->
    <section class="hero">
      <h2>Welfare and Self-Reliance Services</h2>
      <p> Online resources of WSR products and services for Stake Leaders, Specialists, Unit Leaders, and members.</p>
      <div class="btn-group">
        <button class="btn btn-primary">Learn More</button>
        <button class="btn btn-outline">Get Involved</button>
      </div>
    </section>

    <!-- Resources Section -->
    <section class="resources">
      <div class="section-header">
        <h2>Building Self-Reliance through Education, Employment, and Entrepreneurship.</h2>
      </div>
      <div class="grid">
        <div class="card">
          <span class="material-icons">explore</span>
          <h3>WSR Toolbox</h3>
          <p>Discover a range of programs designed to uplift and support our values.</p>
          <a href="#">Learn More &gt;</a>
        </div>
        <div class="card">
          <span class="material-icons">school</span>
          <h3>Self-Reliance Courses</h3>
          <p>We provide resources and diverse educational offerings tailored for success.</p>
          <a href="#">Sign Up &gt;</a>
        </div>
        <div class="card">
          <span class="material-icons">groups</span>
          <h3>Join a Self-Reliance Group</h3>
          <p>Become part of a network that celebrates achievements and supports others.</p>
          <a href="../wsr/views/group.php">Contact Us &gt;</a>
        </div>
      </div>
    </section>

    <!-- News Section -->
    <section class="news">
      <div class="section-header">
        <p class="subtitle">Updates</p>
        <h2>Latest Updates and Events</h2>
        <p>Stay informed about our latest programs and initiatives.</p>
      </div>
      <div class="grid">
        <div class="news-card">
          <img src="https://i.pinimg.com/736x/c8/9a/82/c89a82680e3a58c295d335eebefdfdea.jpg" alt="">
          <div class="card-body">
            <p class="subtitle">Updates</p>
            <h3>New PEF Approved Programs</h3>
            <p>Explore our new courses designed to enhance your skills and opportunities.</p>
            <a href="../wsr/views/programs.php">Read more &gt;</a>
          </div>
        </div>
        <div class="news-card">
          <img src="https://i.pinimg.com/736x/06/51/2c/06512c71b581284a6c2de6cdc12a2446.jpg" alt="">
          <div class="card-body">
            <p class="subtitle">Success Stories</p>
            <h3>Inspiring Success Stories</h3>
            <p>Be inspired by the achievements of our members.</p>
            <a href="../wsr/views/successstories.php">Read more &gt;</a>
          </div>
        </div>
        <div class="news-card">
          <img src="https://i.pinimg.com/736x/d6/1b/98/d61b98d899a42d3d9151e1c7a71557a2.jpg" alt="">
          <div class="card-body">
            <p class="subtitle">Events</p>
            <h3>Upcoming Events</h3>
            <p>Join our upcoming training and community events.</p>
            <a href="../wsr/views/news.php">Read more &gt;</a>
          </div>
        </div>
      </div>
      <div class="center">
        <button class="btn btn-outline">View All</button>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
      <img src="https://i.pinimg.com/736x/c6/9e/22/c69e2246df9dd5a3a0ad078271ed2140.jpg" alt="" class="cta-bg">
      <div class="cta-content">
        <h2>Get Involved with WSR Today</h2>
        <p>By empowering communities through welfare and self-reliance programs, your support makes a
          difference!</p>
        <div class="btn-group">
          <button class="btn btn-outline-light">Contact</button>
          <button class="btn btn-light">Join</button>
        </div>
      </div>
    </section>
  </main>
<?php 
  include_once('views/footer.php');
?>