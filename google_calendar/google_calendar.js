/**
 * google_calendar.js
 * 
 * This file takes an object from calendar-plugin.php containing details of either the next
 * upcoming event or multiple upcoming events as JSON. Data is assumed to have been parsed
 * already to include a date, time, location, and event description. The data is recieved
 * in the form of keys and values where the key is the data label and the value is the data
 * itself. 
 */

const calendarContainer = document.getElementById('events');
const noEventsContainer = document.getElementById('no-events');

let ajax = new XMLHttpRequest();
ajax.open('GET', 'google_calendar/calendar-plugin.php?nextEvent=true');
ajax.send();

ajax.onreadystatechange = function () {
    if (ajax.readyState === 4 && ajax.status === 200) {

        // An object containing the details for the next event
        let nextEvent = JSON.parse(ajax.responseText);
        console.log(nextEvent);

        if (nextEvent === 'No upcoming events.') {
            noEventsContainer.style.display = 'block';
            noEventsContainer.innerHTML = 'There are currently no upcoming events. Stay tuned for more to come.'
        } else {

            // FIXME: handle all day events
            // FIXME: handle recurring events?

            calendarContainer.style.display = 'grid';

            // Take object parsed from JSON and extract keys and values
            // into an array for easier handling
            const keys = Object.keys(nextEvent);
            const values = Object.values(nextEvent);

            // If event is all-day hide the time container
            // Google calendar does not allow just a start or end time
            // so no need to worry about that case.
            const dayIndex = keys.indexOf('day');
            if (values[dayIndex] === false) {
                document.getElementById('time-container').style.display = 'none';
            }

            for (let i = 0; i < values.length; i++) {

                // If any fields are null don't display data for them
                if (values[i] != null) {
                    const divToChange = document.getElementById(keys[i])
                    divToChange.innerHTML = nextEvent[keys[i]];
                }
            }
        }
    }
};