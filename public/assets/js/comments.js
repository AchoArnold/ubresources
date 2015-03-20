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
	remove_validate_alert(form.parentNode)
	if ( MarkupHTML.length > 0)
	{
		event.preventDefault();
	 	MarkupHTML += '</p>';
	 	create_alert_div(form, MarkupHTML);
	}
}

function validate_join(event)
{
	// For older browsers and IE
	event = event || window.event;
	var form  = document.getElementById('join_form');
	var form_inputs = form.getElementsByTagName('input');
	var MarkupHTML  = "";

	for (index = 0; index < form_inputs.length; ++index)
	{
		var string = form_inputs[index].value;
		switch(index) {
			case 1:
				var username = /\w+/;
				if (!username.test(string) || string.length < 4 )
					MarkupHTML += "- Invalid username specified<br/>";
				break;

			case 2:
				var email = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
				if (!email.test(string))
					MarkupHTML += "- Email entered is invalid<br/>"
				break;

			case 3:
				if(string.length < 6)
					MarkupHTML += "- Password must be greater than 6 characters<br/>";
				else
				{
					var password = /[a-zA-Z0-9]+/;
					if ( !password.test(string)  || string.length < 6)
						MarkupHTML += "- Invalid password entered<br/>";
				}
				break;

			case 4:
				if(string != form_inputs[index-1].value)
					MarkupHTML += "- Sorry the two passwords don't match<br/>";
				break;
			case 5:
				if( form_inputs[index].checked == false )
					MarkupHTML += "- 	Please agree to our terms and conditions<br/>";
				break;
		}
	}
	remove_validate_alert(form.parentNode)
	if ( MarkupHTML.length > 0)
	{
		event.preventDefault();
	 	create_alert_div(form, MarkupHTML);
	}
}

function validate_change_password(event)
{
	// For older browsers and IE
	event = event || window.event;
	var form  = document.getElementById('change_password');
	var form_inputs = form.getElementsByTagName('input');
	var MarkupHTML  = "";

	for (index = 0; index < form_inputs.length; ++index)
	{
		switch(index)
		{
			case 2:
				if(form_inputs[index].value.length < 6)
					MarkupHTML += "- Password must be greater than 6 characters<br/>";
				else
				{
					var password = /[a-zA-Z0-9]+/;
					if ( !password.test(form_inputs[index].value)  || form_inputs[index].value.length < 6)
						MarkupHTML += "- Invalid password entered<br/>";
				}
				break;
			case 3:
				if(form_inputs[index].value != form_inputs[index-1].value)
					MarkupHTML += "- Sorry the two passwords don't match<br/>";
				break;
		}
	}

	remove_validate_alert(form.parentNode)
	if ( MarkupHTML.length > 0)
	{
		event.preventDefault();
	 	create_alert_div(form, MarkupHTML);
	}
}



function create_alert_div(sibling, contentHTML)
{
	var nodeParent = sibling.parentNode;
 	var newDiv = document.createElement("div");
  	newDiv.innerHTML = contentHTML;
  	newDiv.id='validate_alert';
  	newDiv.classList.add('alert');
  	newDiv.classList.add('alert-danger');

  	// add the newly created element and its content into the DOM
  	nodeParent.insertBefore(newDiv, sibling);
}

function remove_validate_alert(parent)
{
	if ( document.getElementById('validate_alert') )
  		parent.removeChild(document.getElementById('validate_alert'));
}


function validate_reset_password(event)
{
	// For older browsers and IE
	event = event || window.event;
	var form  = document.getElementById('change_password');
	var form_inputs = form.getElementsByTagName('input');
	var MarkupHTML  = "";

	for (index = 0; index < form_inputs.length; ++index)
	{
		switch(index)
		{
			case 3:
				if(form_inputs[index].value.length < 6)
					MarkupHTML += "- Password must be greater than 6 characters<br/>";
				else
				{
					var password = /[a-zA-Z0-9]+/;
					if ( !password.test(form_inputs[index].value)  || form_inputs[index].value.length < 6)
						MarkupHTML += "- Invalid password entered<br/>";
				}
				break;
			case 4:
				if(form_inputs[index].value != form_inputs[index-1].value)
					MarkupHTML += "- Sorry the two passwords don't match<br/>";
				break;
		}
	}

	remove_validate_alert(form.parentNode)
	if ( MarkupHTML.length > 0)
	{
		event.preventDefault();
	 	create_alert_div(form, MarkupHTML);
	}
}