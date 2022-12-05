<?php
set_time_limit(0);
error_reporting(0);
require __DIR__ . '/request.php';
header('Content-Type: application/json');

$request = request('https://animechan.vercel.app/api/random');
$request = json_decode($request, true);
if($request == null) {
    $return = array(
        'apiTimestamp' => time(),
        'apiStatus' => 'error',
        'apiCode' => 500,
        'apiMessage' => 'Internal Server Error'
    );
    
    echo json_encode($return, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
} else {

    $return = array(
        'apiTimestamp' => time(),
        'apiStatus' => 'success',
        'apiCode' => 200,
        'apiResult' => array(
            'anime' => $request['anime'],
            'character' => $request['character'],
            'quote' => $request['quote']
        )
    );
    
    echo json_encode($return, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}


