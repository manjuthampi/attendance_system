<script type="text/javascript" src="jquery_002.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
jQuery.validator.addMethod("notEqual", function(value, element, param) {return this.optional(element) || value != param;}, "Please enter your name");
			$(document).ready(function() {
			$("#register_form").validate({
				submitHandler:function(form) 
				{
					SubmittingForm();
				},
				rules: 
				{
					teacher_name: 
					{
						required: true,
						lettersonly: true			
					},// simple rule, converted to {required:true}
					dob: 
					{
						required: true
					},
					address: 
					{
						required: true,
					    lettersonly: true	
					},
					gender: 
					{
						required: true
					    
					},
					username: 
					{
						required: true	
					},
					password: 
					{
						required: true
					}
					},
					qualification: 
					{
						required: true
					}
			});	
		});	
</script>

<link type="text/css" href="jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="jquery.datepick.js"></script>
<script type="text/javascript">
$(function() {
	$('#t').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script type="text/javascript">
$(function() {
	$('#tt').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>

 


