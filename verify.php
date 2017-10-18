<?php
$access_token = 'xt4RdSx+luv5OWHPrl01YZU+RmhNxgFAA4L42GjqQ2YDgNZlUzC6X6wx6LeTam5RYeLKPojqbx8PoM5KmoxmG5b7qA6hmJXBPg042oWRGVO+O3M0UqlL1NSlQNl5oZ7iS/4wDKJ3bPWNf6iI5qwpXgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
