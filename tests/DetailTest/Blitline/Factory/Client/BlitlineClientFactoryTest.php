<?php

namespace DetailTest\Blitline\Factory\Options;

use PHPUnit_Framework_TestCase as TestCase;

use Zend\ServiceManager\ServiceManager;

use Detail\Blitline\Factory\Client\BlitlineClientFactory;

class BlitlineClientFactoryTest extends TestCase
{
    public function testCreateService()
    {
        $client = $this->createBlitlineClient();

        $this->assertInstanceOf('Detail\Blitline\Client\BlitlineClient', $client);
    }

    protected function createBlitlineClient()
    {
        $moduleOptions = $this->getMock('Detail\Blitline\Options\ModuleOptions');
        $moduleOptions
            ->expects($this->any())
            ->method('toArray')
            ->will($this->returnValue(array('application_id' => 'test-id')));

        $jobBuilder = $this->getMock('Detail\Blitline\Job\JobBuilder');

        $serviceManager = new ServiceManager();
        $serviceManager->setService('Detail\Blitline\Options\ModuleOptions', $moduleOptions);
        $serviceManager->setService('Detail\Blitline\Job\JobBuilder', $jobBuilder);

        $factory = new BlitlineClientFactory();

        return $factory->createService($serviceManager);
    }
}
