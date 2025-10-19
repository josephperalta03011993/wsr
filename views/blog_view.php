<?php
  include_once(__DIR__ . '/header.php');
  include_once(__DIR__ . '/../config/database.php');

  // Get slug from URL
  $slug = $_GET['slug'] ?? '';

  // Secure query to get the blog post
  $stmt = $conn->prepare("SELECT * FROM blogs WHERE slug = ? AND status = 'published' LIMIT 1");
  $stmt->bind_param("s", $slug);
  $stmt->execute();
  $result = $stmt->get_result();
  $post = $result->fetch_assoc();
?>

<main class="blog-view">
  <?php if ($post): ?>
    <section class="hero blog-hero">
      <h2><?php echo htmlspecialchars($post['title']); ?></h2>
      <p class="subtitle">
        By <?php echo htmlspecialchars($post['author']); ?> 
        | <?php echo date('F j, Y', strtotime($post['published_at'] ?? $post['created_at'])); ?>
      </p>
    </section>

    <section class="blog-content container">
      <img 
        src="<?php echo htmlspecialchars($post['image'] ?: 'assets/images/default-blog.jpg'); ?>" 
        alt="<?php echo htmlspecialchars($post['title']); ?>" 
        class="blog-featured-image"
      >
      <div class="content-text">
        <?php echo nl2br($post['content']); ?>
      </div>

      <div class="back-link">
        <a href="blogs.php" class="btn btn-outline">&lt; Back to Blogs</a>
      </div>
    </section>
  <?php else: ?>
    <section class="hero blog-hero">
      <h2>Blog Not Found</h2>
      <p>The blog post you’re looking for may have been removed or is unpublished.</p>
      <div class="back-link">
        <a href="blogs.php" class="btn btn-outline">&lt; Back to Blogs</a>
      </div>
    </section>
  <?php endif; ?>
</main>

<?php include_once(__DIR__ . '/footer.php'); ?>
