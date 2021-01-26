<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Resource;

use Ixocreate\Application\ServiceManager\NamedServiceInterface;

interface ResourceInterface extends NamedServiceInterface
{
    /**
     * @return string
     */
    public function label(): string;

    /**
     * @return string
     */
    public function repository(): string;
}
