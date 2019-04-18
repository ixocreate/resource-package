<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Package\Resource\BootstrapItem;

use Ixocreate\Application\BootstrapItemInterface;
use Ixocreate\Application\ConfiguratorInterface;
use Ixocreate\Package\Resource\SubManager\ResourceConfigurator;

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
