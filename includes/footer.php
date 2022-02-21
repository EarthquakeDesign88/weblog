<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php"); ?>

    <!-- Section About -->
    <section data-jarallax='{ "speed": 0.6 }' class="position-relative py-5 jarallax" style="background-image: url('https://images.unsplash.com/photo-1517399918636-cc7c97d99292?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="assets/images/logo_homepage.png" class="img-fluid" width="150px" alt="">
                    <h2 class="display-4 font-weight-bold text-white"> Food story </h2>

                    <div class="star-rating">
                        <span> ☆ </span>
                        <span> ☆ </span>
                        <span> ☆ </span>
                        <span> ☆ </span>
                        <span> ☆ </span>
                        <div class="star-current" style="width: 80%;">
                            <span> ★ </span>
                            <span> ★ </span>
                            <span> ★ </span>
                            <span> ★ </span>
                            <span> ★ </span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    
    <footer class="semi-footer p-5 text-center text-md-left">
        <div class="row">
        <div class="col-md-4">
            <a class="navbar-brand" href="#">
            <img src="assets/images/logo_homepage.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Food Story
            </a>
            <p>
            <i class="fas fa-phone-square-alt"></i> 088-888-8888 <br>
            <i class="fas fa-envelope"></i> foodstory@hotmail.com <br>
            <i class="fas fa-address-card"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </p>

            <a href="https://www.facebook.com/shoppingmarketplusS/" target="_blank"> 
            <i class="fab fa-facebook-square fa-2x"></i>
            </a>
            <a href="#" target="_blank"> 
            <i class="fab fa-youtube fa-2x"></i>
            </a>
        </div>

        <div class="col-md-4">
            <ul class="navbar-nav">
            <h4> Menu </h4>
            <li class="nav-item <?php echo $file_name == 'index' ? 'active' : '' ?> ">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  <?php echo $file_name == 'about' ? 'active' : '' ?> ">
                <a class="nav-link" href="about.php">About</a>
            </li> 
            <li class="nav-item <?php echo$file_name =='blog' || $file_name =='blog-detail' ? 'active' : '' ?> ">
                <a class="nav-link" href="blog.php"> Blog</a>
            </li> 
            <li class="nav-item  <?php echo$file_name =='contact' ? 'active' : '' ?> ">
                <a class="nav-link" href="contact.php"> Contact</a>
            </li>               
            </ul>        
        </div>

        <div class="col-md-4">
            <h4> Map </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.8331198629025!2d100.90544321449316!3d13.2983628906421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102b4b731788057%3A0x3bd2a6e9a6923e0c!2sBang%20Saen%20Sai%202%20Soi%2020%2C%20Tambon%20Saen%20Suk%2C%20Amphoe%20Mueang%20Chon%20Buri%2C%20Chang%20Wat%20Chon%20Buri%2020130!5e0!3m2!1sen!2sth!4v1588008029056!5m2!1sen!2sth" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        </div>
    </footer>

  <footer class="footer">
    <span> COPYRIGHT © 2020  <a href="https://www.facebook.com/shoppingmarketplusS/" target="_blank"> Food Story</a></span>
    All Right Reserved
  </footer>
  



<!-- Section On to Top -->
<div class="to-top">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>