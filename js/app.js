jQuery(document).ready(function($) {
	// 2/3/2017 Bill: Added back-top working code.
	if ($('#back-to-top').length) {
	    var scrollTrigger = 100,
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                $('#back-to-top').addClass('show');
	            } else {
	                $('#back-to-top').removeClass('show');
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('#back-to-top').on('click', function(e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });
	}

	// 2/3/2017 Bill: Added slideToggle effect for dropdown menu.
	$('.nav .nav-subtab').css("display", "none");
	$('.dropdown').hover(function() {
		$(this).children('.nav-subtab').stop(true, false, true).slideToggle(650);
	});
});