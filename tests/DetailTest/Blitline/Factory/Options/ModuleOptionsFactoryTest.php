<?php

namespace DetailTest\Blitline\Factory\Options;

use PHPUnit_Framework_TestCase as TestCase;

use Zend\ServiceManager\ServiceManager;

use Detail\Blitline\Exception;
use Detail\Blitline\Factory\Options\ModuleOptionsFactory;
use Detail\Blitline\Options\ModuleOptions;

class ModuleOptionsFactoryTest extends TestCase
{
    public function testCreateService()
    {
        $moduleOptions = $this->createModuleOptions(array('blitline' => array()));

        $this->assertInstanceOf(ModuleOptions::CLASS, $moduleOptions);
    }

    public function testCreateServiceThrowsExceptionForInvalidConfiguration()
    {
        $this->setExpectedException(Exception\ConfigException::CLASS);
        $this->createModuleOptions();
    }

    protected function createModuleOptions(array $options = array())
    {
        $serviceManager = new ServiceManager();
        $serviceManager->setService('Config', $options);

        $factory = new ModuleOptionsFactory();

        return $factory->createService($serviceManager);
    }
}
