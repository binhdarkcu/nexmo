// JavaScript Document
var SiteMain = (function() {
	function init(){
		createSlick('.Clients-content');
	}

	function openPopup(idDiv){
		closePopup();
		$(idDiv).css('display', 'block');
	}
	function closePopup(){
		$('.register form')[0].reset();
		$('.popup').css('display', 'none');
	}

	function createSlick(ele){
		$(ele).slick({
			slidesToShow: 2,
  			slidesToScroll: 2,
			dots: true,
			infinite: true
		});
	}

	return {
		init:init,
		openPopup:openPopup,
		closePopup:closePopup
	}

})();

$(document).ready( function() {
	SiteMain.init();
});
