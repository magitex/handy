

jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".delete", function(){
		var id = $(this).data("userid"),
			hitURL = baseURL + "delete",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { id : id } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Successfully deleted"); }
				else if(data.status = false) { alert("Deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});
	
});
