<?php 

    class COMMENT
    {
        var $data = '';
        public function __construct( $id )
        {
            global $data;
            $this->data = $data->get_single( 'comment', $id );
        }
    }

?>