<?php 

class FRONT
{

    var $type = NULL;
    var $template = NULL;
    var $id = NULL;
    var $n_page = NULL;
    var $page_slug = NULL;

    public function show_single_big()
    {

    }
    public function show_single_small()
    {

    }
    public function show_latest_block( $type )
    {
        // mem / video / news
    }
    public function show_single_page( $type, $id )
    {
        
    }



    public function header_logo()
    {

    }

    /* GET SOCIAL LINKS */
    public function get_link_facebook()
    {
        return "#";
    }
    public function get_link_instagram()
    {
        return "#";        
    }
    public function get_link_twitter()
    {
        return "#";       
    }
    public function get_link_mail()
    {
        return "#";        
    }
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
    public function single_page( $page ){
        $this->template = 'page';
        $this->page_slug = $page;
        require_once( 'templates/page.php' );
    }
    public function type_page( $type ){
        $this->type = $type;
        if( !empty($_GET['id']) )
		{
            $this->template = 'single';
            $this->id = $_GET['id'];
			require_once( 'templates/single.php' );
		}else{
            $this->template = 'archive';
            if( !empty($_GET['page']) )
            {
                $this->n_page = $_GET['page'];
            }else{
                $this->n_page = 1;
            }
			require_once( 'templates/archive.php' );
		}
    }
    public function home_page(){
        require_once( 'templates/home.php' );
    }

}


?>