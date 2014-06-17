function generateTimeTable(data){
	var markupHTML = '<table class="timetable table table-bordered" id="timetable-table">\
    <thead>\
      <tr>\
       <th></th>\
       <th>07:00 - 09:00</th>\
       <th>09:00 - 11:00</th>\
       <th>11:00 - 13:00</th>\
       <th>13:00 - 15:00</th>\
       <th>15:00 - 17:00</th>\
       <th>17:00 - 19:00</th>\
     </tr>\
    </thead>\
    <tbody>\
       ' + generateTimeTableRows(data) +'\
     </tbody>\
   </table>';

   $('#timetable-section').html(markupHTML);

   $("#timetable-table tbody tr td").on("click", function(event){
		alert($(this).text());
	});

}


function displayEntry(data,day, time)
{
	var markupHTML = ''
	for (var i = 0; i < data.length; i++) {
		if (data[i].day == day  && data[i].start_at == time)
			markupHTML +=  data[i].short_name  + '<br/>' + obj[i].venue;
	}
	return markupHTML;
}

function generateTimeTableRows(data)
{
    var markupHTML ='\
    <tr>\
       <th>Monday</th>\
       <td>\
        ' + displayEntry(data, 1,"07:00:00") + '\
       </td>\
      <td>\
        ' + displayEntry(data,1, "09:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,1, "11:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,1, "13:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,1, "15:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,1, "17:00:00") + '\
       </td>\
     </tr>\
     <tr>\
       <th>Tuesday</th>\
        <td>\
        ' + displayEntry(data, 2,"07:00:00") + '\
       </td>\
      <td>\
        ' + displayEntry(data,2, "09:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,2, "11:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,2, "13:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,2, "15:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,2, "17:00:00") + '\
       </td>\
     </tr>\
     <tr>\
       <th>Wednesday</th>\
       <td>\
        ' + displayEntry(data,3,"07:00:00") + '\
       </td>\
      <td>\
        ' + displayEntry(data,3, "09:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,3, "11:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,3, "13:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,3, "15:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,3, "17:00:00") + '\
       </td>\
     </tr>\
     <tr>\
       <th>Thursday</th>\
       <td>\
        ' + displayEntry(data,4,"07:00:00") + '\
       </td>\
      <td>\
        ' + displayEntry(data,4, "09:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,4, "11:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,4, "13:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,4, "15:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,4, "17:00:00") + '\
       </td>\
     </tr>\
     <tr>\
       <th>Friday</th>\
       <td>\
        ' + displayEntry(data,5,"07:00:00") + '\
       </td>\
      <td>\
        ' + displayEntry(data,5, "09:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,5, "11:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,5, "13:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,5, "15:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,5, "17:00:00") + '\
       </td>\
     </tr>\
     <tr>\
       <th>Saturday</th>\
       <td>\
        ' + displayEntry(data,6,"07:00:00") + '\
       </td>\
      <td>\
        ' + displayEntry(data,6, "09:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,6, "11:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,6, "13:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,6, "15:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,6, "17:00:00") + '\
       </td>\
     </tr>\
     <tr>\
       <th>Sunday</th>\
       <td>\
        ' + displayEntry(data,7,"07:00:00") + '\
       </td>\
      <td>\
        ' + displayEntry(data,7, "09:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,7, "11:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,7, "13:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,7, "15:00:00") + '\
       </td>\
       <td>\
        ' + displayEntry(data,7, "17:00:00") + '\
       </td>\
     </tr>';

     return markupHTML;
}