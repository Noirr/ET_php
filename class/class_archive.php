<?php 

class ARCHIVE
{

    var $type = '';
    var $title = '';

    var $n_page = '';
    var $per_page = 8;
    
    var $left_title;
    var $right_title;

    var $left_articles;
    var $right_articles;
    var $main_articles;

    var $submenu;

    
    public function pagination()
    {
       $n_page = 1;
        global $data;
        if( !empty($_GET["page"]) )
        {
            $n_page = $_GET["page"];
        }
        $prev = 1;
        if( $n_page == 1)
        {
            $prev = 1;
        }else{
            $prev =  $n_page-1;
        }
        echo '<!-- Pagination -->
               <nav aria-label="News pages">
                    <ul class="pagination et-pagination">
                        <li class="page-item disabled">
                            <a class="page-link et-pagination-link" href="?type='.$_GET['type'].'&page='.$prev.'" aria-label="Poprzedni">
                                <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
                                <span class="sr-only">Poprzedni</span>
                            </a>
                        </li>';
        $fake_full = $data->get_count_by_type( $_GET["type"] );
        if( $n_page == 1 )
        {
            $pages = array(
                array( "active" => TRUE, "n" => $n_page),
                array( "active" => FALSE, "n" => $n_page+1),
                array( "active" => FALSE, "n" => $n_page+2),
            );
        }else{
            $pages = array(
                array( "active" => FALSE, "n" => $n_page-1),
                array( "active" => TRUE, "n" => $n_page),
                array( "active" => FALSE, "n" => $n_page+1),
            );
        }
        
        foreach( $pages as $page )
        {
            if( $page["active"] == TRUE )
            {
                echo ' <li class="page-item active">
                <span class="page-link et-pagination-link et-pagination-active-link">
                    '.$page["n"].'<span class="sr-only">(aktywny)</span>
                </span>
            </li>';
            }else{
                echo '<li class="page-item"><a class="page-link et-pagination-link" href="?type='.$_GET['type'].'&page='.$page['n'].'">'.$page["n"].'</a></li>';
            }

        }
        $next = $n_page + 1;
        echo '
            <li class="page-item">
            <a class="page-link et-pagination-link" href="?type='.$_GET['type'].'&page='.$next.'" aria-label="Następny">
                <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
                <span class="sr-only">Następny</span>
            </a>
            </li>
        </ul>
        </nav>';

    }
    public function __construct( $type, $n_page = 1 )
    {
        global $data;
        $this->type = $type;
        $this->n_page = $n_page;
        if( $type == "mem" ){
            $this->title = "Memy";
            $this->left_title = "Najnowsze Video";
            $this->left_articles = $data->get_list( 'video', 5 );
            $this->right_title = "Najnowsze Newsy";
            $this->right_articles = $data->get_list( 'news', 5 );
            $this->main_articles = $data->get_list( 'mem', 8 );
            $this->submenu = '
            <!-- Sidebar add mem header -->
                <h2 class="text-uppercase mt-0 et-sidebar-title">Dodaj własnego mema</h2> 
                                               
                <!-- Add mem -->
                <ul class="nav text-uppercase et-categories-menu">
                       
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dodaj</a>       
                    </li>

                </ul>';
        }
        if( $type == "video" ){
            $this->title = "Video";
            $this->left_title = "Najnowsze Memy";
            $this->left_articles = $data->get_list( 'mem', 5 );
            $this->right_title = "Newsy z ostatniej chwili";
            $this->right_articles = $data->get_list( 'news', 5 );
            $this->main_articles = $data->get_list( 'video', 8 );
            $this->submenu = '';
        }
        if( $type == "news" ){
            $this->title = "Newsy";
            $this->left_title = "Najnowsze Video";
            $this->left_articles = $data->get_list( 'mem', 5 );
            $this->right_title = "Najnowsze Memy";
            $this->right_articles = $data->get_list( 'news', 5 );
            $this->main_articles = $data->get_list( 'video', 8 );
            $this->submenu = '
            <!-- Sidebar choose category header -->
                <h2 class="text-uppercase mt-0 et-sidebar-title">Wybierz kategorię</h2> 
            <!-- Choose category -->
                <ul class="nav text-uppercase et-categories-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Newsy</a>       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artykuły</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wywiady</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Felietony</a>
                    </li>
                </ul>';
        }
    }

}


?>