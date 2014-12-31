<?php

return array(
    'service_manager' => array(
        'abstract_factories' => array(
        ),
        'aliases' => array(
        ),
        'invokables' => array(
            'Detail\Blitline\Job\JobBuilder' => 'Detail\Blitline\Job\JobBuilder',
        ),
        'factories' => array(
            'Detail\Blitline\Client\BlitlineClient' => 'Detail\Blitline\Factory\Client\BlitlineClientFactory',
            'Detail\Blitline\Options\ModuleOptions' => 'Detail\Blitline\Factory\Options\ModuleOptionsFactory',
        ),
        'initializers' => array(
        ),
        'shared' => array(
        ),
    ),
    'blitline' => array(
    ),
);
