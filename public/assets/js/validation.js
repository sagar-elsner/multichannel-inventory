 $(document).ready(function(){

			$('#login_form').validate({
				rules:
				{
					email_address:
					{
						required:true,
						email:true,
					},
					password:
					{
						required:true,
						minlength:6,
						

					},
				},
				messages:
				{
					email_address:
					{
						required:'Please enter Email address',
						email:'Please enter valid Email '
					},
					password:
					{
						required:'Please enter password',
						minlength:'Password must be atleast 6 character',
						
						
					}
				},
				submitHandler:function(login_form)
		        {
        		  login_form.submit();//form's click event
        		}

			});
		 });


		 $('#reset_password').validate({
			rules:
			{
				
				password:
				{
					required:true,
					minlength:6,
					passwordStrength:true,

				},
				cpassword:
				{
					required:true,
					minlength:6,
					equalTo:"#password",
				}
			},
			messages:
			{
				password:
				{
					required:'Please enter password',
					minlength:'Password must be atleast 6 character',	
					passwordStrength:'Password must have one special character,digit and one Uppercase alphabet'				
				},
				cpassword:
				{
					required:'Please enter confirm password',
					//minlength:'Confirm Password must be atleast 6 character',
					equalTo:'Password and Confirm Password must be same'						
				}
			},
			submitHandler:function(reset_password)
			{
			  reset_password.submit();//form's click event
			}

		});


			
		
		 $.validator.addMethod('passwordStrength',function (value,element){
    		if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/.test(value))//contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character
    		{
				
     			return true;
    		}
   			else
    		{
      
      			return false;
    		}
  		});
	
		  $('#forgot_password').validate({
			rules:
			{
				email_address:
				{
					required:true,
					email:true,
				},
				
			},
			messages:
			{
				email_address:
				{
					required:'Please enter email address',
					email:'Please enter valid email '
				},
				
			},
			submitHandler:function(forgot_password)
			{
				forgot_password.submit();//form's click event
			}

		});