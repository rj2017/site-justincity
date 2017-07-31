$(function(){

	// eventos link
	$('.informacoes-eventos').click(function(){

		var indice = $(this).attr('goto');
		console.log(indice);
		location.href = 'eventos#'+indice;
	});

	// slick slide

	$('.eventos .container-3-eventos').slick({
		dots: true,
    infinite:true,
  		arrows:false,
  		slidesToShow: 3,
  		autoplay: true,
  		autoplaySpeed: 3000,
      slidesToScroll: 3,
  		responsive:[
  		{
  			breakpoint:1024,
  			settings:{
  				dots: true,
		  		infinite: true,
		  		arrows:false,
		  		autoplay: true,
 		 		autoplaySpeed: 3000,
        slidesToScroll: 2,
		  		slidesToShow: 2
  			}
  		},
  		{
  			breakpoint:768,
  			settings:{
  				dots: true,
		  		infinite: true,
		  		arrows:false,
		  		autoplay: true,
 		 		autoplaySpeed: 3000,
		  		slidesToShow: 1,
          slidesToScroll: 1
  			}
  		}
  		]
	});
});