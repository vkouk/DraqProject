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
    questionnaire_result();
});

function questionnaire_result() {
    var result_section = $(this).parent("fieldset").attr("data-id");

    $.ajax({
        method: 'GET',
        dataType: 'json',
        url: 'result.php',
        success: function (risk) {
            var risk_result = JSON.parse(risk);
            switch (risk_result)
            {
                case (risk_result === 1 && result_section === "result1"):
                    $(this).find("p#result-text").text("Testing result1");
                    break;
                case (risk_result === 2 && result_section === "result2"):
                    $(this).find("p#result-text").text("Testing result2");
                    break;
                case (risk_result === 3 && result_section === "result3"):
                    $(this).find("p#result-text").text("Testing result3");
                    break;
                case (risk_result === 4 && result_section === "result4"):
                    $(this).find("p#result-text").text("Testing result4");
                    break;
                case (risk_result === 5 && result_section === "result5"):
                    $(this).find("p#result-text").text("Testing result5");
                    break;
                default:
                    alert("You should do the test first");
            }
        }
    });
}

function questionnaire()
{
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;

    $(".next-quest").click(function(e)
    {
        e.preventDefault();

        var current_section = $(this).parent("fieldset").attr("data-id");
        var input_name = $(this).parent("fieldset").find("input").attr("name");
        var select_id = $(this).parent("fieldset").find("select").attr("id");

        var section_input = $("input[name=" + input_name +"]:radio:checked").val();
        var section_input_number = $("input[name=" + input_name +"][type=number]").val();
        var section_select = $("#" + select_id + " option:selected").val();

        if (select_id) {
            if (section_select === "none") {
                alert("Please answer correctly!");
                return false;
            }
        }
        if (input_name && !(current_section === "bmi6")) {
            if (section_input === undefined && !section_input_number) {
                alert("Please answer correctly!");
                return false;
            }
            if (section_input_number === "0") {
                alert("Please answer correctly!");
                return false;
            }
        }

        if ($(this).hasClass('calculatebmi'))
        {
            if (current_section === "height5")
            {
                var weight = parseFloat($("input#weight").val());
                var height = parseFloat($("input#height").val());
                var bmi_points = 0;
                var bmi = parseFloat(weight / (height*height));

               if (bmi <= 25)
               {
                   bmi_points = 0;

               }else if(25 < bmi && bmi <= 30)
               {
                   bmi_points = 1;

               }else
               {
                   bmi_points = 2;
               }

                var factor = Math.pow(10, 2);
                var tempNumber = bmi * factor;
                var roundedTempNumber = Math.round(tempNumber);
                bmi = roundedTempNumber / factor;

                $("input#bmi").val(bmi);
                $("input#bmi_points").val(bmi_points);
            }
        }

        if ($(this).hasClass('checkGender'))
        {
            var gender = $('input:radio[name=gender]:checked').val();
            if (gender === 'M')
            {
                $('div.donotdisplaymale').removeClass('gender-inactive');
                $('div.donotdisplayfemale').addClass('gender-inactive');
            }
            else if (gender === 'F')
            {
                $('div.donotdisplayfemale').removeClass('gender-inactive');
                $('div.donotdisplaymale').addClass('gender-inactive');
            }
        }

        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        next_fs.show();
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50)+"%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale('+scale+')',
                    '-moz-transform': 'scale('+scale+')',
                    '-web-transform': 'scale('+scale+')',
                    '-o-transform': 'scale('+scale+')',
                    'position': 'absolute'
                });
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInExpo'
        });
    });


    $(".prev-quest").click(function()
    {
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        previous_fs.show();
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1-now) * 50)+"%";
                opacity = 1 - now;
                current_fs.css({'left': left, 'position': 'relative'});
                previous_fs.css({
                    'transform': 'scale('+scale+')',
                    '-moz-transform': 'scale('+scale+')',
                    '-web-transform': 'scale('+scale+')',
                    '-o-transform': 'scale('+scale+')',
                    'position': 'relative',
                    'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInExpo'
        });
    });

    $(".finish-quest").click(function(){
        return false;
    })
}
