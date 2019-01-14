<?php

namespace DetailTest\Blitline\Options;

use Detail\Blitline\Options\ModuleOptions;

class ModuleOptionsTest extends OptionsTestCase
{
    /**
     * @var ModuleOptions
     */
    protected $options;

    protected function setUp()
    {
        $this->options = $this->getOptions(
            ModuleOptions::CLASS,
            [
                'getApplicationId',
                'setApplicationId',
            ]
        );
    }

    public function testApplicationIdCanBeSet(): void
    {
        $applicationId = 'test-id';

        $this->assertNull($this->options->getApplicationId());

        $this->options->setApplicationId($applicationId);

        $this->assertEquals($applicationId, $this->options->getApplicationId());
    }
}
