 function specificationFormProcess()
{
  var newUrlAddress = "./";
  newUrlAddress += (document.specification.faculty.value + "/");
  newUrlAddress += (document.specification.department.value + "/");
  newUrlAddress += ("level-" + document.specification.level.value  + ".html");

  window.location.href = newUrlAddress;
  return false;
}

function fillDepartments(that)
{
	var departmentHTML;
	if( that.value == "FET")
	{
		departmentHTML = "\
		 	<option value='CE'>Computer Engineering</option>\
	      	<option value='EE'>Electrical Engineering</option>";
	}

	document.getElementById("department").innerHTML = departmentHTML;
}

function fillLevels(that)
{
	var allLevels = "\
					<option value='200'>200</option>\
          			<option value='300'>300</option>\
         			<option value='400'>400</option>"

   var levelHTML;
	if( that.value == "CE" || that.value == "EE")
	{
		levelHTML = allLevels;
	}

	document.getElementById("level").innerHTML = levelHTML;
}