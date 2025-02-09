<?php

$url = "https://core42.us14.list-manage.com/subscribe/post?u=320f2337c9a646c37416e09be&id=aaf43cb157&f_id=0094c2e1f0";

$data = [
    "FNAME" => "Sarafat",
    "LNAME" => "Rabby",
    "EMAIL" => "sarafatlinkedin@gmail.com",
    "PHONE" => "08189841195",
    "COMPANY" => "my",
    "MMERGE7" => "Careers",
    "MMERGE9" => "test",
    "UTM_SOURCE" => "",
    "UTM_MEDIUM" => "",
    "UTM_CMP" => "",
    "UTM_CMPID" => "",
    "UTM_CNT" => "",
    "UTM_TERM" => "",
    "PAGEURL" => "",
    "REFPAGEURL" => "",
    "terms" => "on",
    "b_320f2337c9a646c37416e09be_aaf43cb157" => "",
    "Submit" => "Submit"
];

$options = [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data),  // Encode data as query string
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/x-www-form-urlencoded"
    ]
];

$ch = curl_init();
curl_setopt_array($ch, $options);
$response = curl_exec($ch);
curl_close($ch);

echo $response;