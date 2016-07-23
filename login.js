$(document).ready(function(){
	
	$("#loginform").bootstrapValidator({
		live:'enabled',
		submitButtons:'button[id="Submit"]',
		fields:{
			email: {
				validators: {
					emailAddress: {
						 message : "Mail id is not valid"
					}
				}
			},
			password: {
				validators: {
					notEmpty: {
						 message : "password is not valid"
					},
					stringLength: {
						min: 6,
						max: 15,
						message: "the password should be 6 - 15 characters long"
					}
				}
			}
		}
	});

});