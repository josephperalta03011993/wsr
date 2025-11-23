<?php include 'header.php'; ?>

<main>
  <section class="news">
    <div class="section-header" data-aos="fade-up">
      <p class="subtitle">Programs</p>
      <h2>Self-Reliance Courses</h2>
      <p>Learn about the Self-Reliance courses that may help you today. Start your self-reliance path by joining a group within your stake or district.</p>
    </div>

    <div class="grid">
      <!-- Your three main course cards -->
      <div class="news-card" data-aos="fade-left" data-aos-delay="100">
        <img src="https://assets.ldscdn.org/5e/09/5e09d20caaa680f6e7305eb4c833f7839e1bf42d/personal_finances_self_reliance.jpeg" alt="Personal Finances">
        <div class="card-body">
          <p class="subtitle">SR Courses - Finances</p>
          <h3><a href="https://www.churchofjesuschrist.org/self-reliance/course-materials/personal-finances?lang=eng" target="_blank">Personal Finances for Self-Reliance</a></h3>
          <p>For those who want better control over their finances. Group members will learn how to eliminate debt, protect against financial hardship, and invest in the future. Spouses are encouraged to attend together.</p>
          <a href="https://quickreg.churchofjesuschrist.org/?lang=eng" target="_blank">Find a Group</a>
        </div>
      </div>

      <div class="news-card" data-aos="fade-up" data-aos-delay="200">
        <img src="https://assets.ldscdn.org/a3/b9/a3b946444d8f281f4f4c62a2c04badda2bfb5f72/education_better_work_self_reliance.jpeg" alt="Education for Better Work">
        <div class="card-body">
          <p class="subtitle">SR Courses - Education</p>
          <h3><a href="https://www.churchofjesuschrist.org/self-reliance/course-materials/education-for-better-work?lang=eng" target="_blank">Education for Better Work</a></h3>
          <p>For those who need additional education or training to get a job. Group members will research, create, and present career and education plans.</p>
          <a href="https://quickreg.churchofjesuschrist.org/?lang=eng" target="_blank">Find a Group</a>
        </div>
      </div>

      <div class="news-card" data-aos="fade-right" data-aos-delay="100">
        <img src="https://assets.ldscdn.org/d5/ea/d5ea0627687bdc4b05ba3b95521b948bfc8ad3ef/cover_find_better_job_manual.jpeg" alt="Find a Better Job">
        <div class="card-body">
          <p class="subtitle">SR Courses - Employment</p>
          <h3><a href="https://www.churchofjesuschrist.org/self-reliance/course-materials/find-a-better-job?lang=eng" target="_blank">Find a Better Job</a></h3>
          <p>For those who are looking for work or a better job. Group members will learn to identify opportunities, network, and prepare for interviews.</p>
          <a href="https://quickreg.churchofjesuschrist.org/?lang=eng" target="_blank">Find a Group</a>
        </div>
      </div>
    </div>

    <!-- THUMBNAIL SCROLLER WITH TITLE -->
    <div class="center" data-aos="fade-up" data-aos-delay="300">
      <div style="margin-bottom: 2rem;">
        <p style="color: #991b1b; font-weight: 600; margin: 0; font-size: 0.95rem; letter-spacing: 0.5px;">
          Real Members • Real Progress
        </p>
        <h3 style="margin: 0.5rem 0 0; color: #1f2937;">
          Self-Reliance in Action Across the Stake
        </h3>
      </div>

      <div class="thumbnail-scroller">
        <div class="thumbnail-track">
          <!-- First set -->
          <img src="<?= BASE_URL ?>/public/images/slider-1.png" alt="Self-Reliance group meeting">
          <img src="<?= BASE_URL ?>/public/images/slider-2.png" alt="Members learning together">
          <img src="<?= BASE_URL ?>/public/images/slider-3.png" alt="Job skills workshop">
          <img src="<?= BASE_URL ?>/public/images/slider-4.png" alt="Graduation celebration">
          <img src="<?= BASE_URL ?>/public/images/slider-5.png" alt="EnglishConnect class">
          <img src="<?= BASE_URL ?>/public/images/slider-6.png" alt="Financial planning session">
          <img src="<?= BASE_URL ?>/public/images/slider-7.png" alt="Business planning group">
          <img src="<?= BASE_URL ?>/public/images/slider-8.png" alt="Youth self-reliance activity">

          <!-- Duplicate set for seamless infinite loop -->
          <img src="<?= BASE_URL ?>/public/images/slider-1.png" alt="Self-Reliance group meeting">
          <img src="<?= BASE_URL ?>/public/images/slider-2.png" alt="Members learning together">
          <img src="<?= BASE_URL ?>/public/images/slider-3.png" alt="Job skills workshop">
          <img src="<?= BASE_URL ?>/public/images/slider-4.png" alt="Graduation celebration">
          <img src="<?= BASE_URL ?>/public/images/slider-5.png" alt="EnglishConnect class">
          <img src="<?= BASE_URL ?>/public/images/slider-6.png" alt="Financial planning session">
          <img src="<?= BASE_URL ?>/public/images/slider-7.png" alt="Business planning group">
          <img src="<?= BASE_URL ?>/public/images/slider-8.png" alt="Youth self-reliance activity">
        </div>
      </div>
      
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>