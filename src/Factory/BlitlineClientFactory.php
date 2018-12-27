<?php

namespace Detail\Blitline\Factory;

use Interop\Container\ContainerInterface;

use Zend\ServiceManager\Factory\FactoryInterface;

use Detail\Blitline\BlitlineClient;
use Detail\Blitline\Job\JobBuilder;
use Detail\Blitline\Options\ModuleOptions;

class BlitlineClientFactory implements
    FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return BlitlineClient
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var ModuleOptions $moduleOptions */
        $moduleOptions = $container->get(ModuleOptions::CLASS);

        /** @var JobBuilder $jobBuilder */
        $jobBuilder = $container->get(JobBuilder::CLASS);

        return BlitlineClient::factory($moduleOptions->toArray(), $jobBuilder);
    }
}
