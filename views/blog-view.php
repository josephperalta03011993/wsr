<?php
include_once('header.php');
include_once(__DIR__ . '/../config/database.php');
//include_once(__DIR__ . '/../../config/database.php'); 

$slug = $_GET['slug'] ?? '';
$stmt = $conn->prepare("SELECT * FROM blogs WHERE slug = ? AND status = 'published' LIMIT 1");
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();
?>

<main class="blog-single-page">

  <?php if ($post): ?>

    <!-- CINEMATIC FULL-WIDTH HERO (just like homepage & stories) -->
    <section class="hero-carousel blog-hero-single" data-aos="fade-down">
      <div class="carousel-container">
        <div class="carousel-slide active"
             style="background-image: url('<?= BASE_URL ?>/public/images/<?= htmlspecialchars($post['image'] ?: 'default-blog-hero.jpg') ?>');">
          <div class="hero-overlay"></div>
          <div class="hero-text container text-center">
            <p class="subtitle text-light mb-2" data-aos="fade-up" data-aos-delay="200">
              <span class="material-icons" style="font-size:1.1rem;vertical-align:-2px;">person</span>
              <?= ucwords(htmlspecialchars($post['author'])) ?>
              &nbsp;&nbsp;•&nbsp;&nbsp;
              <span class="material-icons" style="font-size:1.1rem;vertical-align:-2px;">calendar_today</span>
              <?= date('F j, Y', strtotime($post['published_at'] ?? $post['created_at'])) ?>
            </p>
            <h1 data-aos="fade-up" data-aos-delay="400" class="display-4">
              <?= htmlspecialchars($post['title']) ?>
            </h1>
          </div>
        </div>
      </div>
    </section>

    <!-- MAIN CONTENT – Clean, readable, beautiful -->
    <article class="blog-content py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-xl-8">

            <!-- Featured Image (below hero on mobile, full width) -->
            <div class="featured-image mb-5" data-aos="fade-up">
              <img src="<?= BASE_URL ?>/public/images/<?= htmlspecialchars($post['image'] ?: 'default-blog.jpg') ?>"
                   alt="<?= htmlspecialchars($post['title']) ?>"
                   class="img-fluid rounded-4 shadow-lg w-100"
                   style="max-height: 520px; object-fit: cover;"
                   loading="lazy">
            </div>

            <!-- Article Body -->
            <div class="content-text lead" data-aos="fade-up" data-aos-delay="200">
              <?= $post['content'] // Already sanitized in DB + nl2br if needed ?>
            </div>

            <!-- Back Button + Share (optional) -->
            <div class="mt-5 pt-4 border-top d-flex flex-wrap gap-3 justify-content-between align-items-center" 
                 data-aos="fade-up" data-aos-delay="400">
              <a href="<?= BASE_URL ?>views/successstories.php" class="btn btn-outline">
                Back to All Stories
              </a>

              <!-- <div class="share-buttons text-muted small">
                Share:
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($_SERVER['REQUEST_URI']) ?>" 
                   target="_blank" class="mx-2">Facebook</a> •
                <a href="https://twitter.com/intent/tweet?url=<?= urlencode($_SERVER['REQUEST_URI']) ?>&text=<?= urlencode($post['title']) ?>" 
                   target="_blank" class="mx-2">Twitter</a> •
                <a href="whatsapp://send?text=<?= urlencode($post['title'] . ' ' . $_SERVER['REQUEST_URI']) ?>" 
                   class="mx-2">WhatsApp</a>
              </div> -->
            </div>

          </div>
        </div>
      </div>
    </article>

  <?php else: ?>

    <!-- 404-STYLE NOT FOUND (still beautiful) -->
    <section class="hero py-5 text-center" style="min-height:70vh; display:flex; align-items:center;">
      <div class="container" data-aos="fade-up">
        <h1 class="display-3 mb-4">Story Not Found</h1>
        <p class="lead text-muted mb-4">
          The success story you're looking for may have been moved, unpublished, or is temporarily unavailable.
        </p>
        <a href="<?= BASE_URL ?>views/successstories.php" class="btn btn-primary btn-lg">
          Back to Success Stories
        </a>
      </div>
    </section>

  <?php endif; ?>

  <!-- MATCHING CTA (same as other pages) -->
  <section class="cta" data-aos="zoom-in">
    <img src="<?= BASE_URL ?>/public/images/plane-clouds.jpg" alt="Share your story" class="cta-bg">
    <div class="cta-content container">
      <h2 data-aos="fade-up" data-aos-delay="200">Your Story Could Be Next</h2>
      <p data-aos="fade-up" data-aos-delay="400">
        Thousands are being blessed through Welfare and Self-Reliance Services.<br>
        Share your journey and inspire others today.
      </p>
      <div class="btn-group" data-aos="fade-up" data-aos-delay="600">
        <a href="<?= BASE_URL ?>views/contact-us.php" class="btn btn-outline-light">Contact Us</a>
        <a href="https://forms.gle/aL66HtzPnQto37Bk6" target="_blank" class="btn btn-light">Submit Your Story</a>
      </div>
    </div>
  </section>

</main>

<?php include_once(__DIR__ . '/footer.php'); ?>