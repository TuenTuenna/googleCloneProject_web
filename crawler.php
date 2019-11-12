<?php

// 임포트
include("simplehtmldom_1_9_1/simple_html_dom.php");

// 링크를 만드는 함수 
function createLink($src, $url){
	// $url = http://www.ohmynews.com

	$scheme = parse_url($url)["scheme"]; // http, https
	$host = parse_url($url)["host"]; // www.naver.com /about.php /search.php

	//
	if (substr($src, 0, 2) == "//"){
		$src = $scheme . ":" . $src; // //www.naver.com -> http://www.naver.com
	} 
	else if (substr($src, 0, 1) == "/"){ //  /about.php
		$src = $scheme . "://" . $host . $src;   // http://www.naver.com/about.php
	}
	else if (substr($src, 0, 2) == "./" ){ // ./about.php     
		$src = $scheme . "://" . $host . dirname(parse_url($url)["path"]) . substr($src, 1); 
	}
	else if (substr($src, 0, 3) == "../"){
		$src = $scheme . "://" . $host . "/" . $src; 
	}
	else if (substr($src, 0, 5) != "https" && substr($src, 0, 4) != "http") {
		$src = $scheme . "://" . $host . "/" . $src;
	}

	return $src;

}



// 함수 정의

function followLinks($url){

	// url 의 html 돔을 가져온다.
	$html = file_get_html($url);

	// 링크를 배열에 담는다.
	$linkList = $html->find('a');

	// foreach 반복문 사용
	// 0,1,2,3,4,5,,,,,,,
	// 0 -> 100 개까지 
	foreach ($linkList as $link) {
		// 로직을 짠다.
		// 1. a 태그 안에 있는 href를 가져온다. 즉 링크를 가져온다.
		$href = $link->href;

		// 필요없는 요소를 제거한다.
		// 
		if (strpos($href, "#") !== false){
			continue;
		}
		else if (substr($href, 0, 11) == "javascript:"){
			continue;
		}

		$href = createLink($href, $url);

		echo $href . '<br>';

	}


}

$siteToCrawl = "http://www.ohmynews.com/";

// 해당 사이트를 크롤링 한다.
followLinks($siteToCrawl);





?>