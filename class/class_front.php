<?php 

class FRONT
{

    var $type = NULL;
    var $template = NULL;
    var $id = NULL;
    var $n_page = NULL;
    var $page_slug = NULL;

    public function et_single_post_category( $type )
    {
       
        if( $type == "news" )
        {
            echo '<a class="text-lowercase et-single-post-category" href="#">Newsy</a>';
        }
        else if( $type == "mem" )
        {
            echo '<a class="text-lowercase et-single-post-category" href="#">Memy</a>';
        }
        else if( $type == "video" )
        {
            echo '<a class="text-lowercase et-single-post-category" href="#">Video</a>';
        }
    }

    public function et_single_post_tags( $tags )
    {
        //printuj( $tags );
        echo '<ul class="nav et-single-post-tags">';
        foreach( $tags as $tag )
        {
            echo '<li class="nav-item"><a class="nav-link" href="#">';
            echo $tag['name'];
            echo '</a></li>';
        }
        echo '</ul>';
    }
  

    /* GET SOCIAL LINKS */
    public function get_link_archive_mem()
    {
        return SITE_URL.'?type=mem';
    }
    public function get_link_archive_video()
    {
        return SITE_URL.'?type=video';
    }
    public function get_link_archive_news()
    {
        return SITE_URL.'?type=news';
    }

    


    /* SET & REQUIRE TEMPLATE  */
    public function single_page( $id ){
        $this->template = 'single';
        $this->id = $id;
        require_once( 'templates/single.php' );
    }
    public function static_page( $page ){
        $this->template = 'page';
        $this->page_slug = $page;
        require_once( 'templates/page.php' );
    }
    public function archive_page( $type ){
        $this->type = $type;
        $this->template = 'archive';
        if( !empty($_GET['page']) )
        {
            $this->n_page = $_GET['page'];
        }else{
            $this->n_page = 1;
        }
        require_once( 'templates/archive.php' );
    }
    public function home_page(){
        require_once( 'templates/home.php' );
    }

}


?>