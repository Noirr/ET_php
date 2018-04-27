<?php 

    class MEDIA
    {
        var $data = '';
        public function __construct( $id )
        {
            global $data;
            $this->data = $data->get_single( 'media', $id );
        }
    }

?>