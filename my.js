jQuery.validator.addMethod("usPhoneFormat", function (value, element) {
    return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}/.test(value);
}, " ");

$(".mob").mask("(999) 999-9999");



$(document).ready(function () {
	$(".myform").validate({
			rules: {
        name: {
          required: true
        },
        phone: {
          required: true,
            usPhoneFormat: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".myform").serialize(), 
			success: function(html)
			{	
				$('#ths').modal('toggle');
			} 
			}); 
			return false;
		}
	});
    	$(".modalform").validate({
			rules: {
        name: {
          required: true
        },
        phone: {
          required: true,
            usPhoneFormat: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".modalform").serialize(), 
			success: function(html)
			{	$('#m1').modal('toggle');	
				$('#ths').modal('toggle');
			} 
			}); 
			return false;
		}
	});
    	$(".modalform1").validate({
			rules: {
        name: {
          required: true
        },
        phone: {
          required: true,
            usPhoneFormat: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".modalform1").serialize(), 
			success: function(html)
			{	$('#m2').modal('toggle');	
				$('#ths').modal('toggle');
			} 
			}); 
			return false;
		}
	});
        	$(".modalform2").validate({
			rules: {
        name: {
          required: true
        },
        phone: {
          required: true,
            usPhoneFormat: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".modalform2").serialize(), 
			success: function(html)
			{	$('#m3').modal('toggle');	
				$('#ths').modal('toggle');
			} 
			}); 
			return false;
		}
	});
        	$(".modalform3").validate({
			rules: {
        name: {
          required: true
        },
        phone: {
          required: true,
            usPhoneFormat: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".modalform3").serialize(), 
			success: function(html)
			{	$('#m4').modal('toggle');	
				$('#ths').modal('toggle');
			} 
			}); 
			return false;
		}
	});
        	$(".modalform4").validate({
			rules: {
        name: {
          required: true
        },
        phone: {
          required: true,
            usPhoneFormat: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".modalform4").serialize(), 
			success: function(html)
			{	$('#m5').modal('toggle');	
				$('#ths').modal('toggle');
			} 
			}); 
			return false;
		}
	});
        	$(".modalform5").validate({
			rules: {
        name: {
          required: true
        },
        phone: {
          required: true,
            usPhoneFormat: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".modalform5").serialize(), 
			success: function(html)
			{	$('#m66').modal('toggle');	
				$('#ths').modal('toggle');
			} 
			}); 
			return false;
		}
	});
        	$(".modalform6").validate({
			rules: {
        name: {
          required: true
        },
        phone: {
          required: true,
            usPhoneFormat: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".modalform6").serialize(), 
			success: function(html)
			{	$('#m6').modal('toggle');	
				$('#ths').modal('toggle');
			} 
			}); 
			return false;
		}
	});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots: true,

    animateIn: 'fadeIn',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
    $('.owls').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: false,
    animateIn: 'fadeIn',
        navText: [' ',' '],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});
    $('.otzivs').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    center: true,
    dots: false,
    animateIn: 'zoomIn',
animateOut: 'zoomOut',
        autoHeight:false,
            navText: [' ',' '],
    responsive:{
        0:{
            items:1
        },
        991:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
    $( ".hvs1" ).click(function() {
  $(this).toggleClass('da');
        $( ".hvs2" ).removeClass('da');
$( ".hvs3" ).removeClass('da');
});
        $( ".hvs2" ).click(function() {
  $(this).toggleClass('da');
        $( ".hvs1" ).removeClass('da');
$( ".hvs3" ).removeClass('da');
});
        $( ".hvs3" ).click(function() {
  $(this).toggleClass('da');
        $( ".hvs2" ).removeClass('da');
$( ".hvs1" ).removeClass('da');
});
          $(document).ready(function() {
 
$('.scrollme').click(function(){
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top}, 1000);
        return false; 
});
    
});
});
