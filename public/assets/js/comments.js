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