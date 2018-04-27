<?php


function get_data( $suf )
{
    $url = 'http://noirweb.hekko24.pl/portal_et/wp-json/wp/v2/'.$suf;
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt( $ch, CURLOPT_URL, $url);
    $content = curl_exec( $ch );
    curl_close( $ch );
    $content = json_decode( $content );
    return $content;
}
function get_list( $type, $count, $page = 1 )
{
    $suf = $type."/?per_page=".$count."&page=".$page;
    $suf = 'news/?per_page=7&page=1';
    $list = get_data( $suf );
    return $list;
}
$obj = get_list( 'news', 11 );


$obj = $obj[0]->_links;

echo '<pre>';
print_r( $obj );
echo '</pre>';

echo '<pre>';
print_r( $obj );
echo '</pre>';

?>