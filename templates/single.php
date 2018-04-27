  <?php 

  $data = new DATA;
  $front = new FRONT;
  $card = new CARD;
  $ads = new ADS;
 

  $single = $data->get_single( $_GET["type"], $_GET["id"] );

    $fmedia_id = $single['featured_media'];
  $fmedia = new MEDIA( $fmedia_id );
  
  $author = new AUTHOR( $single['author'] );
  $tags =  $data->get_by_post_id( "tags", $single["id"] );
  
  if( $single["type"] == "news" ){
    $other_news = $data->get_list( "news", 11 );
    $other_type = array(
        $other_news[5],
        $other_news[6], 
        $other_news[7],
        $other_news[8],
        $other_news[9],
        $other_news[10]
    );
  }else{
    $other_news = $data->get_list( "news", 5 );
    $other_type = $data->get_list( $single["type"], 6 );
  }



  ?>



    <!-- ####### Content ####### -->
    <div class="container px-xl-0">          
        <div class="row">
               
                <!-- ####### Main content ####### -->
                <div class="col-md-9">
                   
                    <div class="et-single-post"> 
                       
                        <!-- Post im ge -->                      
                        
                        <img class="img-fluid" src="<?php echo $fmedia->data['guid']['rendered']; ?>" alt="">
                        <p class="et-single-post-image-copy">Autor zdjęcia: <?php echo $author->obj["name"]; ?></p>
                        
                        <!-- Post date -->
                        <p class="d-inline-block et-single-post-date">
                            <?php echo $card->date($single['date']); ?> <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                        </p>
                        
                        <!-- Post category -->
                        <?php $front->et_single_post_category( $single["type"] ); ?>
                        
                        
                        <!-- Post title -->
                        <h1 class="et-single-post-title"><?php echo $single['title']['rendered']; ?></h1>
                        
                        <!-- Post content -->
                        <p class="et-single-post-content">
                        <?php echo $single['content']['rendered']; ?>
                        </p>
                        
                        <!-- Facebook like button -->
                        <a href="#"><img src="img/fb_like.png" alt=""></a>
                        
                        <!-- Tags -->
                        <p class="et-single-post-tags-txt">Tagi:
                            <?php 
                                $front->et_single_post_tags( $tags );
                            ?>
                        </p>
                        
                        <!-- Post author -->
                        <p class="et-single-post-author">
                            Autor:
                            <img class="et-single-post-author-avatar" src="<?php echo $author->obj["avatar_urls"][96]; ?>" alt="">
                            
                            <span class="et-single-post-author-name"><?php echo $author->obj["name"]; ?></span>
                        </p>
                        
                        <!-- Comments -->
                        <img class="img-fluid" src="img/comments.png" alt="">

                    </div>
                    
                    <!-- See also header -->
                    <h2 class="text-uppercase et-single-post-see-also-title">Zobacz także:</h2>
                    
                    <!-- See also -->
                    <div class="row">
                            
                        <!-- Small cards column 1 -->
                        <div class="col-md-4">
                            
                            <?php $card->show( $other_type[0] ); ?>
                            <?php $card->show( $other_type[1] ); ?>
                            
                        </div>
                        
                        <!-- Small cards column 2 -->
                        <div class="col-md-4">
                            
                            <?php $card->show( $other_type[2] ); ?>
                            <?php $card->show( $other_type[3] ); ?>
                           
                            
                        </div>
                        
                        <!-- Small cards column 3 -->
                        <div class="col-md-4">
                            
                            <?php $card->show( $other_type[4] ); ?>
                            <?php $card->show( $other_type[5] ); ?>
                            
                        </div>
                        
                    </div>

                </div>
                <!-- ####### End of Main content ####### -->

                <!-- ####### Right sidebar ####### -->
                <div class="col-md-3">
                   
                    <div class="et-single-post">
                        
                        <!-- Facebook -->                       
                        <div class="card mb-4 et-card-ad">
                            <img class="card-img" src="img/fb.png" alt="">
                        </div>

                        <!-- Square ad -->                       
                        <div class="card mb-4 et-card-ad">
                            <img class="card-img" src="img/300x250.png" alt="">
                        </div>

                        <!-- Sidebar latest news header -->
                        <h2 class="text-uppercase et-sidebar-title">Newsy z ostatniej chwili</h2>

                        <?php $card->show( $other_news[0] ); ?>
                        <?php $card->show( $other_news[1] ); ?>
                        <?php $card->show( $other_news[2] ); ?>
                        <?php $card->show( $other_news[3] ); ?>
                        <?php $card->show( $other_news[4] ); ?>
                        
                        
                                                                                 
                        <!-- Square ad -->                       
                        <div class="card mb-4 et-card-ad">
                            <img class="card-img" src="img/300x250.png" alt="">
                        </div>
                    
                    </div>             

                </div>
                <!-- ####### End of Right sidebar ####### -->

                <!-- Vertical ad -->
                <img class="mx-auto et-ad-vertical" src="img/728x90.png" alt="">
      
        </div>
    </div>
    <!-- ####### End of Content ####### -->