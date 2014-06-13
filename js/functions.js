//validating textboxes if they are emtpy
function text_box_validator(){
	if(text_form.text_name.value == ""){
		//display an alert box
		alert("Please Fill In The TextField.");
		
		//set cursor in the textfield
		text_form.text_name.focus();
		
		//return false to stop further processing
		return (false);
	}
	
	//if the name is not null continue processing
	return (true);
}