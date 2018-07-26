<?php

namespace App\Ore\Repositories;

use Closure;
use Illuminate\Support\Collection;
use Railken\LaraOre\Contracts\RepositoryContract;
use Railken\LaraOre\User\UserManager;

class UserRepository implements RepositoryContract
{
    /**
     * @var UserManager
     */
    protected $manager;

    public function __construct()
    {
        $this->manager = new UserManager();
    }

    /**
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function newQuery()
    {
        return $this->manager->getRepository()->newQuery();
    }

    /**
     * @return string
     */
    public function getTableName()
    {
        return $this->manager->newEntity()->getTable();
    }

    /**
     * @param Collection $resources
     * @param \Closure   $callback
     */
    public function extract(Collection $resources, Closure $callback)
    {
        foreach ($resources as $resource) {
            $callback($resource, ['user' => $resource]);
        }
    }

    /**
     * @param Collection $resources
     *
     * @return array
     */
    public function parse(Collection $resources)
    {
        return ['users' => $resources];
    }
}
