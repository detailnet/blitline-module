<?php

namespace DetailTest\Blitline\Factory\Options;

use PHPUnit_Framework_TestCase as TestCase;

use Zend\ServiceManager\ServiceManager;

use Detail\Blitline\Client\BlitlineClient;
use Detail\Blitline\Factory\Client\BlitlineClientFactory;
use Detail\Blitline\Job\JobBuilder;
use Detail\Blitline\Options\ModuleOptions;

class BlitlineClientFactoryTest extends TestCase
{
    public function testCreateService()
    {
        $client = $this->createBlitlineClient();

        $this->assertInstanceOf(BlitlineClient::CLASS, $client);
    }

    protected function createBlitlineClient()
    {
        $moduleOptions = $this->getMock(ModuleOptions::CLASS);
        $moduleOptions
            ->expects($this->any())
            ->method('toArray')
            ->will($this->returnValue(array('application_id' => 'test-id')));

        $jobBuilder = $this->getMock(JobBuilder::CLASS);

        $serviceManager = new ServiceManager();
        $serviceManager->setService(ModuleOptions::CLASS, $moduleOptions);
        $serviceManager->setService(JobBuilder::CLASS, $jobBuilder);

        $factory = new BlitlineClientFactory();

        return $factory->createService($serviceManager);
    }
}
