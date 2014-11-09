$(document).ready(function() {

// Function to sum time 
 function addTime()
            {
                if (arguments.length < 2)
                {
                    if (arguments.length == 1 && isFormattedDate(arguments[0])) return arguments[0];
                    else return false;
                }

                var time1Split, time2Split, totalHours, totalMinutes;
                if (isFormattedDate(arguments[0])) var totalTime = arguments[0];
                else return false;

                for (var i = 1; i < arguments.length; i++)
                {
                    // Add them up
                    time1Split = totalTime.split(':');
                    time2Split = arguments[i].split(':');

                    totalHours = parseInt(time1Split[0]) + parseInt(time2Split[0]);
                    totalMinutes = parseInt(time1Split[1]) + parseInt(time2Split[1]);

                    // If total minutes is more than 59, then convert to hours and minutes
                    if (totalMinutes > 59)
                    {
                        totalHours += Math.floor(totalMinutes / 60);
                        totalMinutes = totalMinutes % 60;
                    }

                    totalTime = totalHours + ':' + padWithZeros(totalMinutes);
                }

                return totalTime;
            }

            function isFormattedDate(date)
            {
                var splitDate = date.split(':');
                if (splitDate.length == 2 && (parseInt(splitDate[0]) + '').length <= 2 && (parseInt(splitDate[1]) + '').length <= 2) return true;
                else return false;
            }

            function padWithZeros(number)
            {
                var lengthOfNumber = (parseInt(number) + '').length;
                if (lengthOfNumber == 2) return number;
                else if (lengthOfNumber == 1) return '0' + number;
                else if (lengthOfNumber == 0) return '00';
                else return false;
}






//Gernerate a date foramt
    var date =  new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    //var day = date.getDayName(1);
    
    //Week Days
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    
    // We Are Going to structure an array from our json data then putting it an event array
    $.getJSON("/api/courses/13", function(data){
       //An Array to hold the days number
       var days = [];
    for (var i=0, len=data.length; i < len; i++) {
       days[i] = data[i]['day'];
       //Creating a new start column
       data[i]['start'] = y +"-"+ (m+1) +"-"+ Date.parse(weekday[days[i]]).getDate() +"T"+data[i]['start_time'];
       //Calculating end time
       end = addTime(data[i]['start_time'].substr(0, 5), data[i]['duration'].substr(0, 5));
       //Creatign a new end column
       data[i]['end'] = y +"-"+ (m+1) +"-"+ Date.parse(weekday[days[i]]).getDate() +"T"+end;
    }
    
    


//Rendering the calendar
$('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            firstDay: 0,
            lang: "fr",
            height: 550,
            
            defaultView: 'agendaWeek',
            
            events:data,
            eventColor: '#4ccf72'

        });














    
});
   


    });
