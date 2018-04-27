<?php

	require_once('header.php');

	if( !empty($_GET['id']) && !empty($_GET['type']) )
	{
		$front->single_page( $_GET['id'] );
	}
	else if( !empty($_GET['site']) )
	{
		$front->static_page( $_GET['site'] );
	}
	else if( !empty($_GET['type']) )
	{
		$front->archive_page( $_GET['type'] );
	}
	else{
		$front->home_page();
		//require_once( 'templates/home.php' );
	}

	
	/*
		et.pl -> homepage
		et.pl/xxx -> 404
		et.pl?page=XXX -> page XXX (np. contact / rules)
		et.pl?type=XXX -> lista typu XXX (mem/news/video)
			&id=YY -> strona pojedynczego wpisu o id YY
			&page=YY -> lista typu XXX strona YY

	*/

	require_once('footer.php');

?>