<?php

return [
    // This is the "index" of your Route URL you can access in
    // JavaScript like this: "var myAjaxUrl = TYPO3.settings.ajaxUrls['tx_t3cm_wash_your_socks']"
    // It will contain a token and a request to the target will be mide (directly, no extbase!)
    'tx_t3cm_wash_your_socks' => [
        'path' => '/t3cm/ignore/this',
        // the method has 2 parameters: $request and $response
        // the output will be written to $response->getBody()->write(json_encode(['state' => 'still dirty]));
        'target' => 'In2code\\T3cm\\Services\\NotExistingService::notExitingMethod',
    ],
];
