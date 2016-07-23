$(document).ready(function(){
	
	$("#formregister").bootstrapValidator({
		live:'enabled',
		submitButtons:'button[id="Submit"]',
		fields:{
			coursename: {
				validators: {
					notEmpty: {
						 message : "course name should be selected"
					}
				}
			},
			date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The date is not a valid'
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