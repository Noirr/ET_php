<?php 
    error_reporting(0);
    require_once( 'config.php' );
    require_once( 'class/class_data.php' );
    require_once( 'class/class_media.php' );
    require_once( 'class/class_front.php' );
    require_once( 'class/class_card.php' );
    require_once( 'class/class_ads.php' );
    require_once( 'class/class_archive.php' );
    require_once( 'class/class_author.php' );
    
    $front = new FRONT;
    $data = new DATA;


    function printuj( $txt )
    {
        echo "<br><div><pre>";
        print_r( $txt );
        echo "<br><div><pre>";
    } 
    function polish_month( $n )
    {   
        $n--;
        //$months = array('Styczeń', 'Luty', 'Marzec', "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień");
        $months = array('stycznia', 'lutego', 'marca', "kwietnia", "maja", "czerwca", "lipca", "sierpnia", "września", "października", "listopada", "grudnia");
        $m = $months[$n];
        return $m;
    }
    function link_id( $id )
    {
        return SITE_URL.'?id='.$id;
        //return SITE_URL.$id;
    }
    function link_single( $type, $id )
    {
        return SITE_URL.'?type='.$type.'&id='.$id;
    }
    function show_back_url()
    {
        echo API_URL;
    }
 
?>