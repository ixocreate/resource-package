<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Test\Resource;

use Ixocreate\Resource\Package;
use Ixocreate\Resource\ResourceBootstrapItem;
use PHPUnit\Framework\TestCase;

class PackageTest extends TestCase
{
    /**
     * @covers \Ixocreate\Resource\Package
     */
    public function testPackage()
    {
        $package = new Package();

        $this->assertSame([ResourceBootstrapItem::class], $package->getBootstrapItems());

        $this->assertEmpty($package->getDependencies());
        $this->assertDirectoryExists($package->getBootstrapDirectory());
    }
}
