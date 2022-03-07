jQuery(function($) {
	//contact.html
	//contact.html
	var formContactForm = $('#book-appointment');
	if (formContactForm.length){
		formContactForm.validate({
			rules: {
				name: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
					minlength: 9
				},
				service: {
					required: true
				}
			},
			
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					type:"POST",
					data: $(form).serialize(),
					url:"thank-you.php",
					success: function() {
						$('#success').show();
						formContactForm.each(function(){
							this.reset();
						});
					},
					error: function() {
						formContactForm.fadeTo( "slow", 1, function() {
							// $('#error').fadeIn();
							alert('Error');
						});
					}
				});
			}
		});
	};
	//newsletterform
	var subscribeform = $('#subscribeform');
	if (subscribeform.length){
		subscribeform.validate({
			rules: {
				email: {
					required: true,
					email: true
				}
			},
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					type:"POST",
					data: $(form).serialize(),
					url:"external/form/newsletter-form.php",
					success: function() {
						  $('#success').fadeIn();
				subscribeform.each(function(){this.reset();});
					},
					error: function() {
						subscribeform.fadeTo( "slow", 1, function() {
							$('#error').fadeIn();
						});
					}
				});
			}
		});
	};
	//jsFormMakeAppointment
	var formjsFormMakeAppointment = $('#contact-form');
	if (formjsFormMakeAppointment.length){
		formjsFormMakeAppointment.validate({
			rules: {
				name: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
					minlength: 9
				},
				message: {
					required: true,
				}
			},
			messages: {
				name: {
					required: "Please enter your name",
					minlength: "Your name must consist of at least 2 characters"
				},
				email: {
					required: "Please enter your email"
				},
				phone: {
					required: "Please enter your phone"
				},
				message: {
					required: "Please enter your message"
				}
			},
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					type:"POST",
					data: $(form).serialize(),
					url:"form/contact-form.php",
					success: function(){
						$('#success').show();
						$('.form-modal').hide();
						formjsFormMakeAppointment.each(function(){this.reset();});
					},
					error: function() {
						formjsFormMakeAppointment.fadeTo( "slow", 1, function(){
							$('#error').fadeIn();
							$('.form-modal').hide();
						});
					}
				});
			}
		});
	};
	//contact.html
	var formCommentForm = $('#orderform');
	if (formCommentForm.length){
		formCommentForm.validate({
			rules: {
				name: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				name: {
					required: "Please enter your name",
					minlength: "Your name must consist of at least 2 characters"
				},
				email: {
					required: "Please enter your email"
				}
			},
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					type:"POST",
					data: $(form).serialize(),
					url:"external/form/comment-form.php",
					success: function() {
						$('#success').fadeIn();
						formCommentForm.each(function(){
							this.reset();
						});
					},
					error: function() {
						formCommentForm.fadeTo( "slow", 1, function() {
							$('#error').fadeIn();
						});
					}
				});
			}
		});
	};
});