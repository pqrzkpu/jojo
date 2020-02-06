<?php
    $uri = 'http://api.football-data.org/v2/competitions/';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: ad4c2c9d6df041c0af4722646c000e31';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $competition = json_decode($response);
    $result = json_encode($competition, JSON_PRETTY_PRINT);
    echo($result);
?>