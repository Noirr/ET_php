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
		$content = json_decode( $content, true );
		return $content;
	}
	public function get_single( $type, $id )
	{
		$suf = $type."/".$id;
		$single = $this->get_data( $suf );
		return $single;
	}	
	public function get_data_by_url( $url )
	{
		$list = $this->get_data( $url );
		return $list;
	}
	public function get_list( $type, $count, $page = 1 )
	{
		$suf = $type."/?per_page=".$count."&page=".$page;
		$suf = $type.'/?per_page='.$count.'&page='.$page;
		
		$list = $this->get_data( $suf );
		return $list;
	}
	public function get_by_post_id( $type, $post_id )
	{
		$suf = $type."?post=".$post_id;
		$list = $this->get_data( $suf );
		return $list;
	}
	public function get_count_by_type( $type )
	{
		$suf = $type."?per_page=100";
		$list = $this->get_data( $suf );
		$count = count( $list );
		return $count;
	}

}



?>