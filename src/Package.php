<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Resource;

use Ixocreate\Application\Service\Configurator\ConfiguratorRegistryInterface;
use Ixocreate\Application\PackageInterface;
use Ixocreate\Application\Service\Registry\ServiceRegistryInterface;
use Ixocreate\ServiceManager\ServiceManagerInterface;
use Ixocreate\Resource\Bootstrap\ResourceBootstrapItem;

final class Package implements PackageInterface
{
    public function configure(ConfiguratorRegistryInterface $configuratorRegistry): void
    {
    }

    public function addServices(ServiceRegistryInterface $serviceRegistry): void
    {
    }

    public function getBootstrapItems(): ?array
    {
        return [
            ResourceBootstrapItem::class,
        ];
    }

    public function getConfigProvider(): ?array
    {
        return null;
    }

    public function boot(ServiceManagerInterface $serviceManager): void
    {
    }

    public function getBootstrapDirectory(): ?string
    {
        return __DIR__ . '/../bootstrap/';
    }

    public function getConfigDirectory(): ?string
    {
        return null;
    }

    public function getDependencies(): ?array
    {
        return null;
    }
}
