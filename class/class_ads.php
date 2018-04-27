<?php 

    class ADS
    {
         
        public function square()
        {
            $img ='http://noirweb.hekko24.pl/portal_et/wp-content/uploads/2018/04/300x250.png';
            echo '<img class="card-img" src="'.$img.'" alt="">';
        }
        public function fb()
        {
            $img = 'http://noirweb.hekko24.pl/portal_et/wp-content/uploads/2018/04/fb.png';
            echo '<img class="card-img" src="'.$img.'" alt="">';
        }
        public function wide()
        {
            $img = 'http://noirweb.hekko24.pl/portal_et/wp-content/uploads/2018/04/728x90.png';
            echo '<img class="mx-auto et-ad-vertical" src="'.$img.'" alt="">';
        }
        public function long()
        {
            $img = 'http://noirweb.hekko24.pl/portal_et/wp-content/uploads/2018/04/300x600.png';
            echo '<img class="card-img" src="'.$img.'" alt="">';
        }

    }


?>