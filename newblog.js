$(document).ready(function() {
	function validateEditor() {
		$("#newblog").bootstrapValidator('revalidateField','content');
	};
    $('#newblog').bootstrapValidator({
            framework: 'bootstrap',
			excluded: [':disabled'],	
            fields: {
                title: {
                    validators: {
                        notEmpty: {
                            message: 'The title is required and cannot be empty'
                        }
                    }
				},
                content: {
                    validators: {
                        callback: {
                            message: 'The content is required and cannot be empty',
                            callback: function(value, validator, $field) {
                                var code = $('[name="content"]').summernote('code');
                                // <p><br></p> is code generated by Summernote for empty content
                                return (code !== '' && code !== '<p><br></p>');
                            }
                        }
                    }
                }
            }
        })
        .find('[name="content"]')
            .summernote({
                height: 200
            })
});
