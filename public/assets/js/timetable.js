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

   $('#timetable-section').fadeOut(400, function (){
      $(this).html(markupHTML);
      $(this).fadeIn();
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
    var markupHTML = "";
    for (var i = 1; i < 8; i++)
    {
        markupHTML+= '<tr><th>'+dayOfWeekAsString(i)+'</th>';

        for (var j = 7; j < 19; j+=2)
        {
          markupHTML+= '<td>'+ displayEntry(data, i, padString(String(j),2)+":00:00") + '</td>';
        }

        markupHTML+= '</tr>';
    }
    return markupHTML;
}


/* Handlers */
$(document).on("click", ".timetable tbody td", function(event) {
  //alert($(this).text());
});