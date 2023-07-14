<?php

return [
    'url'      => [
        'base'   => env('SMS_URL'),
        'params' => [
            'text' => env('SMS_TEXT')
        ],
    ],
    'time-out' => env('SMS_TIMEOUT_FOR_USER_IN_SECONDS')
];
 