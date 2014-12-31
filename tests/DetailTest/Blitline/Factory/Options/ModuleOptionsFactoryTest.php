<?php

namespace DetailTest\Blitline\Factory\Options;

use PHPUnit_Framework_TestCase as TestCase;

use Zend\ServiceManager\ServiceManager;

use Detail\Blitline\Factory\Options\ModuleOptionsFactory;

class ModuleOptionsFactoryTest extends TestCase
{
    public function testCreateService()
    {
        $moduleOptions = $this->createModuleOptions(array('blitline' => array()));

        $this->assertInstanceOf('Detail\Blitline\Options\ModuleOptions', $moduleOptions);
    }

    public function testCreateServiceThrowsExceptionForInvalidConfiguration()
    {
        $this->setExpectedException('Detail\Blitline\Exception\ConfigException');
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
