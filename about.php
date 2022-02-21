<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About </title>

    
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

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

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
                    <h1 class="display-4 font-weight-bold"> เกี่ยวกับเรา </h1>
                    <p class="lead"> ศูนย์รวมการให้ความรู้ สำหรับคนที่ชื่นชอบการกิน และทำอาหาร </p>
                </div>
            </div>
        </div>
    </header>

    


    <!-- Section Todo -->
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-6 py-3 p-lg-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7r3dSgnfDVM" frameborder="0" allowfullscreen></iframe>
                </div>                 
            </div>
            <div class="col-lg-6">
                <h2 data-aos="fade-down"> ทำความรู้จักกับเราให้ดียิ่งขึ้้น </h2>
                <p data-aos="flip-up"> ศูนย์รวมการให้ความรู้ สำหรับคนที่ชื่นชอบการกิน และทำอาหาร </p> <br>
                <h3 data-aos="fade-down"> เพื่อส่งเสริมการเรียนรู็สำหรับคนที่ชอบอาหาร </h3>
                <p data-aos="flip-up"> วิธ๊ทำอาหาร ต้นตำหรับอาหาร และประโยชน์ของอาหาร</p>
        
            </div>
        </div>
    </section>

    <!-- Section Timeline -->
    <section data-jarallax='{ "speed": 0.6 }' class="position-relative py-5 jarallax" style="background-image: url('https://images.unsplash.com/photo-1500315331616-db4f707c24d1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="assets/images/logo_homepage.png" class="img-fluid" width="150px" alt="">
                    <h1 class="display-4 font-weight-bold text-white"> Timeline About Us </h1>
                  
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p data-aos="flip-down"> 19 Sep 2020 </p>
                        </div>
                        <div class="timeline-card">
                            <h5 data-aos="fade-down"> Launched the official website </h5>
                            <p class="text-muted" data-aos="fade-right"> เริ่มเปิดตัว Website อย่างเป็นทางการ </p>
                        </div>
                    </li>

                    <li class="inverted">
                        <div class="timeline-badge">
                            <p data-aos="flip-down"> 8 Oct 2020 </p>
                        </div>
                        <div class="timeline-card">
                            <h5 data-aos="fade-down"> Line notification development </h5>
                            <p class="text-muted" data-aos="fade-left"> พัฒนาการแจ้งเตือนผ่านไลน์ Notification </p>
                        </div>
                    </li>

                    <li>
                        <div class="timeline-badge">
                            <p data-aos="flip-down"> 21 Oct 2020 </p>
                        </div>
                        <div class="timeline-card">
                            <h5 data-aos="fade-down"> Developed the Recaptcha system </h5>
                            <p class="text-muted" data-aos="fade-right"> พัฒนาระบบ Recaptcha </p>
                        </div>
                    </li>

                    <li class="inverted">
                        <div class="timeline-badge">
                            <p data-aos="flip-down"> 17 Nov 2020 </p>
                        </div>
                        <div class="timeline-card">
                            <h5 data-aos="fade-down"> Add some features like Javascript </h5>
                            <p class="text-muted" data-aos="fade-left"> เพิ่มคุณสมบัติบางอย่าง เช่น Javascript </p>
                        </div>
                    </li>

                    <li>
                        <div class="timeline-badge">
                            <p data-aos="flip-down"> 21 Feb 2022 </p>
                        </div>
                        <div class="timeline-card">
                            <h5 data-aos="fade-down"> Add AOS animate </h5>
                            <p class="text-muted" data-aos="fade-right"> เพิ่มการตอบสนองกับผู้ใช้บนหน้าเว็บไซต์ </p>
                        </div>
                    </li>

                    <li class="timeline-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Section Footer -->
    <?php include_once('includes/footer.php')?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/js/main.js"></script>
    
    <script>
        AOS.init({
            offset: 400, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 1000 // values from 0 to 3000, with step 50ms
        });
    </script>

</body>
</html>

