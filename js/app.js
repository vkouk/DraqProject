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

	// 15/3/2017 Bill: Added code for do-the-test thing.
	$('.questionnaire-intro a').on('click', function(e) {
		e.preventDefault();
		setTimeout(function() {
    		$('.questionnaire').css({
    			'margin-top': '0'
    		});
       	}, 500);
        $('.questionnaire-intro a').css('display', 'none');
	});

	// 11/3/2017 Bill: Added opacity hover effect for image caption.
	$('.caption').hover(function() {
		$(this).children("span").css("opacity", ".6");
		}, function() {
        $(this).children("span").css("opacity", "0");
	});

	// 2/3/2017 Bill: Added slideToggle effect for dropdown menu.
	$('.nav .nav-subtab').css("display", "none");
	$('.dropdown').hover(function() {
		$(this).children('.nav-subtab').stop(true, false, true).slideToggle(650);
	});

    questionnaire();
});

function questionnaire() {
	var question = 1;
	var questItem = $('.questionnaire .question');
	var _this = $(this);

    $('.questionnaire-footer').find('a:first-child').after(" <span>Question </span>" + question + "<span> of 12</span> ");

	//Next Question
	$('.questionnaire-footer .next-quest').on('click', function() {

		$(questItem[question]).addClass('active');
		$('.questionnaire .question').addClass('inactive');
		$('#' + questItem[question + 1].dataset.id).removeClass('inactive');
		question++;
	});

	//Last Question
	$('.questionnaire-footer .prev-quest').on('click', function() {

		$(questItem[question]).removeClass('active');
		$('.questionnaire .question').addClass('inactive');
		$('#' + questItem[question].dataset.id).removeClass('inactive');
		if (question <= 0) {
			return;
		}
		question--;
	});

    /*if (question === 12) {
        $('.questionnaire-footer').find('a').replaceWith("<span>Complete your questionnaire</span>");
	} add complete button.*/
}