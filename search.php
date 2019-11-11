<?php
	// $term = $_GET["term"];
	// null 체크
	// 넘어온 검색어가 값이 설정되어 있다면
	if(isset($_GET["term"])){

		$term = $_GET["term"];
	}
	else {
		// 아래에 있는 코드는 실행시키지 않는다.
		exit("You must enter a search term");
	}

	if(isset($_GET["type"])){

		$type = $_GET["type"];
	}
	else {
		$type = "sites";
	}

	// $type = isset($_GET["type"]) ? $_GET["type"] : "sites";

	// echo "\$type : ".$type;
?>

<!DOCTYPE html>
<html>
<!-- 검색 결과를 보여주는 페이지 -->
<!-- 해더에는 파일 링크가 들어간다 -->
	<head>
		<title>Welcome to gaggle</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	</head>

	<!-- 바디 -->
	<body>
		
		<!-- 웹페이지 화면을 감싸는 렙퍼 클래스 -->
		<div class="wrapper">
			
			<!-- 해더 부분 -->
			<div class="header">
				
				<!-- 해더 내용 부분 -->
				<div class="headerContent">
					
					<!-- 로고 부분 -->
					<div class="logoContainer">

						<!-- 작은 로고에 메인 페이지로 링크를 걸어둔다. -->
						<a href="index.php">
							<img src="assets/img/gaggle_logo.png" alt="">	
						</a>
						
					</div>
					
					<!-- 검색 부분 -->
					<div class="searchContainer">
						
						<!-- form 태그로 특정 페이지에 데이터를 넘겨줄 수 있다. action: 데이터를 넘길 페이지 -->
						<!-- 검색어를 입력해서 자료를 현재 페이지에 보여줄것이기 때문에 현재 페이지로 설정 -->
						<form action="search.php" method="GET">
							
							<!-- 검색어 입력바 부분 -->
							<div class="searchBarContainer">
							
								<!-- 검색어 박스 -->
								<input class="searchBox" type="text" name="term">
								<!-- 이미지를 넣을 것이기 때문에 input 태그 대신에 button 태그를 넣는다. -->
								<button class="searchButton">
									<img src="assets/img/search.png">
								</button>

							</div>

						</form>

					</div>

				</div>

				<!-- 탭 컨테이너 - 전체, 이미지 -->
				<div class="tabsContainer">


					<!-- 순서 없는 리스트 -->
					<ul class="tabList">
						
						<!-- 리스트 아이템 -->
						<li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
							<!-- 클릭해서 해당 페이지로 넘어갈수 있도록 a태그를 넣어준다. -->
							<a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
								사이트
							</a>
						</li>

						<li class="<?php echo $type == 'images' ? 'active' : '' ?>">
							<!-- 클릭해서 해당 페이지로 넘어갈수 있도록 a태그를 넣어준다. -->
							<a href='<?php echo "search.php?term=$term&type=images"; ?>'>
								이미지
							</a>
						</li>
						

					</ul>

				</div>



			</div>


			



			
		</div>

</body>

</html>










