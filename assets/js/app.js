$(document).foundation();

$('.imageFill').imagefill();

$(document).ready(function() {

	$('.iosSlider').iosSlider({
		snapToChildren: true,
		desktopClickDrag: false,
		infiniteSlider: true,
		snapSlideCenter: true,
		navNextSelector:'.nextslide',
	    navPrevSelector:'.prevslide'
	});

});