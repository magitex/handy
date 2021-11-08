$(document).ready(function(){
	
	var editConForm = $("#editCon");
	
	var validator = editConForm.validate({
		
		rules:{
			page_name :{ required : true },
			title :{ required : true },
			// multi_file :{ required : true },
			description :{ required : true }
		},
		messages:{
			page_name :{ required : "This field is required" },
			title :{ required : "This field is required" },
			// multi_file :{ required : "This field is required" },
			description :{ required : "This field is required" },			
		}
	});
});