<?php

declare(strict_types=1);

namespace Ixocreate\Test\Resource;

use Ixocreate\Resource\ResourceBootstrapItem;
use Ixocreate\Resource\ResourceConfigurator;
use PHPUnit\Framework\TestCase;

class BootstrapItemTest extends TestCase
{
    /**
     * @covers \Ixocreate\Application\Uri\ApplicationUriBootstrapItem
     */
    public function testBootstrapItem()
    {
        $item = new ResourceBootstrapItem();

        $configurator = $item->getConfigurator();

        $this->assertInstanceOf(ResourceConfigurator::class, $configurator);
        $this->assertEquals('resource', $item->getVariableName());
        $this->assertEquals('resource.php', $item->getFileName());
    }
}
