<?php 

    $data = new DATA;
    $front = new FRONT;
    $card = new CARD;
    $ads = new ADS;

    $type = $_GET["type"];
    $page = 1;
    if( !empty($_GET["page"]) )
    {
        $page = $_GET["page"];
    }
    $archive = new ARCHIVE( $_GET["type"], $page );

    //printuj( $archive );
 


?> 
 
 
 
 
 
 <!-- Page header -->
 <div class="container px-xl-0">
        <h1 class="text-uppercase et-section-title"><?php echo $archive->title; ?></h1>
    </div>
    
    <!-- ####### Content ####### -->
    <div class="container px-xl-0">          
        <div class="row">
                
            <!-- ####### Left sidebar ####### -->
            <div class="col-md-3">
                               
                <!-- Facebook -->                       
                <div class="card mb-4 et-card-ad">
                    <?php  $ads->fb(); ?>
                </div>
                   
                <!-- Square ad -->                       
                <div class="card mb-4 et-card-ad">
                    <?php  $ads->square(); ?>
                </div>
                
                <!-- Sidebar latest videos header -->
                <h2 class="text-uppercase et-sidebar-title"><?php echo $archive->left_title; ?></h2>
                
                <?php $card->show( $archive->left_articles[0] ); ?>
                
                <?php $card->show( $archive->left_articles[1] ); ?>
                   
                <?php $card->show( $archive->left_articles[2] ); ?>
                  
                <?php $card->show( $archive->left_articles[3] ); ?>
                  
                <?php $card->show( $archive->left_articles[4] ); ?>
                   
                <!-- Horizontal ad -->                       
                <div class="card mb-4 et-card-ad">
                    <?php  $ads->long(); ?>
                </div>
                    
            </div>
            <!-- ####### End of Left sidebar ####### -->
                
            <!-- ####### News list ####### -->
            <div class="col-md-6">
               
                <?php $card->show( $archive->main_articles[0] ); ?>
                <?php $card->show( $archive->main_articles[1] ); ?>
                <?php $card->show( $archive->main_articles[2] ); ?>
                <?php $card->show( $archive->main_articles[3] ); ?>
                <?php $card->show( $archive->main_articles[4] ); ?>
                <?php $card->show( $archive->main_articles[5] ); ?>
                <?php $card->show( $archive->main_articles[6] ); ?>
                <?php $card->show( $archive->main_articles[7] ); ?>
               

                <?php $archive->pagination(); ?>
               

                
            </div>
            <!-- ####### End of News list ####### -->
                
            <!-- ####### Right sidebar ####### -->
            <div class="col-md-3">
       
                <?php echo $archive->submenu; ?>
                                               
                <!-- Horizontal ad -->                       
                <div class="card mb-4 et-card-ad">
                    <?php  $ads->long(); ?>
                </div>
                                              
                <!-- Sidebar latest memes header -->
                <h2 class="text-uppercase et-sidebar-title"><?php echo $archive->right_title; ?></h2>
                                               
                <?php $card->show( $archive->right_articles[0] ); ?>
                <?php $card->show( $archive->right_articles[1] ); ?>
                <?php $card->show( $archive->right_articles[2] ); ?>
                <?php $card->show( $archive->right_articles[3] ); ?>
                <?php $card->show( $archive->right_articles[4] ); ?>
                                               
                <!-- Square ad -->                       
                <div class="card mb-4 et-card-ad">
                    <?php  $ads->square(); ?>
                </div>               
                                                
            </div>
            <!-- ####### End of Right sidebar ####### -->
               
            <!-- Vertical ad -->
            <?php  $ads->wide(); ?>
                
        </div>
    </div>
    <!-- ####### End of Content ####### -->