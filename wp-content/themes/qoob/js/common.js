jQuery(document).ready(function(){
	// Init masonry blog list
	jQuery('.content-area').imagesLoaded( function() {
		jQuery('.masonry-list').masonry({
			itemSelector: '.col-lg-4',
			percentPosition: true,
			resize: true
		});
	});


	window.onscroll = function() {
			if (window.pageYOffset > 107) {
				jQuery('.site-header.fixed').addClass('move');
			} else {
				jQuery('.site-header.fixed').removeClass('move');
			}
	};

	jQuery(window).resize(function(){
		jQuery('.masonry-list').masonry('reloadItems');
	});
});

// Loader fading out
jQuery(window).load(function() {
		jQuery(".loader").fadeOut();
		jQuery(".loader-wrap").delay(400).fadeOut("slow");
});