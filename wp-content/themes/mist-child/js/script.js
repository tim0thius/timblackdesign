console.log('script test')

jQuery( document ).ready(function($) {
    $('.action--show-contact-form').click(function(e){
		$('body').addClass('state--show-contact-form')
	});

	$('#section-contact').append('<a class="component-button--close action--hide-contact-form">X</a>')

	$('.action--hide-contact-form').click(function(e){
		$('body').removeClass('state--show-contact-form')
	});
});
