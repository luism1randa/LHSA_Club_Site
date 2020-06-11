<?php
$maxEvents = 20;
$minStartDate = date('c');

// LHSA "Events" Calendar (lhsa.ua@gmail.com)
$calendarId = 'si0lf7jtjtn7la3po4i0gjp1a8@group.calendar.google.com';

// path to the google API on your server
require_once 'google-api-php-client-2.4.1/vendor/autoload.php';

// set environment variable to use your downloaded Service account key
$credentialsPath = '/Applications/MAMP/htdocs/LHSA/includes/lhsa-calendar.json';
putenv("GOOGLE_APPLICATION_CREDENTIALS=" . $credentialsPath);

$scope = 'https://www.googleapis.com/auth/calendar.readonly';

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes($scope);
$service = new Google_Service_Calendar($client);

// Options link:
// https://developers.google.com/google-apps/calendar/v3/reference/events/list
$options = array(
    'maxResults' => $maxEvents,
    'orderBy' => 'startTime',
    'singleEvents' => TRUE,

    //UNIX timestamp format
    'timeMin' => $minStartDate,
);

// Results format:
// array['items'][i]['property']
$results = $service->events->listEvents($calendarId, $options);

// TODO: check base case of no upcoming events

// TODO: add queries for single event and multiple events

// Get the the next upcoming event
$nextEvent = array(
    'summary' => $results['items'][0]['summary'],
    'start' => $results['items'][0]['start']['dateTime'],
    'end' => $results['items'][0]['end']['dateTime'],
    'location' => $results['items'][0]['location'],
    'description' => $results['items'][0]['description'],
);

$eventList = array();

// Get all upcoming events
for ($i=0; $i < count($results['items']); $i++) { 
    $event = array(
        'summary' => $results['items'][$i]['summary'],
        'start' => $results['items'][$i]['start']['dateTime'],
        'end' => $results['items'][$i]['end']['dateTime'],
        'location' => $results['items'][$i]['location'],
        'description' => $results['items'][$i]['description'],
    );
    $eventList[$i] = $event;
};

print_r($nextEvent);

?>