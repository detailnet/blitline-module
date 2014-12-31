<?php

namespace Detail\Blitline\Factory\Options;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use Detail\Blitline\Exception\ConfigException;
use Detail\Blitline\Options\ModuleOptions;

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     * @return ModuleOptions
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        if (!isset($config['blitline'])) {
            throw new ConfigException('Config for Blitline is not set');
        }

        return new ModuleOptions($config['blitline']);
    }
}
