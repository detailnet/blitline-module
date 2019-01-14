<?php

namespace Detail\Blitline\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var string|null
     */
    protected $applicationId;

    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    public function setApplicationId(string $applicationId): void
    {
        $this->applicationId = $applicationId;
    }
}
