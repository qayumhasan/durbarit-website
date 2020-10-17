
	// //preloader
    $(window).on("load", function(){
        $(".preloader").fadeOut();
    });


$(document).ready(function(){


    // scrolling animation
    AOS.init();

	

    

    // menu toggle
	$('.menu_toggle').click(function(){
		$('.nav_wrap').toggleClass('nav_wrap_active');
	})


	// clients logo slide
    $("#flexiselDemo3").flexisel({
        visibleItems: 12,
        itemsToScroll: 1,         
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }        
    }); 

    // images viewer
    $('#captionBox').CaptionBox({
          disableRightClick: true,
          alterUrlFlag: false
    });

	
	// sidebar menu togler
	// $('.drop_li').click(function(){
	// 	$(this).removeClass("drop_li_active");
	// 	$(this).toggleClass('drop_li_active');

	// });
	// $('.drop_li_active').click(function(){
	// 	$(this).removeClass("drop_li_active");
	// 	$(this).toggleClass("drop_li");

	// });


	// $('.drop_li_active').click(function(){
	// 	$(".drop_li_active").removeClass("drop_li_active");
	// });





	$('.sidebar_togler_icon').click(function(){
		$(".body_wrapper").toggleClass("body_wrapper_active");
	});


 



	

	
	
    

	
	

	
});
