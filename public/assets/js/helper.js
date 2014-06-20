/**
* Converts a day number to a string.
*
* @method dayOfWeekAsString
* @param {number} dayIndex
* @return {Number} Returns day as number
*/
function dayOfWeekAsString(dayIndex)
{
 	return ["","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"][dayIndex];
}

function padString(string, length, padString)
{
	var padding =  padString || "0";
   while (string.length < length)
       string = padding + string;
   return string;
}

$(function(){
	var opts = {
		lines: 17, // The number of lines to draw
		length: 40, // The length of each line
		width: 10, // The line thickness
		radius: 49, // The radius of the inner circle
		speed: 0.7, // Rounds per second
		trail: 60, // Afterglow percentage
		shadow: true, // Whether to render a shadow
		hwaccel: false, // Whether to use hardware acceleration
	};

	$('.js-spinner').each( function(){
		new Spinner(opts).spin(this);
	});
});