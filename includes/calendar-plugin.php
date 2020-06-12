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

// Results format: object['items'][i]['property']
$results = $service->events->listEvents($calendarId, $options);

// Get the the next upcoming event
if(isset($_GET['nextEvent'])){

    if (count($results['items']) == 0){
        echo json_encode('No upcoming events.');
    } else {

        $start = $results['items'][0]['start']['dateTime'];
        $end = $results['items'][0]['end']['dateTime'];
        $dateTime = parseDateTime($start, $end);

        $nextEvent = array(
            'summary' => $results['items'][0]['summary'],
            'month' => $dateTime['month'],
            'day' => $dateTime['day'],
            'start' => $dateTime['startTime'],
            'end' => $datTime['endTime'],
            'location' => $results['items'][0]['location'],
            'description' => $results['items'][0]['description'],
        );

        echo json_encode($nextEvent);
    }   
}

if (isset($_GET['allNextEvents'])){

    // TODO: test

    if (count($results['items']) == 0){
        echo 'No upcoming events.';
    } else {
    
        $eventList = array();
        for ($i=0; $i < count($results['items']); $i++) { 

            $start = $results['items'][$i]['start']['dateTime'];
            $end = $results['items'][$i]['end']['dateTime'];
            $dateTime = parseDateTime($start, $end);

            $event = array(
                'summary' => $results['items'][$i]['summary'],
                'month' => $dateTime['month'],
                'day' => $dateTime['day'],
                'start' => $dateTime['startTime'],
                'end' => $datTime['endTime'],
                'location' => $results['items'][$i]['location'],
                'description' => $results['items'][$i]['description'],
            );

            $eventList[$i] = $event;
        };
    }
}

function parseDateTime($start, $end){
    /**
     * This is a helper function that parses a dateTime in standard format
     * to extract the start time, end time, month, and day.
     * 
     * dateTime format: 2020-06-12T14:30:00-07:00
     * 
     * @param string $start a dateTime input for the start of the event
     * @param string $end a dateTime input for the end of the event
     * 
     * @return array an array containing all the details of the event
     */

    // extract start time
    $startHour = substr($start, 11, 2);
    $startMin = substr($start, 14, 2);

    // convert military start time to standard time
    if ($startHour > 12) {
        $startHour -= 12;
        $startTime = $startHour . ':' . $startMin . 'PM';
    } else {
        $startTime = $startHour . ':' . $startMin . 'AM';
    }

    // extract end time
    $endHour = substr($end, 11, 2);
    $endMin = substr($end, 14, 2);

    // convert military end time to standard time
    if ($endHour > 12) {
        $endHour -= 12;
        $endTime = $endHour . ':' . $endMin . 'PM';
    } else {
        $endTime = $endHour . ':' . $endMin . 'AM';
    }

    // Convert month digit to abbreviation
    $month = substr($start, 5, 2) - 1;
    $monthList = 'JanFebMarAprMayJunJulAugSepOctNovDec';
    $monthAbbrev = substr($monthList, $month * 3, 3);

    // extract two digit date
    $day = substr($start, 8, 2);

    return array (
        'startTime' => $startTime,
        'endTime' => $endTime,
        'month' => $monthAbbrev,
        'day' => $day,
    );
}
?>
