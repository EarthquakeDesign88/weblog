<?php
    require_once('php/connect.php');

    $sql = "SELECT * FROM articles WHERE id = '".$_GET['id']."' AND status = 'true' ";
    $result = $conn->query($sql) or die($conn->error);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        header('Location: blog.php');
    }

    $sql_RAND = "SELECT * FROM articles WHERE status = 'true' ORDER BY RAND() LIMIT 6 ";
    $result_RAND = $conn->query($sql_RAND);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $row['subject']?> </title>
   
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
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php')?>
    <?php include_once('includes/meta-tag.php')?>

    <!-- PreLoader -->
    <?php include_once('includes/preloader.php')?>
    
    <!-- Section Page-title -->
    <header data-jarallax='{ "speed": 0.6 }' class="jarallax" style="background-image: url('<?php echo $base_path_content.$row['image']?>');">   
        <div class="blog-image">
            <h1 class="display-4 font-weight-bold"> <?php echo $row['subject']?> </h1>
            <p class="lead"> <?php echo $row['sub_title']?> </p>
        </div>
    </header>

    <!-- Section Blog -->
    <section class="container blog-content">
        <div class="row">
          <div class="col-12">
             <?php echo $row['detail']?>
          </div>

          <div class="col-12">
              <hr>
              <p class="text-right text-muted"> <?php echo date_format(new DateTime($row['updated_at']), "J F Y");?> </p>
          </div>

          <div class="col-12">
            <div class="owl-carousel owl-theme">
                <?php while($row_RAND = $result_RAND->fetch_assoc() ){ ?>
                <section class="col-12 p-2">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=<?php echo $row_RAND['id']?>" class="warpper-card-img">
                            <img class="card-img-top" src="<?php echo $base_path_content.$row_RAND['image']?>" alt="blogImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $row_RAND['subject']?> </h5>
                            <p class="card-text"> <?php echo $row_RAND['sub_title']?> </p>
                        </div>
                        <div class="p-3">
                            <a href="blog-detail.php?id=<?php echo $row_RAND['id']?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </section>
                <?php }?>
              </div>
          </div>

          <div class="col-12">
            <div class="fb-comments" 
                data-href="http://localhost/demoblog/blog-detail.php?id_FoodStory=<?php echo $row['id']; ?>" 
                data-numposts="5" 
                data-width="100%">
            </div>
            
            <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v7.0&appId=801451213608858&autoLogAppEvents=1"></script>
            </div>
          </div>
    </section>


    <!-- Section Footer -->
    <?php include_once('includes/footer.php')?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script>
        
        // Blog Detail
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                responsive:{
                    0:{
                        items:1
                    
                    },
                    600:{
                        items:2
                    
                    },
                    1000:{
                        items:3    
                    }
                }
            });
        });


    </script>

    

</body>
</html>

