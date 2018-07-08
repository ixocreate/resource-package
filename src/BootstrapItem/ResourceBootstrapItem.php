<?php
declare(strict_types=1);

namespace KiwiSuite\Resource\BootstrapItem;

use KiwiSuite\Contract\Application\BootstrapItemInterface;
use KiwiSuite\Contract\Application\ConfiguratorInterface;
use KiwiSuite\Resource\SubManager\ResourceConfigurator;

final class ResourceBootstrapItem implements BootstrapItemInterface
{
    /**
     * @return mixed
     */
    public function getConfigurator(): ConfiguratorInterface
    {
        return new ResourceConfigurator();
    }

    /**
     * @return string
     */
    public function getVariableName(): string
    {
        return 'resource';
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return 'resource.php';
    }
}
