<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Package\Resource\Template;

use Ixocreate\Package\Resource\ResourceInterface;
use Ixocreate\Template\ExtensionInterface;
use Ixocreate\Package\Database\Repository\Factory\RepositorySubManager;
use Ixocreate\Package\Database\Repository\RepositoryInterface;
use Ixocreate\Package\Entity\Entity\EntityCollection;
use Ixocreate\Package\Resource\SubManager\ResourceSubManager;

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
