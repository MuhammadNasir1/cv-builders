<?php
$title = "Blog ";
include("./includes/header.php");
include('./includes/navbar.php');
?>
<div class="container-fluid p-0 pt-1">
  <div class="blog-heading-img">
    <div class="heading">
      <h5><a href="index">HOME</a> / About Us</h5>
      <h1>BLOG</h1>
    </div>
  </div>
</div>
<!-- =================== -->
<div class="container">
  <div class="row">
    <!-- ============blog-start=========== -->
    <div class="col-lg-4">
      <a href="./elevateyourcv" class="text-decoration-none">
        <div class="blog-card mt-5">
          <div class="blog-img">
            <img src="https://cdn-blog.novoresume.com/articles/uk-resume-guide/bg-mid.webp" alt="blog">
          </div>
          <div class="p-3">
            <div class="blog-heading ms-2">
              <p> <span class="date me-1">1 JAN </span>| <span style="color:#C21010"><i class='bx bx-time-five ms-1'></i></span> 4 min read</p>
              <h4>Elevate Your CV Game</h4>
            </div>
            <div class="blog-para ms-2 mt-3">
              <p>In the ever-evolving landscape of job applications, your CV remains the linchpin of your professional introduction. As
                technology advances, so do the tools available for crafting that perfect CV. In this blog post, we'll delve into the
                advantages of .....</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- ============blog-End============= -->
    <!-- ============blog-start=========== -->
    <div class="col-lg-4">
      <a href="./craftingaperfect" class="text-decoration-none">
        <div class="blog-card mt-5">
          <div class="blog-img">
            <img src="https://cdn-blog.novoresume.com/articles/uk-resume-guide/bg-mid.webp" alt="blog">
          </div>
          <div class="p-3">
            <div class="blog-heading ms-2">
              <p> <span class="date me-1">10 JAN </span>| <span style="color:#C21010"><i class='bx bx-time-five ms-1'></i></span> 4 min read</p>
              <h4>Crafting the Perfect CV</h4>
            </div>
            <div class="blog-para ms-2 mt-3">
              <p>In today's competitive job market, your resume serves as your first impression on potential employers. A well-crafted
                Curriculum Vitae (CV) is essential for standing out and landing the job of your dreams. Fortunately tools like
                freecvbuilders.com............</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- ============blog-End============= -->

  </div>

</div>

<div class="mt-5">
  <?php
  include('./includes/footer.php');
  include('./includes/end_links.php');
  ?>
</div>