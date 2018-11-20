<?php
declare(strict_types=1);

namespace KiwiSuite\Resource;

use KiwiSuite\Contract\Application\ConfiguratorRegistryInterface;
use KiwiSuite\Contract\Application\PackageInterface;
use KiwiSuite\Contract\Application\ServiceRegistryInterface;
use KiwiSuite\Contract\ServiceManager\ServiceManagerInterface;
use KiwiSuite\Resource\BootstrapItem\ResourceBootstrapItem;

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
