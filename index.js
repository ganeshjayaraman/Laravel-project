$(document).ready(function(){
	
	$("#form").bootstrapValidator({
		live:'enabled',
		submitButtons:'button[id="Submit"]',
		fields:{
			name: {
				validators: {
					notEmpty: {
						 message : "name is not valid"
					}
				}
			},
			address: {
				validators: {
					notEmpty: {
						 message : "Address is not valid"
					}
				}
			},
			email: {
				validators: {
					emailAddress: {
						 message : "Mail id is not valid"
					}
				}
			},
			state: {
				validators: {
					notEmpty: {
						 message : "state is not valid"
					}
				}
			},
			country: {
				validators: {
					notEmpty: {
						 message : "Country is not valid"
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
			},
			cpassword: {
				validators: {
					notEmpty: {
						 message : "confirm password is not valid"
					},
					stringLength: {
						min: 3,
						max: 18,
						message: "the password should be 3 - 18 characters long"
					},
					identical: {
						field: 'password',
						message: 'The password and its confirm are not the same'
					},
					different: {
						field: 'name',
						message: 'The password can\'t be the same as username'
					}
				}
			},
			studentstate: {
				validators: {
					notEmpty: {
						 message : "Select anyone"
					}
				}
			},
			college: {
				validators: {
					notEmpty: {
						 message : "Enter School/college name"
					}
				}
			},
			coursename: {
				validators: {
					notEmpty: {
						 message : "course name is not valid"
					}
				}
			},
			
			mobile: {
				validators: {
					notEmpty: {
						 message : "mobile is not valid"
					},
					numeric: {
						 message : "mobile should be a number"
					}
				}
			}
		}
	});

});