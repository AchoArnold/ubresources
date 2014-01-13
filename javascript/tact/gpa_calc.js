var numRows = 6;

/**
 * Function to add a single row in the GPA table
 */
function addRow(){
	$("#gpaTable tr:last").after(function() {
		var str = "<tr>";
		str += $("#newRow").html();
		str += "</tr>";
		return str;
	});
	numRows++;
}

/**
 * Removes the last class row from the table. numRows must be greater than
 * 2. (There must be more than two rows in the table to delete a row.)
 */
function deleteRow()
{
	if (numRows > 2)
	{
		$("#gpaTable tr:last").remove();
		numRows--;
	}
	else{
		alert("You cant delete the only row");
	}
	processGPA();
}

/**
 * Checks if the correct credit value has been entered
 */
function validate(that)
{
	if(that.value == "");
	else if ( isNaN(that.value) || that.value  == 0) 
	{
		alert("Please the credit value you entered was incorrect");
		that.value="";
	}
	processGPA();
}

/**
 * Calculated GPA by using only the rows which have been filled correctly.
 */
function processGPA()
{
	var gradeSum = 0;
	var creditSum = 0;
	
	for (var i = 1; i < numRows; i++	)
	{
		var cell = document.getElementById('gpaTable').rows[i].cells;

		if( cell[2].children[0].value == "" || cell[3].children[0].value == -1);
		else
		{
			gradeSum += (cell[3].children[0].value * parseFloat(cell[2].children[0].value));
			creditSum +=  parseFloat(cell[2].children[0].value);
		}
	}

	var GPA = gradeSum/creditSum;
	if(isNaN(GPA))
	{
		GPA = 0;
	}
	document.getElementById('currentGPA').value = GPA.toFixed(2);
}