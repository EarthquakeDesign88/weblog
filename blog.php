<?php
    require_once('php/connect.php');
    

    $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';

     // Basic If
    // if(isset($_GET['tag'])) {
    //     $tag = $_GET['tag'];
    // } else {
    //     $tag = 'all';
    // }

    $sql = "SELECT * FROM articles WHERE tag LIKE '%".$tag."%' ";
    $result = $conn->query($sql);
    
    if(!$result) {
        header('Location: blog.php');
    }

    // print_r($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blog </title>

    
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

    

</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php')?>
    <?php include_once('includes/meta-tag.php')?>

    <!-- PreLoader -->
    <?php include_once('includes/preloader.php')?>
    
    <!-- Section Page-title -->
    <header data-jarallax='{ "speed": 0.6 }' class="page-title jarallax" style="background-image: url('https://images.unsplash.com/photo-1466637574441-749b8f19452f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 font-weight-bold"> บทความ </h1>
                    <p class="lead"> "สำหรับคนที่ชื่นชอบการกิน และทำอาหาร" </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Section Blog -->
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">        
                    <a href="blog.php?tag=all">
                        <button data-filter="" class="btn btn-primary <?php echo   $tag == 'all' ? 'active': '' ?>"> All </button>  
                    </a>
                    <a href="blog.php?tag=thaiFood">
                        <button class="btn btn-primary <?php echo   $tag == 'thaiFood' ? 'active': '' ?>"> Thai Food </button>
                    </a>
                    <a href="blog.php?tag=germanyFood">
                        <button class="btn btn-primary <?php echo   $tag == 'germanyFood ' ? 'active': '' ?>"> Germany Food </button>
                    </a>
                    <a href="blog.php?tag=japaneseFood">
                        <button class="btn btn-primary <?php echo   $tag == 'japaneseFood' ? 'active': '' ?>"> Japanese Food </button>
                    </a>           
                    <a href="blog.php?tag=englandFood">
                        <button class="btn btn-primary <?php echo   $tag == 'englandFood' ? 'active': '' ?>"> England Food </button>
                    </a>
                    <a href="blog.php?tag=italianFood">
                        <button class="btn btn-primary <?php echo   $tag == 'italianFood' ? 'active': '' ?>"> Italian Food </button>
                    </a>        
                    <a href="blog.php?tag=koreanFood">
                        <button class="btn btn-primary <?php echo   $tag == 'koreanFood' ? 'active': '' ?>"> Korean Food </button>
                    </a>    
                    <a href="blog.php?tag=chineseFood">
                        <button class="btn btn-primary <?php echo   $tag == 'chineseFood' ? 'active': '' ?>"> Chinese Food </button>
                    </a>
                    <a href="blog.php?tag=heautyFood">
                        <button class="btn btn-primary <?php echo   $tag == 'heautyFood' ? 'active': '' ?>"> Heauty Food </button>
                    </a>
                    <a href="blog.php?tag=dessertfood">
                        <button class="btn btn-primary <?php echo   $tag == 'dessertfood' ? 'active': '' ?>"> Dessert Food </button>
                    </a>
                    <a href="blog.php?tag=franceFood">
                        <button class="btn btn-primary <?php echo   $tag == 'franceFood' ? 'active': '' ?>"> France Food </button>
                    </a>
                    <a href="blog.php?tag=bevarage">
                        <button class="btn btn-primary <?php echo   $tag == 'bevarage' ? 'active': '' ?>"> Bevarage </button>
                    </a>
                    <a href="blog.php?tag=cake">
                        <button class="btn btn-primary <?php echo   $tag == 'cake' ? 'active': '' ?>"> Cake </button>
                    </a>
                    <a href="blog.php?tag=coffee">
                        <button class="btn btn-primary <?php echo   $tag == 'coffee' ? 'active': '' ?>"> Coffee </button>
                    </a>

            </div>
        </div>
        <section class="container">
            <div class="row">
                <?php
                    if($result->num_rows) {
                        while($row = $result->fetch_assoc()) { 
                    ?>
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
                    
                <?php 
                    } 
                } else {
                    
                ?>

                <section class="col-12">

                    
                    <p class="text-center"> ไม่มีข้อมูล</p>
                </section>
                <?php 
                }
                ?>
           
            </div>
        </section>
       
    </section>


  
    <!-- Section Footer -->
    <?php include_once('includes/footer.php')?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/js/main.js"></script>
    

</body>
</html>

