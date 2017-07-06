<script type="text/javascript">
(function($){
		$.fn.zoom_it  = function(options) {
			var new_width , new_height ;
			var defaults ;

			defaults  = {
							width  : 100 ,
							height : 100 ,
							box    : 100 
					     } ;

		     options  = $.extend(defaults, options) ;

			 if(options.box != 100) { 
				 new_width  = $(this).width()  * options.box/100 ;
				 new_height = $(this).height() * options.box/100 ;
			 }
			 else {
				 new_width  = $(this).width()  * options.width/100 ;
				 new_height = $(this).height() * options.height/100 ; 
			 }

			 $(this).animate({ width : new_width, height : new_height } , 500) ;
			 return this ;
		}					     
	})(jQuery) ;

	$(document).ready(function() {
		$('#zoomIn').click(function(e) {
			$('#box').zoom_it({ width : 80 , height : 70 }).removeClass('box02').addClass('box01') ;	
		}) ;

		$('#zoomOut').click(function(e) {
			$('#box').zoom_it({ width: 120, height: 130 }).removeClass('box01').addClass('box02') ;	
		}) ;
	}) ;
</script>
<style type="text/css">
/* CSS Document */

.clr{
	clear: both;	
}

.left{
	float: left;	
}

.input{
	padding: 3px;
	border: solid 1px #333;	
}

.button{
	font-size: 12px;
	padding: 3px;
	border: solid 1px #333;	
}


.bg01{
	background-color: #FF9;	
}

.bg02{
	background-color: #CFC;
}

.box1{
	height: 200px;
	width: 200px;
	padding: 5px;
	margin: 20px auto;
	border: 3px solid #090;
	text-align: center;
	font-size: 20px;	
} 
</style>
<script type="text/javascript">	 
$(document).on('click', '.box-heading span.clickable', function (e) {    
	var  $this = $(this);    
	if (! $this.hasClass('box-collapsed')) {        
		$this.parents('.box').find('.box-body').slideUp();        
		$this.addClass('box-collapsed');        
		$this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');    
	} else {        
		$this.parents('.box').find('.box-body').slideDown();        
		$this.removeClass('box-collapsed');        
		$this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');    
	}});
	 
	$(document).on('click', '.box div.clickable', function (e) {    
		var  $this = $(this);  
    	if (!$this.hasClass('box-collapsed')) {        
    		$this.parents('.box').find('.box-body').slideUp();        
    		$this.addClass('box-collapsed');        
    		$this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');    
    	} else {        
    		$this.parents('.box').find('.box-body').slideDown();        
    		$this.removeClass('box-collapsed');        
    		$this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');    
	}});
	 
	$(document).ready(function () {    
    	$('.box-heading span.clickable').click();    
    	$('.box div.clickable').click();
	});
</script>
<section class="box">
	<div class="box-heading clickable box-collapsed">
		<h1 class="box-title">VIP CARD 365<span class="pull-right"><i class="glyphicon glyphicon-minus"></i></span></h1>
	</div>
	<div class="box-body"><div class="box-content"><input type="button" id="zoomIn" value="Zoom In" class="input"/><input type="button" id="zoomOut" value="Zoom Out" class="input"/><div id="box" class="box1">My Box</div></div></div>
</section>
