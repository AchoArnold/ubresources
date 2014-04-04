/**
 * Function to add a single row in the GPA table
 */
function addRow(semester)
{
	var rowHTML = '<tr>\
                    <td><input class="form-control" type="text"/></td>\
                    <td><input class="form-control" type="text"/></td>\
                    <td><input class="form-control" type="text" maxlength="1" onkeyup="validate(this,'+semester+')"/></td>\
                    <td>\
                      <select class="form-control" onchange="processGPA('+semester+')">\
                        <option value="-1">--</option>\
                        <option value="4">A</option>\
                        <option value="3.5">B+</option>\
                        <option value="3">B</option>\
                        <option value="2.5">C+</option>\
                        <option value="2">C</option>\
                        <option value="1.5">D+</option>\
                        <option value="1">D</option>\
                        <option value="0">F</option>\
                      </select>\
                    </td>\
                  </tr>';
	$((semester == 1)? "#gpaTable1 tr:last" :  "#gpaTable2 tr:last").after(function() {
		return rowHTML;
	});
}

/**
 * Removes the last class row from the table. numRows1 must be greater than
 * 2. (There must be more than two rows in the table to delete a row.)
 */
function deleteRow( semester)
{
	if (document.getElementById((semester ==1)? "gpaTable1" :  "gpaTable2").rows.length > 2)
	{
		$( (semester ==1)? "#gpaTable1 tr:last" :  "#gpaTable2 tr:last" ).remove();
	}
	else{
		alert("You cant delete the only row");
	}
	processGPA(semester);
}

/**
 * Checks if the correct credit value has been entered
 */
function validate(that, semester)
{
	if(that.value == "");
	else if ( isNaN(that.value) || that.value  == 0)
	{
		alert("Please the credit value you entered was incorrect");
		that.value="";
	}
	processGPA(semester);
}

/**
 * Calculated GPA by using only the rows which have been filled correctly.
 */
function processGPA(semester)
{
	var gpavalue  = (semester ==1)? "gpa1":"gpa2";
	var tableName = (semester ==1)? "gpaTable1": "gpaTable2";
	var gradeSum = 0;
	var creditSum = 0;

	numRow = document.getElementById(tableName).rows.length;
	for (var i = 1; i < numRow; i++	)
	{
		var cell = document.getElementById(tableName).rows[i].cells;
		if( cell[2].children[0].value != "" && cell[3].children[0].value != -1)
		{
			gradeSum += (cell[3].children[0].value * parseFloat(cell[2].children[0].value));
			creditSum += 4 *  (cell[2].children[0].value);
		}

		if(semester == 1)
		{
			document.getElementById('aqqCredit1').value = gradeSum;
			document.getElementById('totalCredit1').value = creditSum;
		}
		else
		{
			document.getElementById('aqqCredit2').value = gradeSum;
			document.getElementById('totalCredit2').value = creditSum;
		}
	}

	var GPA = (gradeSum/creditSum) * 4.00;
	if(isNaN(GPA))
	{
		GPA = 0;
	}
	document.getElementById(gpavalue).value = GPA.toFixed(2);
	processCummulativeGPA()
}


function processCummulativeGPA()
{
	var aqCredit = parseFloat(document.getElementById("aqqCredit1").value)
										+  parseFloat(document.getElementById("aqqCredit2").value);
	var  totalCredit =   parseFloat(document.getElementById("totalCredit1").value )
										+   parseFloat(document.getElementById("totalCredit2").value);

	var GPA = (aqCredit/totalCredit)  * 4.00;
	if (isNaN(GPA))
	{
		GPA = 0.00;
	}
	document.getElementById("cumGpa").value = GPA.toFixed(2);
}