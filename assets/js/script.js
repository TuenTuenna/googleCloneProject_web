$(document).ready(function() {

	console.log("hello world");

  	onSearchInputFocusChanged();

});

// 검색입력부분 포커스 변경시 
function onSearchInputFocusChanged() {

	const searchBox = $(".searchContainer .searchBox");

	const searchInput = $("#indexSearchInput");

	searchInput.focus(function(event) {
		/* Act on the event */
		console.log("포커스를 얻었다.");
		searchBox.addClass('searchBoxFocused');
	});

	searchInput.blur(function(event) {
		/* Act on the event */

		console.log("포커스를 잃었다.");
		searchBox.removeClass('searchBoxFocused');
	});

}
























