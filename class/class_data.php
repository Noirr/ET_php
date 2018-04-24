<?php 

class DATA
{
	public function get_data( $suf )
	{
		$url = API_URL.$suf;
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt( $ch, CURLOPT_URL, $url);
		$content = curl_exec( $ch );
		curl_close( $ch );
		$content = json_decode( $content );
		return $content;
	}
	public function get_single( $type, $id )
	{
		$suf = $type."/".$id;
		$single = $this->get_data( $suf );
	}	
	public function get_list( $type, $count, $page = 1 )
	{
		$suf = $type."/?per_page=".$count."&page=".$page;
		$suf = 'news/?per_page=7&page=1';
		$list = $this->get_data( $suf );
		return $list;
	}

}



?>