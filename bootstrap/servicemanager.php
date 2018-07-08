<?php
declare(strict_types=1);

namespace KiwiSuite\Resource;

/** @var \KiwiSuite\ServiceManager\ServiceManagerConfigurator $serviceManager */
use KiwiSuite\Resource\SubManager\ResourceSubManager;


$serviceManager->addSubManager(ResourceSubManager::class);
