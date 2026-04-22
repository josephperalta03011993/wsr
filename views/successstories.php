<?php
include_once('header.php');
include_once(__DIR__ . '/../config/database.php');

// Fetch published blogs
$query = "SELECT * FROM blogs WHERE status = 'published' ORDER BY published_at DESC";
$result = $conn->query($query);
?>

<main class="blogs-page">

  <!-- FULL-WIDTH CINEMATIC HERO (matches homepage carousel style) -->
  <section class="hero-carousel blog-hero-section" data-aos="fade-down">
    <div class="carousel-container">
      <div class="carousel-slide active" 
           style="background-image: url('<?= BASE_URL ?>/public/images/success-stories/local-family-2.jpg');">
        <div class="hero-overlay"></div>
        <div class="hero-text container">
          <h1 data-aos="fade-up" data-aos-delay="300">Success Stories & Insights</h1>
          <p data-aos="fade-up" data-aos-delay="500">
            Real people. Real transformation. Be inspired by journeys of faith, education, employment, and self-reliance.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- LATEST ARTICLES SECTION -->
  <section class="py-5">
    <div class="container">
      <div class="section-header text-center mb-5" data-aos="fade-up">
        <h2>Latest Success Stories</h2>
        <p class="text-muted">Powerful testimonies from members who have walked the path of self-reliance</p>
      </div>

      <div class="grid">
        <?php if ($result && $result->num_rows > 0): ?>
          <?php 
          $delay = 100;
          while ($row = $result->fetch_assoc()): 
            $imagePath = !empty($row['image']) 
              ? '../public/images/' . htmlspecialchars($row['image']) 
              : 'https://via.placeholder.com/800x600.png?text=No+Image';
          ?>
            <article class="blog-card" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
              <div class="blog-image">
                <img src="<?= $imagePath ?>" alt="<?= htmlspecialchars($row['title']) ?>" loading="lazy">
              </div>
              <div class="card-body">
                <p class="subtitle text-muted mb-1">
                  <span class="material-icons" style="font-size:1rem;vertical-align:-2px;">person</span>
                  <?= ucwords(htmlspecialchars($row['author'])) ?>
                  &nbsp;&nbsp;•&nbsp;&nbsp;
                  <span class="material-icons" style="font-size:1rem;vertical-align:-2px;">calendar_today</span>
                  <?= date('M j, Y', strtotime($row['published_at'])) ?>
                </p>
                <h3 class="blog-title mb-2"><?= htmlspecialchars($row['title']) ?></h3>
                <p class="blog-excerpt text-muted">
                  <?= substr(strip_tags($row['content']), 0, 140) ?>...
                </p>
                <a href="<?=BASE_URL?>views/blog-view.php?slug=<?= urlencode($row['slug']) ?>" class="read-more">
                  Read the Full Story <span class="material-icons" style="font-size:1.1em;">arrow_right_alt</span>
                </a>
              </div>
            </article>
            <?php 
            $delay += 100;
            if ($delay > 400) $delay = 100; // reset stagger
            endwhile; 
          ?>
        <?php else: ?>
          <p class="center text-muted py-5" data-aos="fade-up">
            No success stories published yet. Check back soon!
          </p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- PREMIUM CTA SECTION (matches homepage exactly) -->
  <section class="cta" data-aos="zoom-in">
    <img src="<?= BASE_URL ?>public/images/success-stories/female-2.jpg" alt="Share your story" class="cta-bg">
    <div class="cta-content container">
      <h2 data-aos="fade-up" data-aos-delay="200">Your Story Matters</h2>
      <p data-aos="fade-up" data-aos-delay="400">
        Have you overcome challenges through education, employment, or entrepreneurship with WSR support?<br>
        Inspire thousands by sharing your journey.
      </p>
      <div class="btn-group" data-aos="fade-up" data-aos-delay="600">
        <a href="https://www.churchofjesuschrist.org/welcome/find-a-church?lang=eng" target="_blank" class="btn btn-outline-light">Contact Us</a>
        <a href="https://forms.gle/aL66HtzPnQto37Bk6" target="_blank" class="btn btn-light">Submit Your Story</a>
      </div>
    </div>
  </section>

</main>

<?php include_once('footer.php'); ?>