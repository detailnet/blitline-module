<?php

use Detail\Blitline;
use Detail\Blitline\Factory;

return [
    'service_manager' => [
        'abstract_factories' => [],
        'aliases' => [],
        'invokables' => [
            Blitline\Job\JobBuilder::CLASS => Blitline\Job\JobBuilder::CLASS,
        ],
        'factories' => [
            Blitline\Client\BlitlineClient::CLASS => Factory\Client\BlitlineClientFactory::CLASS,
            Blitline\Options\ModuleOptions::CLASS => Factory\Options\ModuleOptionsFactory::CLASS,
        ],
        'initializers' => [],
        'shared' => [],
    ],
    'blitline' => [],
];
