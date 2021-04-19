
$(document).ready(function(){

	$("#change_password").validate(
	{
			rules:
			{
				
				currentpassword:
				{
					required:true,
					minlength:6,

				},
				newpassword:
				{
					required:true,
					minlength:6,
					passwordStrength:true,
				},
				confirmpassword:
				{
					required:true,
					//minlength:6,
					equalTo:"#newpassword",
				}
			},
			messages:
			{
				currentpassword:
				{
					required:'Please enter current password',
					minlength:'Password must be atleast 6 character',	
								
				},
				newpassword:
				{
					required:'Please enter new password',
					minlength:'New Password must be atleast 6 character',
					passwordStrength:'Password must have one special character,digit and one Uppercase alphabet',	
											
				},
				confirmpassword:
				{
					required:'Please enter confirm password',
					equalTo:'Confirm password and New Password must be same'
				}
			},
			submitHandler:function(change_password)
			{
			  change_password.submit();
			}

		});
			
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
	



