var themeUrl = '/wp-content/themes/d-simple/';
// jQuery.noConflict();
jQuery(document).ready(function($) {
	if($.support.msie&&($.support.version==6.0)&&!$.support.style){
		$('.nav li').each(function(){
			$(this).hover(function(){
				$(this).find('ul:eq(0)').show();
				$(this).css({background:'#262626'});
			},function(){
				$(this).find('ul:eq(0)').hide();
				$(this).css({background:'none'});
			})
		})
	}else{
		$(window).scroll(function(){
			var scroller = $('.rollto');
			document.documentElement.scrollTop+document.body.scrollTop>200?scroller.fadeIn():scroller.fadeOut();
		})
	}

	$('.ico-totop').click(function(){
		$('html,body').animate({scrollTop:0},300);
	})

	$('.ico-torespond').click(function(){
		scrollTo('.ico-torespond');
		$('#comment').focus();
	})

	$(document).click(function() {
		$('.popup-layer,.popup-arrow').hide();
		$('.btn-headermenu').removeClass('btn-active');
	})
	$('.btn-headermenu,.popup-layer,.popup-arrow').click(function(event) {
		event.stopPropagation();
	})
	$('.btn-headermenu').each(function(){
		$(this).click(function(){
			$(this).toggleClass('btn-active');
			$(this).next().toggle();
			$(this).next().next().toggle();
			$(this).parent().siblings().find('.popup-layer,.popup-arrow').hide();
		})
	})

	function scrollTo(name){
		var ID = $($(name).attr('href'));
		if(ID.length>0)
	   	$('html,body').animate({scrollTop: ID.offset().top-10},300);
	}
})