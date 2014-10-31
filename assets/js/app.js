$(document).foundation();

$('.imageFill').imagefill();

$(document).ready(function() {

	$('.iosSlider').iosSlider({
		snapToChildren: true,
		desktopClickDrag: true,
		infiniteSlider: true,
		snapSlideCenter: true,
		navNextSelector:'.nextslide',
	    navPrevSelector:'.prevslide',
	    snapToChildren: true,
	    onSlideComplete: slideContentComplete,
	    onSliderLoaded: slideContentComplete,
	    autoSlide: false,
	    infiniteSlider:true,
	    scrollbar: false,
	    keyboardControls: true
	});

	function slideContentComplete(args) {
		/* animation */
        $(args.sliderObject).find('.text1, .text2').attr('style', '');
					
		$(args.currentSlideObject).find('.text1').animate({
			top: '30px',
			opacity: '1'
		}, 400);

		$(args.currentSlideObject).find('.text2').animate({
			bottom: '80px',
			opacity: '1'
		}, 400);
	}

	if ($('body.background-image').is(":visible")) {
		// Swap for text
		// $('img.logo').addClass('hide');
		// $('h1.title').removeClass('hide');
		// $('h2.subtitle').removeClass('hide');

		// Swap for image
		$('img.logo').attr('src','/assets/img/logo-white.png');
	}

});