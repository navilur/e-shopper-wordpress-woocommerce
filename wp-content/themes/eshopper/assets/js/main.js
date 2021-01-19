$('.heroBlock').slick({
	arrows: false,
	dots: true,
});

$('.slickJS .products').slick({
	infinite: false,
	speed: 300,
	slidesToShow: 4,
	slidesToScroll: 4,
	responsive: [
	  {
		breakpoint: 769,
		settings: {
		  slidesToShow: 2,
		  slidesToScroll: 2
		}
	  }
	]
  });

  $('.brandBlock ul').slick({
	arrows: false,
	dots: false,
	infinite: false,
	speed: 300,
	slidesToShow: 5,
	slidesToScroll: 5,
	responsive: [
	  {
		breakpoint: 1000,
		settings: {
		  slidesToShow: 4,
		  slidesToScroll: 4
		}
	  },
	  {
		breakpoint: 600,
		settings: {
		  slidesToShow: 3,
		  slidesToScroll: 3,
		}
	  }
	]
  });