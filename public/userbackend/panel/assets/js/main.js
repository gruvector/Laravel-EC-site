$(document).ready(function(){
	// preloader
	$(window).on("load", function(){
		$(".preloader").fadeOut();
	});

	
	$('.sidbar-toggler-btn').click(function(){
		$('.wrapper').toggleClass('wrapper_active');
		$('.sidebar-wrapper').toggleClass('active-nav-wrapper');
		$('.sidebar-wrapper').toggleClass(' active-sidbar');
		$('.single-nav-wrapper').toggleClass('single-nav-wrapper-active');
	});
	$('.responsive_menu_toggle').click(function(){
		$('.wrapper').toggleClass('wrapper_responsive_active');
	});


	  $('[data-toggle="tooltip"]').tooltip();


		//user profile picture js
        $('#profilepicture').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#show_profilepicture').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })

	
});
