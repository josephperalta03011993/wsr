<?php
  include_once('header.php');
  include_once(__DIR__ . '/../config/database.php'); 

  // Fetch published blogs
  $query = "SELECT * FROM blogs WHERE status = 'published' ORDER BY published_at DESC";
  $result = $conn->query($query);
?>

<main class="blogs-page">

  <!-- Hero Section -->
  <section class="hero blog-hero text-center py-5">
    <div class="container">
      <h2 class="mb-3">Success Stories</h2>
      <p class="lead text-muted">Read inspiring stories, updates, and insights from Welfare and Self-Reliance.</p>
    </div>
  </section>

  <!-- Blog List Section -->
  <section class="blogs-list py-5">
    <div class="container">
      <div class="section-header text-center mb-5">
        <h2 class="mb-2">Latest Articles</h2>
        <p class="text-muted">Explore helpful tips, success stories, and news from our community initiatives.</p>
      </div>

      <div class="grid">
        <?php if ($result && $result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
            <?php
              // Construct the full image path
              $imagePath = !empty($row['image']) 
                ? '../public/images/' . htmlspecialchars($row['image']) 
                : 'assets/images/default-blog.jpg';
            ?>
            <div class="blog-card">
              <img src="<?php echo $imagePath; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
              <div class="card-body">
                <p class="subtitle text-muted mb-1"><?php echo ucfirst($row['author']); ?></p>
                <h3 class="blog-title mb-2"><?php echo htmlspecialchars($row['title']); ?></h3>
                <p class="blog-excerpt mb-3"><?php echo substr(strip_tags($row['content']), 0, 120); ?>...</p>
                <a href="blog_view.php?slug=<?php echo urlencode($row['slug']); ?>" class="read-more">Read More &gt;</a>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p class="center text-muted">No published blog posts yet.</p>
        <?php endif; ?>
      </div>

    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta position-relative py-5 text-center">
    <img src="https://i.pinimg.com/736x/c6/9e/22/c69e2246df9dd5a3a0ad078271ed2140.jpg" alt="" class="cta-bg">
    <div class="cta-content container">
      <h2 class="text-light mb-3">Share Your Story With Us</h2>
      <p class="text-light mb-4">Have an inspiring journey or insight to share? Join our blog contributors and empower others.</p>
      <div class="btn-group">
        <button class="btn btn-outline-light">Contact Us</button>
        <button class="btn btn-light">Submit Story</button>
      </div>
    </div>
  </section>

</main>

<?php include_once('footer.php'); ?>
