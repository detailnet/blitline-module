<?php

namespace Detail\Blitline\Factory\Client;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use Detail\Blitline\Client\BlitlineClient;

class BlitlineClientFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     * @return BlitlineClient
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var \Detail\Blitline\Options\ModuleOptions $moduleOptions */
        $moduleOptions = $serviceLocator->get('Detail\Blitline\Options\ModuleOptions');

        /** @var \Detail\Blitline\Job\JobBuilder $jobBuilder */
        $jobBuilder = $serviceLocator->get('Detail\Blitline\Job\JobBuilder');

        return BlitlineClient::factory($moduleOptions->toArray(), $jobBuilder);
    }
}
