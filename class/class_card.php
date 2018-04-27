<?php

    class CARD
    {
        var $type = '';


        public function ads_small()
        {
            echo '
                 <!-- Square ad -->                       
                    <div class="card mb-4 et-card-ad">
                        <img class="card-img" src="img/300x250.png" alt="">
                    </div>
            ';
        }

        public function count_comments( $parent_id )
        {
            global $data;
            //$data->get_single("comment", );
            return "1";
        }
        
        public function show( $obj )
        {
            
            $link = link_single( $obj['type'], $obj["id"]);
            $featuremedia = new MEDIA( $obj['featured_media']  );

            $fmedia_id = $obj['featured_media'];
            $fmedia = new MEDIA( $fmedia_id );
            $img = $fmedia->data['guid']['rendered'];
            if( empty($img) )
            {
                $img = 'img/news_small.jpg';
            }

            $cat_field = '';
            $data_field = '';
            if( !empty($obj['type']) ) 
            {
                $cat_field = '<a class="card-link text-lowercase text-white et-card-category-news" href="#">'.$obj['type'].'</a>';
            }
            echo '
            <!-- Small card -->
            <div class="card bg-dark text-white et-card">
                <img class="card-img" src="'.$img.'" alt="Zdjęcie">
                <div class="card-img-overlay">
                    <h3 class="card-title et-card-small-title">'.$obj['title']['rendered'].'</h3>
                    <p class="card-text et-card-date">
                    '.$this->date( $obj['date'] ).' <i class="fas fa-comment et-card-comments"></i>
                    <span class="et-card-comments-number">'.$this->count_comments( $obj ).'</span>
                    </p>
                    '.$cat_field.'
                    <a class="et-card-link" href="'.$link.'" ></a>
                </div>
            </div>
            ';
        }

       /* public function small( $obj )
        {
            $featuremedia = new MEDIA( $obj['featured_media']  );
            $cat_field = '';
            $data_field = '';
            if( !empty($obj['type']) ) 
            {
                $cat_field = '<a class="card-link text-lowercase text-white et-card-category-news" href="#">'.$obj['type'].'</a>';
            }
           echo '
            <!-- Small card -->
            <div class="card bg-dark text-white et-card">
                <img class="card-img" src="img/news_small.jpg" alt="Zdjęcie">
                <div class="card-img-overlay">
                    <h3 class="card-title et-card-small-title">'.$obj['title']['rendered'].'</h3>
                    <p class="card-text et-card-date">
                    '.$this->date( $obj['date'] ).' <i class="fas fa-comment et-card-comments"></i>
                    <span class="et-card-comments-number">'.$this->count_comments( $obj ).'</span>
                    </p>
                    '.$cat_field.'
                    <a class="et-card-link" href="'.$obj['link'].'" ></a>
                </div>
            </div>
        ';

        }
        public function big( $obj )
        {
            $featuremedia = new MEDIA( $obj['featured_media']  );

            echo '
            <!-- Big card -->
            <div class="card bg-dark text-white et-card">
                <img class="card-img" 
                src="'.$featuremedia->data["guid"]["rendered"].'" 
                alt="'.$featuremedia->data["title"]["rendered"].'"
                >
                <div class="card-img-overlay">
                    <h3 class="card-title et-card-title">'.$obj["title"]["rendered"].'</h3>
                    <p class="card-text et-card-date">
                        '.$this->date( $obj['date'] ).' 
                        <i class="fas fa-comment et-card-comments"></i>
                        <span class="et-card-comments-number">'.$this->count_comments( $obj['id'] ).'</span>
                    </p>
                    <a class="et-card-link" href="'.$obj['link'].'" ></a>
                </div>
            </div>
            ';
        }*/

        
        public function date( $date )
        {
            $y = substr($date, 0, 4);
            $m = substr($date, 5, 2);
            $d = substr($date, 8, 2);
            $m_name = polish_month($m);
            $newdate = $d." ".$m_name." ".$y;
            return $newdate;
        }


    }

?>