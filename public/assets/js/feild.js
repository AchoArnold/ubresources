function fill_faculty()
{
	var markupHTML = "";
   for(var i = 0; i < obj.length; i ++)
   {
   	markupHTML += "<option value="+ obj[i][0]+">"+ obj[i][1] + "</option>";
	}

	document.getElementById('faculty').innerHTML = markupHTML;
	faculty.innerHTML = markupHTML;
	var 	selected_faculty = faculty.options[faculty.selectedIndex].value;
	fill_department( selected_faculty );
}

function fill_department( faculty_id )
{
  	var markupHTML = "";
	for(var i = 0; i < obj.length; i ++)
	{
	 	if (obj[i][0] == faculty_id)
	 	{
	 		for (var j = 0; j < obj[i][2].length; j++)
	 		{
	 			markupHTML += "<option value="+ obj[i][2][j][0]+">"+ obj[i][2][j][1] + "</option>";
	 		}
	 		break;
	 	}
	}

	var department = document.getElementById('department')

	department.innerHTML = markupHTML;
	var 	selected_department = department.options[department.selectedIndex].value;
	fill_level( selected_department );
}

function fill_level( department_id )
{
	var markupHTML = "";
	var filled = false;
	for(var i = 0; i < obj.length && !filled ; i ++)
	{
	 	for (var j = 0; j < obj[i][2].length; j++)
	 	{
	 		if( obj[i][2][j][0] == department_id)
	 		{
	 			for(var k =0; k < obj[i][2][j][2].length; k++)
	 			{
	 				markupHTML += "<option value="+ obj[i][2][j][2][k]+">"+ obj[i][2][j][2][k] + "</option>";
	 			}
	 			break;
	 			filled= true;
	 		}
	 	}
	}

	document.getElementById('level').innerHTML = markupHTML;
}