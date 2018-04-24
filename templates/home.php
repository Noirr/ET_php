  <?php
//    $data = 
$data = new DATA;
$home_news = $data->get_list( 'news', 7 );
printuj( $home_news );


/*
    11 news
    9 mem
    7 video
*/








  ?>


  <!-- ####### Section: pinned ####### -->
  <section class="et-pinned">
        <div class="container px-xl-0">          
            <div class="row">
                
                <!-- Single big card column -->
                <div class="col-md-6">
                    
                    <!-- Big card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_big.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-title">Superpuchar UEFA: dziewięć miast ubiega się o mecz w 2020 roku</h3>
                            <p class="card-text et-card-date">
                               15 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">2</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Newsy</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Small cards column 1 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->                 
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">MU przechwyci Alexisa? Chilijczyk bliski przenosin na Old Trafford</h3>
                            <p class="card-text et-card-date">
                               14 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">4</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Felietony</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">MŚ 2018: Senegal zagra towarzysko ze Szkocją</h3>
                            <p class="card-text et-card-date">
                               11 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">0</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-videos" href="#">Video</a>
                            <i class="far fa-play-circle et-card-video-icon"></i>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Small cards column 2 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->               
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Ligue 1: sędzia tłumaczy się ze swojego zachowania</h3>
                            <p class="card-text et-card-date">
                               10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">12</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-memes" href="#">Memy</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                               10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Vertical ad -->
                <img class="mx-auto et-ad-vertical" src="img/728x90.png" alt="">
                
            </div>
        </div>                  
    </section>
    <!-- ####### End of Section: pinned ####### -->
    
    <!-- ####### Section: News ####### -->
    <section>
        <div class="container px-xl-0">
            
            <!-- Section header -->
            <h1 class="text-uppercase et-section-title">Newsy</h1>
            
            <div class="row">
                
                <!-- Small cards column 1 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->     
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>

                </div>
                
                <!-- Small cards column 2 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card --> 
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div> 
                    
                </div>               
                    
                <!-- Small cards column 3 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card --> 
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>              
                    
                <!-- Small cards column 4 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Square ad -->                       
                    <div class="card mb-4 et-card-ad">
                        <img class="card-img" src="img/300x250.png" alt="">
                    </div>

                </div>
                
                <!-- Button see more -->
                <a class="btn text-uppercase et-more-btn et-more-news-btn" href="#" role="button">Zobacz więcej</a>
            
            </div>           
            
        </div>     
    </section>
    <!-- ####### End of Section: News ####### -->    
    
    <!-- ####### Section: Memes ####### -->
    <section class="et-memes">
        <div class="container px-xl-0">
            
            <!-- Section header -->
            <h2 class="text-uppercase et-section-title">Memy</h2>
            
            <div class="row">
                
                <!-- Single big card column 1 -->
                <div class="col-md-6">
                    
                    <!-- Big card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_big.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-title">Superpuchar UEFA: dziewięć miast ubiega się o mecz w 2020 roku</h3>
                            <p class="card-text et-card-date">
                               15 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">2</span>
                            </p>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>
                
                 <!-- Single big card column 2 -->
                <div class="col-md-6">
                    
                    <!-- Big card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_big.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-title">Superpuchar UEFA: dziewięć miast ubiega się o mecz w 2020 roku</h3>
                            <p class="card-text et-card-date">
                               15 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">2</span>
                            </p>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>
            
            </div>               
            
            <div class="row">
                
                <!-- Small cards column 1 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>

                </div>
                
                <!-- Small cards column 2 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>               
                    
                <!-- Small cards column 3 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>              
                    
                <!-- Small cards column 4 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Square ad -->                       
                    <div class="card mb-4 et-card-ad">
                        <img class="card-img" src="img/300x250.png" alt="">
                    </div>

                </div>
                
                <!-- Button see more -->
                <a class="btn text-uppercase et-more-btn et-more-memes-btn" href="#" role="button">Zobacz więcej</a>
            
            </div>           
            
        </div>     
    </section>
    <!-- ####### End of Section: Memes ####### -->    
    
    <!-- ####### Section: Videos ####### -->
    <section class="et-videos">
        <div class="container px-xl-0">
            
            <!-- Section header -->
            <h2 class="text-uppercase text-white et-section-title">Video</h2>
            
            <div class="row">
                
                <!-- Small cards column 1 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <i class="far fa-play-circle et-card-video-icon"></i>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <i class="far fa-play-circle et-card-video-icon"></i>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>

                </div>
                
                <!-- Small cards column 2 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <i class="far fa-play-circle et-card-video-icon"></i>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <i class="far fa-play-circle et-card-video-icon"></i>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>               
                    
                <!-- Small cards column 3 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <i class="far fa-play-circle et-card-video-icon"></i>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <i class="far fa-play-circle et-card-video-icon"></i>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                </div>              
                    
                <!-- Small cards column 4 -->
                <div class="col-md-3">
                    
                    <!-- Small card -->
                    <div class="card bg-dark text-white et-card">
                        <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                        <div class="card-img-overlay">
                            <h3 class="card-title et-card-small-title">Arek Milik po powrocie</h3>
                            <p class="card-text et-card-date">
                                10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                            </p>
                            <i class="far fa-play-circle et-card-video-icon"></i>
                            <a class="et-card-link" href="#" ></a>
                        </div>
                    </div>
                    
                    <!-- Square ad -->                       
                    <div class="card mb-4 et-card-ad">
                        <img class="card-img" src="img/300x250.png" alt="">
                    </div>

                </div>
                
                <!-- Button see more -->
                <a class="btn text-uppercase et-more-btn et-more-videos-btn" href="#" role="button">Zobacz więcej</a>
            
            </div>           
            
        </div>     
    </section>
    <!-- ####### End of Section: Videos ####### -->