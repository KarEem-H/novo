<?php include "header.php"; 
error_reporting(0);
?>

<body>
    <div id="container" class="cls-container">
        
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3">Account Login</h1>
		                <p>Sign In to your account</p>
		                <p id="errorMsg" class="error-msg"><i class="la la-times-circle"></i> &nbsp;Please fill all the required fields!</p>
		            </div>
		            <form id="login_form">
		                <div class="form-group">
		                    <input type="text" id="admin_name" class="form-control" placeholder="Username" autofocus>
		                </div>
		                <div class="form-group">
		                    <input type="password" id="admin_password" class="form-control" placeholder="Password">
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">Remember me</label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
		            </form>
		        </div>
		
		        <div class="pad-all">
		            <a href="pages-password-reminder.html" class="btn-link mar-rgt">Forgot password ?</a>
		        </div>
		    </div>
		</div>
		<!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
</body>

</html>

<?php include "footer.php" ?>

<script type="text/javascript">
	$("#login_form").submit(function(event){
		    event.preventDefault();

		    $('.error-msg').css('display','none');
		    
		    // GETTING ALL DATA
			var userName = $('#admin_name').val();
			var userPassword = $('#admin_password').val();

			if (userName=="") {
				// ADD ERROR
				$('.error-msg').css('display','block');
				$("#errorMobile").addClass("invalid");
			}
			if (userPassword=="") {
				// ADD ERROR
				$('.error-msg').css('display','block');
				$("#errorPassword").addClass("invalid");
			}
			else {
				login();
			}
		    
		});

 	 	// SUBMIT FUNCTION
    function login() {
    	// GETTING ALL DATA
    	var userName = $('#admin_name').val();
		var userPassword = $('#admin_password').val();

		if (userName!="") {
		        $.ajax({
		            type:"post",
		            url: 'ajax/login.php' ,     // url to the php file to get the response
	             	data:'userName='+ userName+'&userPassword='+ userPassword,
		            //GETTING RESULT AND SETTING TO USERS DROPDOWN
		            success: function(msg) {
		            	// IF ALREADY REGISTERED
						if (msg==0) {
							// ADD ERROR
							$('.error-msg').css('display','block');
							document.getElementById("errorMsg").innerHTML = 'Invalid Username/Password!';
						}
						if(msg==1){
							window.location = "/hybrid";
						}
                        if (msg==2) {
                            // ADD ERROR
                            $('.error-msg').css('display','block');
                            document.getElementById("errorMsg").innerHTML = '<i class="la la-times-circle"></i> &nbsp;Invalid Password!';
                        }
		            }
		        });
		    }
	}
</script>

