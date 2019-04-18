<?php
declare(strict_types=1);

namespace Ixocreate\Resource\Package;

/** @var \Ixocreate\ServiceManager\ServiceManagerConfigurator $serviceManager */
use Ixocreate\Resource\Package\SubManager\ResourceSubManager;


$serviceManager->addSubManager(ResourceSubManager::class);
