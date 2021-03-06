// JavaScript Document
var SiteMain = (function() {
	function init(){
		windowScroll();
		createSlick('.Clients-content', 2, 2);
		createSlick('.Carousel', 1, 1);
		openMenuHome();
	}
	function redirectFuction() {
		localStorage.clear();
		sessionStorage.removeItem('SessionUser');
		window.location.href = HOME_URL + '/sign-in';
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

	function openMenuHome(){
		$('.dropbtn').click(function(){
			$(this).parent().toggleClass('open');
		})
	}

	function windowScroll(){
		$(window).scroll(function(){
			var scrollTop = $(window).scrollTop();
			if (scrollTop > 0){
				$('.Nav-header .floating-menu').addClass('floatingMenu');
				$('.dropbtn, .link, .Nav-header .logo').addClass('dark');
			}else{
				$('.Nav-header .floating-menu').removeClass('floatingMenu');
				$('.dropbtn, .link, .Nav-header .logo').removeClass('dark');
			}
		});
	}

	return {
		init:init,
		openPopup:openPopup,
		closePopup:closePopup,
		redirectFuction: redirectFuction
	}

})();

$(document).ready( function() {
	SiteMain.init();
});
