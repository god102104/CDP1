
(function($){
	"use strict";
	
	//Loader	
	$(window).on('load', function () {
		$('.Loader').delay(350).fadeOut('slow');
		$('body').delay(350).css({ 'overflow': 'visible' });
	})

    // Navigation
	$('nav.headnavbar').coreNavigation({
		menuPosition: "right", // left, right, center, bottom
		container: true, // true or false
		animated: true,
		animatedIn: 'flipInX',
		animatedOut: 'bounceOut',
		dropdownEvent: 'click', // Hover, Click & Accordion
		onOpenDropdown: function(){
			console.log('open');
		},
		onCloseDropdown: function(){
			console.log('close');
		},
		onOpenMegaMenu: function(){
			console.log('Open Megamenu');
		},
		onCloseMegaMenu: function(){
			console.log('Close Megamenu');
		}
	});
	
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$(".header").addClass("header-fixed");
		} else {
			$(".header").removeClass("header-fixed");
		}
	});
	
	// Count
	$(window).on('load', function() {
		$('.count-facts h4').counterUp({
			delay: 100,
			time: 800
		});
	});
	
	// Care helper
	$("#job-slide-care").owlCarousel({
		loop:true,
		autoplay:true,
		nav:false,
		dots:false,
		margin:0,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:2,
				nav:false
			},
			1000:{
				items:3,
				nav:false,
				loop:true
			}
		}
	})

	// Employment
	$("#job-slide-emp").owlCarousel({
		loop:true,
		autoplay:true,
		nav:false,
		dots:false,
		margin:0,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:2,
				nav:false
			},
			1000:{
				items:3,
				nav:false,
				loop:true
			}
		}
	})
	
	// Jobs
	$("#testimonial-3-slide").owlCarousel({
		loop:true,
		autoplay:true,
		nav:false,
		dots:true,
		margin:0,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:1,
				nav:false
			},
			1000:{
				items:1,
				nav:false,
				loop:false
			}
		}
	})
	
	// Jobs
	$("#agency-slide").owlCarousel({
		loop:true,
		autoplay:true,
		nav:false,
		dots:true,
		margin:0,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:2,
				nav:false
			},
			1000:{
				items:3,
				nav:false,
				loop:false
			}
		}
	})
	
	// RL List
	$("#rl-list").owlCarousel({
		loop:true,
		autoplay:true,
		nav:false,
		dots:true,
		margin:0,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:1,
				nav:false
			},
			1000:{
				items:2,
				nav:false,
				loop:false
			}
		}
	})
	
	
	// Testimonials 2
	$("#testimonials-two").owlCarousel({
		nav:true,
		dots:false,
		items: 1,
		center:false,
		loop: true,
		autoplay: true,
		navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
		responsive: {
			0: {items:1,
				stagePadding: 0,
				margin: 0
			},
			768: {items:2,
				stagePadding:0,
				margin:10
			},
			1025: {items:3,
				stagePadding:0,
				margin:10
			},
			1700: {items:3,
				stagePadding:0,
				margin:10
			}
		}
	})
	
	// Employers
	$("#brands").owlCarousel({
		loop:true,
		autoplay:true,
		nav:false,
		dots:false,
		margin:0,
		responsiveClass:true,
		responsive:{
			0:{
				items:2,
				nav:false
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:5,
				nav:false,
				loop:false
			}
		}
	})
	
	// All Select Category
	$('#category').select2({
		placeholder: "Choose Category...",
		allowClear: true
	});
	
	// All Select Category
	$('#category-side').select2({
		placeholder: "Choose Category...",
		allowClear: true
	});
	
	// All Select Category
	$('#category-2').select2({
		placeholder: "Choose Category...",
		allowClear: true
	});
	
	// Filter Sidebar Category
	$('#category-3').select2({
		placeholder: "Choose Category...",
		allowClear: true
	});
	
	// All Search
	$('#search-allow').select2({
		placeholder: "Search Allow",
		allowClear: true
	});
	
	// Job type
	$('#jb-type').select2({
		placeholder: "Job type",
		allowClear: true
	});
	
	// Career  Lavel
	$('#career-lavel').select2({
		placeholder: "Career Level",
		allowClear: true
	});
	
	// Offerd Salary
	$('#offerd-sallery').select2({
		placeholder: "Offerd Salary",
		allowClear: true
	});
	
	// SignUp As
	$('#signup-as').select2({
		placeholder: "Sign Up As",
		allowClear: true
	});
	
	// Experience
	$('#experience').select2({
		placeholder: "Please Select",
		allowClear: true
	});
	
	// division
	$('#division').select2({
		placeholder: "구분 선택",
		allowClear: true
	});	

	// location
	$('#location').select2({
		placeholder: "지역",
		allowClear: true
	});

	// work_zone
	$('#work_zone').select2({
		placeholder: "지역",
		allowClear: true
	});

	// emp_zone
	$('#emp_zone').select2({
		placeholder: "지역",
		allowClear: true
	});

	// work_type
	$('#work_type').select2({
		placeholder: "형태",
		allowClear: true
	});

	// work_career
	$('#work_career').select2({
		placeholder: "경력",
		allowClear: true
	});

	// Gender
	$('#gender').select2({
		placeholder: "성별",
		allowClear: true
	});

	// age_frm
	$('#age_frm').select2({
		placeholder: "나이",
		allowClear: true
	});

	// emp_type
	$('#emp_type').select2({
		placeholder: "형태",
		allowClear: true
	});
	// emp_career
	$('#emp_career').select2({
		placeholder: "경력",
		allowClear: true
	});
	// emp_age
	$('#emp_age').select2({
		placeholder: "나이",
		allowClear: true
	});

	// grade
	$('#grade').select2({
		placeholder: "평점",
		allowClear: true
	});

	
	// Industry
	$('#industry').select2({
		placeholder: "Please Select",
		allowClear: true
	});	
	
	// Qualification
	$('#qualification').select2({
		placeholder: "Please Select",
		allowClear: true
	});	
	
	
	// Business Type
	$('#business-type').select2({
		placeholder: "Search Allow",
		allowClear: true
	});
	
	// Search Page Tag & Skill 
	$(".tag-skill").select2({
	  tags: true
	});
	
	// Specialisms 
	$("#specialisms").select2({
		placeholder: "Specialisms"
	});

	// Editor 
	$('#summernote').summernote({
		height: 150
	});
	
	// Editor 
	$('#resume-info').summernote({
		height: 120
	});
	
	// Job Description
	$('#jb-description').summernote({
		height: 150
	});
	
	// CV 
	$('#cv-cover').summernote({
		height: 150
	});
	
	// File upload
	$(".custom-file-input").on("change", function() {
	  	var fileName = $(this).val().split("\\").pop();
	  	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
	
	/****----- Counter ---------*/
	$('.count').on('each', function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 4000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});
	
	
})(jQuery);