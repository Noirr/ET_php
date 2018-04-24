  <!-- ####### Header ####### -->
  <header class="et-header">
        <div class="container px-xl-0">
            <nav class="navbar navbar-expand-lg navbar-dark et-header">
                
                <!-- Logo -->
                <a class="navbar-brand" href="#"><img src="img/et_logo.png" alt="Logo"></a>

                <!-- Hamburger -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main menu -->
                <div class="collapse navbar-collapse" id="mainMenu">
                  
                    <ul class="navbar-nav mr-auto text-uppercase et-menu">
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newsy</a>                 
                            <div class="dropdown-menu et-menu-dropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Newsy</a>
                                <a class="dropdown-item" href="#">Artykuły</a>
                                <a class="dropdown-item" href="#">Wywiady</a>
                                <a class="dropdown-item" href="#">Felietony</a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Memy</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Video</a>
                        </li>
                        
                    </ul>
                    
                </div>
                 
                <!-- Login -->  
                <a class="text-uppercase et-login" href="#"><i class="far fa-user mr-3 et-login-icon"></i>Zaloguj się</a>
                   
                <!-- Social -->
                <div class="et-social">
				    <a href="<?php echo $front->get_link_facebook(); ?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo $front->get_link_twitter(); ?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?php echo $front->get_link_instagram(); ?>"><i class="fab fa-instagram"></i></a>
                    <a href="<?php echo $front->get_link_mail(); ?>"><i class="far fa-envelope"></i></a>
                </div>
                
                <!-- Search -->   
                <form class="form-inline et-search">
                    <input class="form-control" type="search" placeholder="Szukaj" aria-label="Search">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
                    
            </nav>
        </div>
    </header>
    <!-- ####### End of Header ####### -->