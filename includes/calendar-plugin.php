<?php
$maxEvents = 100;
$minStartDate = date('c');
$calendarId = 'si0lf7jtjtn7la3po4i0gjp1a8@group.calendar.google.com';

//path to the google API on your server
require_once 'google-api-php-client-2.4.1/vendor/autoload.php';

//set environment variable to use your downloaded Service account key
$credentialsPath = '/Applications/MAMP/htdocs/LHSA/includes/lhsa-calendar.json';
putenv("GOOGLE_APPLICATION_CREDENTIALS=" . $credentialsPath);

$scope = 'https://www.googleapis.com/auth/calendar.readonly';

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes($scope);
$service = new Google_Service_Calendar($client);

//options link
//  https://developers.google.com/google-apps/calendar/v3/reference/events/list
$options = array(
    'maxResults' => $maxEvents,
    'orderBy' => 'startTime',
    'singleEvents' => TRUE,
    //UNIX timestamp format
    'timeMin' => $minStartDate,
    //to use a calendar other than the default uncomment and enter the calendar's ID
    //not really needed here since you're using the $calendarId but does pull another calendar and more for completeness
    //'iCalUID' => 'CAL_ID_FROM_GOOGLE_CALENDAR'
);

$results = $service->events->listEvents($calendarId, $options);
?>