(function ($) {		
	$(document).ready(function() {
	/*	var fullurl = window.location.href; 

		console.log('dd');
		$("#webform-submission-contact-node-115-add-form .form-submit").click(function (e) {
    //  e.preventDefault();
			var fName = $(" input[name='name']").val();
			var email = $(" input[name='email']").val();
			var Mobile = $(" input[name='your_phone_number']").val();
			var message = $(" #edit-message").val();
			var title = $(" input[name='category']").val();
			//var captch  = $('.js-form-item-captcha-response .error').val();
      
      var statusid = 0;
    $('#webform-submission-contact-node-115-add-form .required').each(function(){
      console.log($(this).val());
        if( $(this).val() === "" ){
          statusid = 1;
          alert('Please check input required fields.');
          return false;
        }
    });
    
   
    if(IsEmail(email) == 'false'){
      //$(" input[name='email']").show();
      alert('Please check Email ID.');
      return false;
    }
        
    var mob = Mobile.length;
    
   if(mob != '' && mob < 10){
    //$(" input[name='email']").show();
    alert('Please check mobile number.');
    return false;
  }
			//var title = $(".wpcf7-form .title-single .title h1").text();
						
			// console.log(captch);
			 console.log(email);
			 console.log(statusid);
			 console.log(mob);
		
			if(mob >= 10 && statusid == 0) {
				$.ajax({
					url: 'https://sas.c/asian-form-leads-data/24',
						 data: { 
						 	name : fName,
							email : email,
							phone : Mobile,
							message : message,
							formID : 24,
							formName : 'Net ( '+ title + ' )' 
						 },
						  type: "POST",
						  dataType: "jsonp",
						  statusCode: {
							  0: function () {
								  console.log('Thanks')
							  },
							  200: function () {
								  console.log('Thanks')
							  }
						  }
				   });
				}
			});
		
    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
          return false;
        }else{
          return true;
        }
    }
		*/
	});
})(jQuery);