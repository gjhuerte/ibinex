
(function(){
	var exec_index 	= 0,
		exec_cards	= $('.exec-cards'),
		exec_clone	= $('#exec-images').clone(),
		exec_len	= exec_cards.length,
		last_arrow 	= "";
	
	function getCardSiblings(index){
		return {
			curr : index,
			next : (exec_index+1) % (exec_len),
			last : (exec_index+2) % (exec_len),
		};
	}
	
	function removeAnimateClass(){
		exec_cards.removeClass (function (index, className) {
			return (className.match (/(^|\s)exec-animate-\S+/g) || []).join(' ');
		});
	}
	
	function resetExecImages(){
		if ($(window).width()<768){
			removeAnimateClass();
		}else{
			$('#exec-images').replaceWith(exec_clone.clone());
			exec_cards	= $('.exec-cards');
		}
	}
	
	function nextAnimate(){
		let cards = getCardSiblings(exec_index);
		
		resetExecImages();
		
		exec_cards.eq(cards.curr).addClass('exec-animate-1-3');
		exec_cards.eq(cards.next).addClass('exec-animate-2-1');
		exec_cards.eq(cards.last).addClass('exec-animate-3-2');
		
		exec_index = (exec_index+1) % (exec_len);
	}
	
	function prevAnimate(){
		let cards = getCardSiblings(exec_index);
		
		resetExecImages();

		exec_cards.eq(cards.curr).addClass('exec-animate-1-2');
		exec_cards.eq(cards.next).addClass('exec-animate-2-3');
		exec_cards.eq(cards.last).addClass('exec-animate-3-1');

		exec_index = exec_index==0 ? exec_len-1 : exec_index-1;	
	}
	
	function windowHandler(){
		var window_flag = false;
		
		if ($(window).width()<=768) {
			if(window_flag) return;
			window_flag = true;
			try{
				$('#board-arrow-box').show();
				$('#exec-images').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					fade: true,
					draggable: false,
					swipe: false,
					asNavFor: '.exec-div-slick'
				});

				$('.board-members').removeClass('reveal-up');
				$('#board-list').addClass('reveal-up');
				
				$('#board-list').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: $('#board-prev'),
					nextArrow: $('#board-next'),
				});
			}catch(err){}
		}else {
			window_flag = false;
			try{
				$('#board-arrow-box').hide();
				$('#board-list').removeClass('reveal-up');
				$('.board-members').addClass('reveal-up');
				$('#exec-images').slick('unslick');
				$('#board-list').slick('unslick');
			}catch(err){}
		}
	}
	
	$('.exec-div-slick').slick({
		prevArrow: $('#exec-prev'),
		nextArrow: $('#exec-next'),
		draggable: false,
		swipe: false
	});
	
	$('.exec-div-slick').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		if(nextSlide - currentSlide == 1 || nextSlide - currentSlide < -1){
			nextAnimate();
		}else if(nextSlide - currentSlide == -1 || nextSlide - currentSlide > 1){
			prevAnimate();
		}
	});
	
	$(window).resize(windowHandler);
	$(window).on("load", function(){
		window.sr = ScrollReveal({opacity: 0, duration: 800, delay:300});
		
		sr.reveal('.reveal-up');
		
		if ($(window).width()<=450){
			$('#banner-content > div').addClass('uk-animation-slide-top-medium');
			sr.reveal('.fade',{distance:'0'});
		}else{
			$('#banner-content > div').addClass('uk-animation-slide-right-medium');
			sr.reveal('.reveal-left',{origin: 'left', distance:'200px'});
			sr.reveal('.reveal-right',{origin: 'right', distance:'200px'});
		}
		
	});
	
	windowHandler();
}())