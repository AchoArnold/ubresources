var numRows = 6;
var numRows1 = 6;

/**
 * Function to add a single row in the GPA table
 */
function addRow(semester){
	if(semester == 1)
	{
		table = "#gpaTable tr:last";
		numRows++;
	}
	else
	{
		table = "#gpaTable1 tr:last";
		numRows1++;
	}

	$(table).after(function() {
		var str = "<tr>";
		str += $("#newRow").html();
		str += "</tr>";
		return str;
	});
}

/**
 * Removes the last class row from the table. numRows must be greater than
 * 2. (There must be more than two rows in the table to delete a row.)
 */
function deleteRow( semester)
{
	if(semester == 1)
	{
		var gpatable = "#gpaTable tr:last";
		numRows--;
	}
	else
	{
		gpatable = "#gpaTable1 tr:last";
		numRows1--;
	}

	if (numRows1 > 2 && numRows >2)
	{
		$(gpatable).remove();
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
	if(semester == 1)
	{
		var numRow = numRows;
		var gpavalue  = "gpa1";
		var tableName = "gpaTable";
	}
	else
	{
		var numRow = numRows1;
		var gpavalue = "gpa2";
		var tableName = "gpaTable1";
	}

	var gradeSum = 0;
	var creditSum = 0;

	for (var i = 1; i < numRow; i++	)
	{
		var cell = document.getElementById(tableName).rows[i].cells;

		if( cell[2].children[0].value == "" || cell[3].children[0].value == -1);
		else
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

	//ert(" Gradesum = " +gradeSum + "\n CreditSum = " +creditSum);

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
	//alert(document.getElementById("aqqCredit1").value);
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