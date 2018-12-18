<?php

namespace DetailTest\Blitline\Factory\Options;

use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Factory\FactoryInterface;

use Detail\Blitline\Factory\Options\ModuleOptionsFactory;
use Detail\Blitline\Options\ModuleOptions;

use DetailTest\Blitline\Factory\FactoryTestCase;

class ModuleOptionsFactoryTest extends FactoryTestCase
{
    public function testCreateService()
    {
        $moduleOptions = $this->createModuleOptions(['blitline' => []]);

        $this->assertInstanceOf(ModuleOptions::CLASS, $moduleOptions);
    }

    public function testCreateServiceThrowsExceptionForInvalidConfiguration()
    {
        $this->expectException(ServiceNotCreatedException::CLASS);
        $this->createModuleOptions();
    }

    protected function createModuleOptions(array $options = []): ModuleOptions
    {
        $services = $this->getServices();
        $services->get('Config')->willReturn($options);

        /** @var ModuleOptions $moduleOptions */
        $moduleOptions = $this->getFactory()->__invoke($services->reveal(), ModuleOptions::CLASS);

        return $moduleOptions;
    }

    protected function createFactory(): FactoryInterface
    {
        return new ModuleOptionsFactory();
    }
}
