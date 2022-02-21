<?php
    require_once('php/connect.php');

    $sql = "SELECT * FROM articles WHERE status = 'true' ORDER BY RAND() LIMIT 6 ";
    $result = $conn->query($sql);
    
    if(!$result) {
        header('Location: blog.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Homepage </title>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="./assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./assets/images/favicons/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="node_modules/animejs/lib/anime.js"></script>
    
   
</head>
<body>
  <!-- Section Navbar -->
  <?php include_once('includes/navbar.php')?>
  <?php include_once('includes/meta-tag.php')?>

  <!-- PreLoader -->
  <?php include_once('includes/preloader.php')?>

    <!-- Section Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1490818387583-1baba5e638af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=931&q=80');">
            <div class="carousel-caption">
              <h1 class="topic font-weight-bold"> <span id="typed"> Food Story </span> </h1>
              <p class="lead" data-aos="zoom-in-up"> เว็บบล็อกอาหาร  </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80');">
            <div class="carousel-caption">
              <h1 class="topic font-weight-bold text-light"> <span id="typed2"> แหล่งรวมอาหารและเครื่องดื่ม </span> </h1>
              <p class="lead text-light" data-aos="zoom-in-up"> เว็บบล็อกอาหาร  </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1542826438-bd32f43d626f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1292&q=80');">
            <div class="carousel-caption">
              <h1 class="topic font-weight-bold text-light"> <span id="typed2"> ขนมหวานและเบเกอรี่ </span> </h1>
              <p class="lead text-light" data-aos="zoom-in-up"> เว็บบล็อกอาหาร  </p>
            </div>
          </div>
        </div>
      </div>
     
      </div>
      
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Section Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h1 class="border-short-bottom" data-aos="fade-down"> Food Content</h1>
        <p class="lead" data-aos="fade-right"> Content Detail Food Story</p>
      </div>
    </div>

    <!-- Section Blog --> 
    <section class="container">
      <h1 class="border-short-bottom text-center" data-aos="flip-up">บทความ Blog</h1>
      <div class="row">
          <?php while($row=$result->fetch_assoc()) { ?>
          <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
              <a href="blog-detail.php?id=<?php echo $row['id']?>" class="warpper-card-img">
                  <img class="card-img-top" src="<?php echo $base_path_content.$row['image']?>" alt="blogImage">
              </a>
              <div class="card-body">
                  <h5 class="card-title"> <?php echo $row['subject']?> </h5>
                  <p class="card-text"> <?php echo $row['sub_title']?> </p>
              </div>
              <div class="p-3">
                  <a href="blog-detail.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
              </div>
            </div>
          </section>

          <?php } ?>
      </div>
    </section>


  <!-- Section Footer -->
  <?php include_once('includes/footer.php')?>



  <script src="node_modules/jquery/dist/jquery.min.js"></script>  
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/homepage.js"></script>
  <!-- Typed.js -->
  
  <script>
    AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000 // values from 0 to 3000, with step 50ms
    });
  </script>

</body>
</html>

