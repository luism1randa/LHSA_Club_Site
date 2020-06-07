<?php

include 'databaseAdaptor.php';

$calendarDB = new DatabaseAdaptor();

// An array containing each row in the database.
// Each row is an object that represents an 
// individual event.
$events = $calendarDB->getEvents();
echo json_encode($events[0]);    

