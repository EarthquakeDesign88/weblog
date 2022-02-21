<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php"); ?>


<nav  id="navbar" class="navbar navbar-expand-lg  fixed-top navbar-dark bg-alpha">
    <div class="container ">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo_homepage.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Food Story
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarKey">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo $file_name == 'index' ? 'active' : '' ?>">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  <?php echo $file_name == 'about' ? 'active' : '' ?>">
                <a class="nav-link" href="about.php">About</a>
            </li> 
            <li class="nav-item <?php echo$file_name =='blog' || $file_name =='blog-detail' ? 'active' : '' ?>">
                <a class="nav-link" href="blog.php"> Blog</a>
            </li> 
            <li class="nav-item <?php echo$file_name =='contact' ? 'active' : '' ?>">
                <a class="nav-link" href="contact.php"> Contact</a>
            </li>    

            <li>
                <div>
                    <input type="checkbox" class="checkbox" id="chk" />
                    <label class="label" for="chk">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <div class="ball"></div>
                    </label>
                </div>

           
                <div class="social-panel-container">
                    <div class="social-panel">
                      
                    </div>
                </div>
            </li>     
            </ul>        
        </div>
    </div>
</nav>


<script>
    const chk = document.getElementById('chk');

    chk.addEventListener('change', () => {
        document.body.classList.toggle('dark');
    });

    // SOCIAL PANEL JS
    const floating_btn = document.querySelector('.floating-btn');
    const close_btn = document.querySelector('.close-btn');
   
    floating_btn.addEventListener('click', () => {
        social_panel_container.classList.toggle('visible')
    });

   

</script>