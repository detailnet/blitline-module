<?php

namespace DetailTest\Blitline;

use PHPUnit\Framework\TestCase;

use Detail\Blitline\Module;

class ModuleTest extends TestCase
{
    /**
     * @var Module
     */
    protected $module;

    protected function setUp()
    {
        $this->module = new Module();
    }

    public function testModuleProvidesConfig(): void
    {
        $config = $this->module->getConfig();

        $this->assertTrue(is_array($config));
        $this->assertArrayHasKey('blitline', $config);
    }
}
