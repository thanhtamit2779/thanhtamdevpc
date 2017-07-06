$(document).ready(function() {	
	$('#menu').find('li ul').parent().addClass('has-sub');   
	
	$(window).scroll(function () {
        if ($(this).scrollTop() > 40) {
            $('.header-top').addClass('fixed-nav'); 
        } else {
        	$('.header-top').removeClass("fixed-nav");
        }
    });

	$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        $('#to-top').css('display', 'block'); 
    } else {
    	$('#to-top').css('display', 'none');
    }
    });
    
	$('#to-top').click(function () {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });
}) ;

$(document).on('click', '.box-heading span.clickable', function (e) {    
	var  $this = $(this);    
	if (! $this.hasClass('box-collapsed')) {        
		$this.parents('.box').find('.box-body').slideUp();        
		$this.addClass('box-collapsed');        
		$this.find('i').removeClass('fa-angle-up').addClass('fa-angle-down');    
	} else {        
		$this.parents('.box').find('.box-body').slideDown();        
		$this.removeClass('box-collapsed');        
		$this.find('i').removeClass('fa-angle-down').addClass('fa-angle-up');    
	}});
	 
	$(document).on('click', '.box div.clickable', function (e) {    
		var  $this = $(this);  
    	if (!$this.hasClass('box-collapsed')) {        
    		$this.parents('.box').find('.box-body').slideUp();        
    		$this.addClass('box-collapsed');        
    		$this.find('i').removeClass('fa-angle-up').addClass('fa-angle-down');    
    	} else {        
    		$this.parents('.box').find('.box-body').slideDown();        
    		$this.removeClass('box-collapsed');        
    		$this.find('i').removeClass('fa-angle-down').addClass('fa-angle-up');    
	}});
	 
	$(document).ready(function () {    
    	$('.box-heading span.clickable').click();    
    	$('.box div.clickable').click();
	});