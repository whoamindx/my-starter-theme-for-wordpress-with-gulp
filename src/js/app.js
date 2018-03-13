(function(){
	setTimeout(() => {
		console.log("%cby Gabriel Napoleão!\n%chttps://gabrielndr.github.io Δ","font-size:1.5em;color:#4558c9;","color:#d61a7f;font-size:1em;text-decoration:none;")
	},5000);
})();

$(function($) {
	/**
	 * DL MENU
	 */
	$( '#dl-menu' ).dlmenu({
		animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
	});


	/**
	 * OWL CAROUSEL
	 */
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
	})


	/**
	 * ÂNCORA SUAVE
	 */
	$(".scroll").click(function(e){
		e.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
	});

	
	/**
	 * SCROLL REVEAL
	 */
	window.scrollReveal = new scrollReveal();
});