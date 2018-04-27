<?php 

    class AUTHOR
    {
        var $obj;

        public function __construct( $id )
        {
            global $data;
            $this->obj = $data->get_single( "users", $id );
        }

    }


?>