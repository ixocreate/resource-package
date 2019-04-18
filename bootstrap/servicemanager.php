<?php
declare(strict_types=1);

namespace Ixocreate\Resource;

use Ixocreate\Application\Service\ServiceManagerConfigurator;

/** @var ServiceManagerConfigurator $serviceManager */

$serviceManager->addSubManager(ResourceSubManager::class);
