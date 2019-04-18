<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Resource\Package\Template;

use Ixocreate\Resource\Package\ResourceInterface;
use Ixocreate\Template\Package\ExtensionInterface;
use Ixocreate\Database\Package\Repository\Factory\RepositorySubManager;
use Ixocreate\Database\Package\Repository\RepositoryInterface;
use Ixocreate\Entity\Package\EntityCollection;
use Ixocreate\Resource\Package\SubManager\ResourceSubManager;

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
            return (string) $item->id();
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
