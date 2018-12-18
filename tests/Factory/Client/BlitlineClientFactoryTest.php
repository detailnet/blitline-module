<?php

namespace DetailTest\Blitline\Factory\Options;

use Zend\ServiceManager\Factory\FactoryInterface;

use Detail\Blitline\Client\BlitlineClient;
use Detail\Blitline\Factory\Client\BlitlineClientFactory;
use Detail\Blitline\Job\JobBuilder;
use Detail\Blitline\Options\ModuleOptions;

use DetailTest\Blitline\Factory\FactoryTestCase;

class BlitlineClientFactoryTest extends FactoryTestCase
{
    public function testCreateService()
    {
        $client = $this->createBlitlineClient();

        $this->assertInstanceOf(BlitlineClient::CLASS, $client);
    }

    protected function createFactory(): FactoryInterface
    {
        return new BlitlineClientFactory();
    }

    private function createBlitlineClient(): BlitlineClient
    {
        $moduleOptions = $this->prophesize(ModuleOptions::CLASS);
        $moduleOptions->toArray()->willReturn(['application_id' => 'test-id']);

        $jobBuilder = $this->prophesize(JobBuilder::CLASS);

        $services = $this->getServices();
        $services->get(ModuleOptions::CLASS)->willReturn($moduleOptions->reveal());
        $services->get(JobBuilder::CLASS)->willReturn($jobBuilder->reveal());

        /** @var BlitlineClient $client */
        $client = $this->getFactory()->__invoke($services->reveal(), BlitlineClient::CLASS);

        return $client;
    }
}
