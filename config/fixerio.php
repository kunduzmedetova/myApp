<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Access Key (API Key)
    |--------------------------------------------------------------------------
    |
    | Your Access/API Key is the unique key that is passed into the API base URL's
    | access_key parameter in order to authenticate with the Fixer API.
    |
    */
    'access_key' => env('dce3aacf4345ee36684f6289cc0aa3ea', 'default_key'),
    /*
     |-----------------------------------------------------------------------------
     | Secure connection
     |-----------------------------------------------------------------------------
     |
     | Whether to use secure (https) http connection or not.
     | Please note that fixer.io supports secure connection only for the paid plans.
     | Please change this accordingly.
     |
     */
    'secure' => true,
    /*
     |-----------------------------------------------------------------------------
     | Cache configuration
     |-----------------------------------------------------------------------------
     |
     | Enable/Disable caching for the api requests.
     | If enabled, provide the cache configuration options.
     | Default cache storage will be used.
     |
     */
    'cache' => [
        'enabled' => false,
        'expire_after' => 60, // In minutes
    ]
];
