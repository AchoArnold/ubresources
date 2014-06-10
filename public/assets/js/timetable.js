window.onload = function()
{
	$("#timetable-table tbody tr td").on("click", function(event){
		alert($(this).text());
	});
}