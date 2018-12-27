<?php
declare(strict_types=1);

namespace Ixocreate\Resource;

use Ixocreate\Contract\Application\ConfiguratorRegistryInterface;
use Ixocreate\Contract\Application\PackageInterface;
use Ixocreate\Contract\Application\ServiceRegistryInterface;
use Ixocreate\Contract\ServiceManager\ServiceManagerInterface;
use Ixocreate\Resource\BootstrapItem\ResourceBootstrapItem;

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
            ResourceBootstrapItem::class
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
