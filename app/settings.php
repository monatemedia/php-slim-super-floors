<?php

use DI\Container;

return function (Container $container) {
    $container->set('settings', [
        'displayErrorDetails' => true, // Fixed typo
        'logErrors' => true,
        'logErrorDetails' => true,
    ]);
};
