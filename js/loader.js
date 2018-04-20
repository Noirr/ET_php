var $src = "http://noirweb.hekko24.pl/portal_et/";
var $v2 = "http://noirweb.hekko24.pl/portal_et/wp-json/wp/v2/";


function getImageSrc( apilink )
{

	var imgRequest = new XMLHttpRequest();
	imgRequest.open("GET", apilink);
	imgRequest.onload = function(){
		if(imgRequest.status >= 200 && imgRequest.status < 400){
				var data = JSON.parse(imgRequest.responseText); 
				$src = data['source_url'];
				return $src;
		};
	};
	imgRequest.send();
}

function convertMon2( mon )
{
	monthNames = ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec",  "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"];
	return monthNames[mon];
}
 
function convertMon2( mon )
{
	monthNames = ["stycznia", "lutego", "marca", "kwietnia", "maja", "czerwca",  "lipca", "sierpnia", "września", "października", "listopada", "grudnia"];
	return monthNames[mon];
}

//example: 2018-09-09XXXXXXXXXX || return 9 września 2019
function convertDateCard( data )
{
	$data = data.substring(0,10);
	$parts = $data.split('-');
	$day = $parts[2];
	$mon = $parts[1] - 1;
	$monTxt = convertMon2( $mon );
	$year = $parts[0];
	$newdate = $day+' '+$monTxt+' '+$year;
	return $newdate;
}



function loadNews()
{
	
	var $news = document.getElementById("news");
	var $newssrc = $v2 + "news?per_page=11";
	 if( $news )
        {
			var ourRequest = new XMLHttpRequest();
            ourRequest.open("GET", $newssrc);
			ourRequest.onload = function(){
                if(ourRequest.status >= 200 && ourRequest.status < 400){
                    var data = JSON.parse(ourRequest.responseText); 
                    console.log("Returned");
					
					var $n = 1;
					var $target = '';
					data.forEach(function(entry) {
						
						
						 
						 if( $n > 9 ){
							 $target = "#target-news .col-4";
						 }else if( $n > 6 ){
							 $target = "#target-news .col-3";
						 }else if( $n > 3 ){
							 $target = "#target-news .col-2";
						 }else{
							 $target = "#target-news .col-1";
						 }
						 
						 
						 var $elID = "news"+entry['id'];
						 
						 
						$imgHref = '';
						$links = entry['_links'];
						if (typeof $links !== 'undefined' && $links !== null) {
							if (typeof $links['wp:featuredmedia'] !== 'undefined' && $links['wp:featuredmedia'] !== null) {
								
								$media = $links['wp:featuredmedia'];
								if (typeof $media[0] !== 'undefined' && $media[0] !== null) {
									$mediaEl = $media[0];
									if (typeof $mediaEl['href'] !== 'undefined' && $mediaEl['href'] !== null) {
										$imgHref = getImageSrc( $mediaEl['href']);
									}
								}
							}
						}
						 
						var $eldate = convertDateCard( entry['date'] );
						var $eltitle = entry['title']['rendered'];
						
						
						$( "#prototype-news" ).clone().appendTo( $target ).removeAttr("id").attr("id", $elID);
						$("#"+$elID+" .card-img").attr("src", $imgHref);
						
						$("#"+$elID+" .card-title").html( $eltitle );
						/*
						$("#"+$elID+" .card-text").html( entry['content'] );
						$("#"+$elID+" .card-link").html( entry['type'] );
						$("#"+$elID+" .et-card-link").html( entry['link'] );*/
						$("#"+$elID+" .et-card-date-text").html( $eldate );
						 					 
						$n++;
					});
 
					//$news.innerHTML = data;
                }else{
                    console.log("Returned error");
                }
            };
            ourRequest.onerror = function(){
                console.log("Connection error");
            };
            ourRequest.send();
		}
}

    function loadMenu()
    {
        var $menu = document.getElementById("js-menu");
        if( $menu )
        {
            var $menusrc = $v2 + "n_menu";
            
            
            var ourRequest = new XMLHttpRequest();
            ourRequest.open("GET", $menusrc);

            ourRequest.onload = function(){
                if(ourRequest.status >= 200 && ourRequest.status < 400){
                    var data = JSON.parse(ourRequest.responseText);
                    console.log("Returned");
					console.log(data);
					$menu.innerHTML = data;
                }else{
                    console.log("Returned error");
                }
            };
            ourRequest.onerror = function(){
                console.log("Connection error");
            };
            ourRequest.send();
            

           /*data = "sss";
            $.ajax({
              dataType: "json",
              url: $menusrc,
              data: data,
              success: function(){
                  alert("success");
              }
            });

           /* $.ajax({
                url: $v2+"/posts",
                datatype: 'json',
                success: function(data){
                    $menu.innerHTML = "dupa";
                } 
            }); */

        }
    }
    function jsLoader()
    {
        loadMenu();
        loadNews();

        


    }
    $(document).ready(function(){

        jsLoader();
    });
