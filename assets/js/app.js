(function($){
	$(window).load(function(){
		$('.loader-page').fadeOut(1000);
	})
	$(document).ready(function(event) {
		console.log("EAO");
		$(document).foundation();
		// $("html").niceScroll({
  //              cursorcolor : "#156B3C",
  //              cursorwidth : "8px",
  //              cursorborderradius: "10px",
  //              autohidemode: "cursor",
  //              cursorborder: 'none',
  //              zindex: '99999'
  //   	});
		var blocos = $("#owl-eventos");
		blocos.owlCarousel({
			autoplay : false,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
		    center: true,
			items : 5,
			loop: true,
			transitionStyle : "fade"
		})
		
		$('.prev').click(function() {
		    blocos.trigger('prev.owl.carousel');
		})
		$('.next').click(function() {
		    blocos.trigger('next.owl.carousel');
		})


		$(window).scroll(function(event){
				event.preventDefault();
				var lastScrollTop = $('.header-menu').height();
				var st = $(this).scrollTop();
				if (st > lastScrollTop){
					if ($(window).scrollTop() > $('.header-menu').height()) {
						$('.title-header').addClass('fixed');
					}else{	
						$('.title-header').addClass('fixed');
					}
				} else {
						$('.title-header').removeClass('fixed');
				}
				lastScrollTop = st;
			});

		// function inputHandler(masks, max, event) {
		// 	var c = event.target;
		// 	var v = c.value.replace(/\D/g, '');
		// 	var m = c.value.length > max ? 1 : 0;
		// 	VMasker(c).unMask();
		// 	VMasker(c).maskPattern(masks[m]);
		// 	c.value = VMasker.toPattern(v, masks[m]);
		// }

		// var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
		// var tel = document.querySelector('#phone');
		// VMasker(tel).maskPattern(telMask[0]);
		// tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);


	})
})(jQuery);


