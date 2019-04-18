<?php
declare(strict_types=1);

namespace Ixocreate\Package\Resource;

/** @var \Ixocreate\ServiceManager\ServiceManagerConfigurator $serviceManager */
use Ixocreate\Package\Resource\SubManager\ResourceSubManager;


$serviceManager->addSubManager(ResourceSubManager::class);
