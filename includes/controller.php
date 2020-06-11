<?php

include 'databaseAdaptor.php';

$calendarDB = new DatabaseAdaptor();

// If currently on the homepage, load the single next
// event into the "calendar-container" on index.html
if (isset($_GET['onHomePage'])){

    // An array containing each row in the database.
    // Each row is an object that represents an 
    // individual event.
    $events = $calendarDB->getEvents();

    if (count($events) == 0){
        echo "No upcoming events.";
    } else {
        // send only the first events
        echo json_encode($events[0]);  
    } 
}
