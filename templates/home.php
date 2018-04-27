  <?php

$data = new DATA;
$front = new FRONT;
$card = new CARD;
$ads = new ADS;

$last_news = '';
$last_news_felietony = '';
$last_news_wywiady = '';

$home_news = $data->get_list( 'news', 17 );
$home_mem = $data->get_list( 'mem', 9 );
$home_video = $data->get_list( 'video', 7 );


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
                    
                    <?php $card->show( $home_news[0] ); ?>
                    
                </div>
                
                <!-- Small cards column 1 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_news[1] ); ?>
                    
                    <?php $card->show( $home_video[0] ); ?>
                    
                </div>
                
                <!-- Small cards column 2 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_mem[0] ); ?>
                    
                    <?php $card->show( $home_news[2] ); ?>
                    
                </div>
                
                
                <!-- Vertical ad -->
                <?php $ads->wide(); ?>
                
                
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

                    <?php $card->show( $home_news[0] ); ?>
                    <?php $card->show( $home_news[1] ); ?>
                    <?php $card->show( $home_news[2] ); ?>
                    
                </div>
                
                <!-- Small cards column 2 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_news[3] ); ?>
                    <?php $card->show( $home_news[4] ); ?>
                    <?php $card->show( $home_news[5] ); ?>
                    
                </div>               
                    
                <!-- Small cards column 3 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_news[6] ); ?>
                    <?php $card->show( $home_news[7] ); ?>
                    <?php $card->show( $home_news[8] ); ?>
                    
                </div>              
                    
                <!-- Small cards column 4 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_news[9] ); ?>
                    <?php $card->show( $home_news[10] ); ?>
                    
                    <!-- Square ad -->                       
                    <div class="card mb-4 et-card-ad">
                        <?php $ads->square(); ?>
                    </div>

                </div>
                
                <!-- Button see more -->
                <a class="btn text-uppercase et-more-btn et-more-news-btn" href="<?php echo $front->get_link_archive_news(); ?>" role="button">Zobacz więcej</a>
            
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
                    
                    
                    <?php $card->show( $home_mem[0] ); ?>
                    
                </div>
                
                 <!-- Single big card column 2 -->
                <div class="col-md-6">
                    
                    <?php $card->show( $home_mem[1] ); ?>
                    
                </div>
            
            </div>               
            
            <div class="row">
                
                <!-- Small cards column 1 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_mem[2] ); ?>
                    <?php $card->show( $home_mem[3] ); ?>

                </div>
                
                <!-- Small cards column 2 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_mem[4] ); ?>
                    <?php $card->show( $home_mem[5] ); ?>
                    
                </div>               
                    
                <!-- Small cards column 3 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_mem[6] ); ?>
                    <?php $card->show( $home_mem[7] ); ?>
                    
                </div>              
                    
                <!-- Small cards column 4 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_mem[8] ); ?>
                    
                    <!-- Square ad -->                       
                    <div class="card mb-4 et-card-ad">
                        <?php $ads->square(); ?>
                    </div>

                </div>
                
                <!-- Button see more -->
                <a class="btn text-uppercase et-more-btn et-more-memes-btn" href="<?php echo $front->get_link_archive_mem(); ?>" role="button">Zobacz więcej</a>
            
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
                    
                    <?php $card->show( $home_video[0] ); ?>
                    <?php $card->show( $home_video[1] ); ?>

                </div>
                
                <!-- Small cards column 2 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_video[2] ); ?>
                    <?php $card->show( $home_video[3] ); ?>
                    
                </div>               
                    
                <!-- Small cards column 3 -->
                <div class="col-md-3">
                    
                    <?php $card->show( $home_video[4] ); ?>
                    <?php $card->show( $home_video[5] ); ?>
                     
                </div>              
                    
                <!-- Small cards column 4 -->
                <div class="col-md-3">
                    
                     <?php $card->show( $home_video[6] ); ?>
                    
                    <!-- Square ad -->                       
                    <div class="card mb-4 et-card-ad">
                        <?php $ads->square(); ?>
                    </div>

                </div>
                
                <!-- Button see more -->
                <a class="btn text-uppercase et-more-btn et-more-videos-btn" href="<?php echo $front->get_link_archive_video(); ?>" role="button">Zobacz więcej</a>
            
            </div>           
            
        </div>     
    </section>
    <!-- ####### End of Section: Videos ####### -->