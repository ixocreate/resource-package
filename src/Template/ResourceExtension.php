<?php
namespace KiwiSuite\Resource\Template;

use KiwiSuite\Contract\Resource\ResourceInterface;
use KiwiSuite\Contract\Template\ExtensionInterface;
use KiwiSuite\Database\Repository\Factory\RepositorySubManager;
use KiwiSuite\Database\Repository\RepositoryInterface;
use KiwiSuite\Entity\Entity\EntityCollection;
use KiwiSuite\Resource\SubManager\ResourceSubManager;

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

        return new EntityCollection($result, function($item) {
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
