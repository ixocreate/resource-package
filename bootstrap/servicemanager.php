<?php
declare(strict_types=1);

namespace Ixocreate\Resource;

/** @var \Ixocreate\ServiceManager\ServiceManagerConfigurator $serviceManager */
use Ixocreate\Resource\SubManager\ResourceSubManager;


$serviceManager->addSubManager(ResourceSubManager::class);
