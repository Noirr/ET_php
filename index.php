<?php

	require_once('header.php');


	if( !empty($_GET['page']) )
	{
		$front->single_page( $_GET['page'] );
	}
	else if( !empty($_GET['type']) )
	{
		$front->type_page( $_GET['type'] );
	}
	else{
		$front->home_page();
	}

	
	/*
		empty - homepage
		other - 404
		?type=   // mem / video / news
		?type=XXX&page=
		?type=XXX&id=
		?page=

	*/

	require_once('footer.php');

?>