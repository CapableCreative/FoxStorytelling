

<?php wp_footer(); // js scripts are inserted using this function ?>
</div>
<div class="container-fluid" id="footer-container" style="height: 150px;padding:75px 0px;margin: 0px auto 0px;text-align: center;color:#FFF;background: #666;">
	<div class="row">
		<div class="col-md-12">
			&copy; 2017 Fox Storytelling & Stephen Fox; All rights reserved.
		</div>
	</div>
</div>
</div>		
</body>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
$(window).scroll(function() { 
if ($(this).scrollTop()> 100) { 
$('.paper-logo').slideDown(); 
} else { 
$('.paper-logo').slideUp(); 
} 
});
</script>
<script>
	$(window).scroll(function() { 
		if ($(this).scrollTop()> 100) { 
			$('.paper-logo').fadeIn(); 
		} else { 
			$('.paper-logo').fadeOut(); 
		} 
	});
	
	$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});

////// --------- LAZY LOADER to COME --------- ///////////
</script>
<script>
$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.article-fade').each( function(i){
            
            var bottom_of_object = $(this).offset().top + ($(this).outerHeight()-400);
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1000);
                    
            }
            
        }); 
    
    });
    
});
</script>

</html>