<?php 

    require_once( 'config.php' );
    require_once( 'class/class_data.php' );
    require_once( 'class/class_mem.php' );
    require_once( 'class/class_video.php' );
    require_once( 'class/class_news.php' );
    require_once( 'class/class_front.php' );
    
    $front = new FRONT;
    $data = new DATA;


    function printuj( $txt )
    {
        echo "<br><div><pre>";
        print_r( $txt );
        echo "<br><div><pre>";
    } 
   
 

 
 
?>