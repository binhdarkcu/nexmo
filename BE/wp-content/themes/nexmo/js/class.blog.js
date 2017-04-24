// JavaScript Document
var Blog = (function() {
	function init(){
        blogInit();
        dropDownMenu();
	}

	function blogInit(){
        var body = $('body');
        if (!body.is('.blog, .tag, .category, .author, .single, .archive.date')) return false;

        $('.Blog-sidebarMore, .Blog-sidebarMore:after, .Blog-sidebarLess, .Blog-sidebarLess:after').on('click',
            function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                $('.Blog-sidebarMore, .Blog-sidebarLess, .Blog-sidebarContent').toggleClass('active');
            }
        );

        body.on('click', function () {
           if ($('.Blog-sidebarContent').hasClass('active')) {
               $('.Blog-sidebarMore, .Blog-sidebarLess, .Blog-sidebarContent').toggleClass('active');
           }
        });
	}

    function dropDownMenu() {
        /**
         * Toggle products dropdown menu
         */
        $('.Navigation-Dropdown').on('click tap', function (e) {
            $(this).parent('li').toggleClass('is-active');
            e.preventDefault();
            e.stopPropagation();
            return false;
        });
        $('body').on('click', function () {
            var target = $('.Navigation-Dropdown').parent('li');
            if (target.hasClass('is-active')) {
                target.removeClass('is-active');
            }
        });
    }
	return {
		init:init
	}

})();

$(document).ready( function() {
	Blog.init();
});
