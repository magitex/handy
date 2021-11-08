$(document).ready(function(){

	var addBlogForm = $("#addblog");

	var validator = addBlogForm.validate({
		
		rules:{
			category_name :{ required : true },
			blog_title :{ required : true },
			blog_image :{ required : true },
			blog_description :{ required : true },
			short :{ required : true },
			created_dtm :{ required : true }
		},
		messages:{
			category_name :{ required : "This field is required" },
			blog_title :{ required : "This field is required" },
			blog_image :{ required : "This field is required" },
			blog_description :{ required : "This field is required" },
			short :{ required : "This field is required" },
			created_dtm :{ required : "This field is required" }
		}
	});
});