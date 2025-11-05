<?php
  include_once('views/header.php');
?>

  <main>
    <!-- Image Carousel Section ///// temp imgs -->
    <section class="hero-carousel">
      <div class="carousel-container">
        <div class="carousel-slide active"
          style="background-image: url('https://scontent.fmnl25-1.fna.fbcdn.net/v/t1.15752-9/557719747_1323642946108184_2481558595214422262_n.png?_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_ohc=4nyCZM0AalUQ7kNvwGEzwI3&_nc_oc=Adl65lkcRL0bb0NbYOGFEphvcmT97onXvzP-wwrM4_1Otet1dpFVsSgwv52ed9PMLCU&_nc_zt=23&_nc_ht=scontent.fmnl25-1.fna&oh=03_Q7cD3gGT1CKfZ8OBOz0X9WcQvrmdyFIqbvE_sshRl6h0xVkafQ&oe=69173AC6');">
        </div>
        <div class="carousel-slide"
          style="background-image: url('https://scontent.fmnl25-5.fna.fbcdn.net/v/t1.15752-9/565041200_833620082474337_5389071805627715672_n.png?_nc_cat=104&ccb=1-7&_nc_sid=9f807c&_nc_ohc=oDF3uEkuFa4Q7kNvwFolS1S&_nc_oc=AdljpsD96IO1NPMzCP-IMBhNNbTjb47WatUidrh5dqGocC0TTfN_ZserH7OY3fIH6so&_nc_zt=23&_nc_ht=scontent.fmnl25-5.fna&oh=03_Q7cD3gFiXFzYZsOiY2MB6XnaD4eLo3clXg5NBzavgcVaujR-Pw&oe=69173A1E');">
        </div>
        <div class="carousel-slide"
          style="background-image: url('https://scontent.fmnl25-8.fna.fbcdn.net/v/t1.15752-9/553943792_1818853022326768_2633785652949097446_n.png?_nc_cat=110&ccb=1-7&_nc_sid=9f807c&_nc_ohc=qrqX7aAxGuUQ7kNvwF35PbU&_nc_oc=Adl416i7Rg4kK4VNtImFCerjCkTfPUoTT9aYRiNHkU0-0PHxuzhzndVsLYLGprv8suU&_nc_zt=23&_nc_ht=scontent.fmnl25-8.fna&oh=03_Q7cD3gFF4qfQ6K1HYDM1V8a4p1SNovkiijhyPdo6auJ79pshSQ&oe=69171F47');">
        </div>
        <div class="carousel-slide"
          style="background-image: url('https://scontent.fmnl25-3.fna.fbcdn.net/v/t1.15752-9/554212333_755210314245092_7523627676252575029_n.png?_nc_cat=101&ccb=1-7&_nc_sid=9f807c&_nc_ohc=RBbZeQA89IAQ7kNvwHPsEuM&_nc_oc=AdlS1Bi73vWarY4dmnMa3WgM41IZ2vtmLt8xUQAYP-OpTuvzQdci6Z4fBWrA3_aQqOg&_nc_zt=23&_nc_ht=scontent.fmnl25-3.fna&oh=03_Q7cD3gELNQNitosbr-mpf0oEJZQRgPMsOeGRK6ecOebPLo89Fw&oe=691737A9');">
        </div>
        <div class="carousel-slide"
          style="background-image: url('https://scontent.fmnl25-5.fna.fbcdn.net/v/t1.15752-9/565973837_3327016340807352_7131753999055005202_n.png?_nc_cat=104&ccb=1-7&_nc_sid=9f807c&_nc_ohc=Hf1COsEG2QoQ7kNvwFsJpJO&_nc_oc=AdlvlU2VbItNBXLS-vpkQ_QoSuflUgOEDGibL9LlfdD4SrrRE4RrWSSVt47iRiM7VE8&_nc_zt=23&_nc_ht=scontent.fmnl25-5.fna&oh=03_Q7cD3gEPzE4Nmx7x6PDM9nntE08mkfvtQXTS5i_IVlqEBWX2MQ&oe=69171B35');">
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
        <h2>Latest News and Insights</h2>
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
            <p class="subtitle">Updates</p>
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