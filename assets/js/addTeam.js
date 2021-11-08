$(document).ready(function(){
	var addTeamForm = $("#addTeam");

	var validator = addTeamForm.validate({
		
		rules:{
			team_name :{ required : true },
			designation :{ required : true }
		},
		messages:{
			team_name :{ required : "This field is required" },
			designation :{ required : "This field is required" }
		}
	});
});