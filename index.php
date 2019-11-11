<!DOCTYPE html>
<html>
<!-- 메인 인덱스 페이지 -->
<!-- 해더에는 파일 링크가 들어간다 -->
	<head>
		<title>Welcome to gaggle</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		
		<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    	
	</head>

	<!-- 바디 -->
	<body>
		
		<!-- 웹페이지 화면을 감싸는 렙퍼 클래스 - 그 안에 인덱스 페이지 -->
		<div class="wrapper indexPage">
			
		
			<!-- 메인 섹션 -->
			<div class="mainSection">
					
				<!-- 로고 부분 -->
				<div class="logoContainer">
					
					<img src="assets/img/gaggle_logo.png" alt="">

				</div>
				
				<!-- 검색 부분 -->
				<div class="searchContainer">

					<!-- 데이터는 search.php 로 넘어간다. -->
					<form action="search.php" method="GET">

						<div class="searchBox">
							<img class="searchIcon" src="assets/img/search.png">
							<!-- 텍스트 입력부분 -->
							<input id="indexSearchInput" type="text" name="term" placeholder="검색어를 입력하세요..." >	
						</div>
						
						
						
						
							
						<!-- Search 라는 이름으로 제출 하는 버튼 -->
						<input class="searchButton" type="submit" value="검색">

					</form>

				</div>


			</div>


		</div>
		<script type="text/javascript" src="assets/js/script.js"></script>
	</body>

</html>