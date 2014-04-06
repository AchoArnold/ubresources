function  confirm_delete(event){
	// For older browsers and IE 
	event=event || window.event;
	var res = window.confirm("Do you want to delete this comment?");
	
	if (res == true)
		return true;
	else{
		event.preventDefault();
	}
}


/**
 * This function toggles the 'Post Comment' button depending to the comment being entered
 * 
 * @param   textarea		The input area whose value determines if the button is disabled or not
 */
function toggle_button(input, button_id) {
	var string = input.value;
	if ( string.length > 1 && (/[^\s]/.test(string)))
	{
		if( (string.length - (string.split( new RegExp( "\\s", "gi" ) ).length-1) ) > 1)
		{
			document.getElementById(button_id).disabled = false;
		}
		else{
			document.getElementById(button_id).disabled = true;
		}
	}
	else
	{
		document.getElementById(button_id).disabled = true;
	}
}

/**
 * This function validates the upload modal
 *
 * @param  [event] The submit event
 */
function validate_upload(event)
{
	// For older browsers and IE
	event=event || window.event;
	var form  = document.getElementById('upload_form');
	var form_inputs = form.getElementsByTagName('input');
	var MarkupHTML  = "";

	for (index = 0; index < form_inputs.length; ++index)
	{
		switch(index) {
			case 1:
				var string = form_inputs[index].value;
				if ( string.length < 3 || !(/[^\s]/.test(string)) ||  (string.length - (string.split( new RegExp( "\\s", "gi" ) ).length - 1) ) < 3 )
				{
					MarkupHTML += "<p>- Your name should be greater than 3 characters</p>";
				}
				break;

			case 3:
				var string = form_inputs[index].value;
				if ( string.length < 1 ||  !(/[^\s]/.test(string)))
				{
					MarkupHTML += "<p>- Invalid file name specified<br/>";
				}
				break;

			case 4:
				if( form_inputs[index].checked == false )
					MarkupHTML += "- 	Please agree to our terms and conditions<br/>";
				break;
		}
	}

	if ( MarkupHTML.length > 0)
	{
	 	MarkupHTML += '</p>';
	 	var formParent = form.parentNode;

	  	if ( document.getElementById('validate_alert') )
	  		formParent.removeChild(document.getElementById('validate_alert'));
	 	
	 	var newDiv = document.createElement("div"); 
	  	newDiv.innerHTML = MarkupHTML;
	  	newDiv.id='validate_alert';
	  	newDiv.classList.add('alert');
	  	newDiv.classList.add('alert-danger');

	  	// add the newly created element and its content into the DOM 
	  	formParent.insertBefore(newDiv, form);
	  	event.preventDefault();
	}
}