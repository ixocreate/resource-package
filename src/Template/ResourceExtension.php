<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Resource\Template;

use Ixocreate\Database\Repository\Factory\RepositorySubManager;
use Ixocreate\Database\Repository\RepositoryInterface;
use Ixocreate\Entity\EntityCollection;
use Ixocreate\Resource\ResourceInterface;
use Ixocreate\Resource\ResourceSubManager;
use Ixocreate\Template\Extension\ExtensionInterface;

final class ResourceExtension implements ExtensionInterface
{
    /**
     * @var ResourceSubManager
     */
    private $resourceSubManager;

    /**
     * @var RepositorySubManager
     */
    private $repositorySubManager;

    /**
     * ResourceExtension constructor.
     *
     * @param ResourceSubManager $resourceSubManager
     * @param RepositorySubManager $repositorySubManager
     */
    public function __construct(ResourceSubManager $resourceSubManager, RepositorySubManager $repositorySubManager)
    {
        $this->resourceSubManager = $resourceSubManager;
        $this->repositorySubManager = $repositorySubManager;
    }

    /**
     * @param string $resource
     * @return EntityCollection
     */
    public function __invoke(string $resource)
    {
        /** @var ResourceInterface $resource */
        $resource = $this->resourceSubManager->get($resource);

        $repository = $resource->repository();
        /** @var RepositoryInterface $repository */
        $repository = $this->repositorySubManager->get($repository);

        $result = $repository->findAll();

        return new EntityCollection($result, function ($item) {
            return (string)$item->id();
        });
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'resource';
    }
}
