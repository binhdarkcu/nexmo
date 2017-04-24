// JavaScript Document
var SiteMain = (function() {
	function init(){
		createSlick('.Clients-content', 2, 2);
		createSlick('.Carousel', 1, 1)
	}

	function openPopup(idDiv){
		closePopup();
		$(idDiv).css('display', 'block');
	}
	function closePopup(){
		$('.register form')[0].reset();
		$('.popup').css('display', 'none');
	}

	function createSlick(ele, slideshow, slidescroll){
		$(ele).slick({
			slidesToShow: slideshow,
  			slidesToScroll: slidescroll,
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
