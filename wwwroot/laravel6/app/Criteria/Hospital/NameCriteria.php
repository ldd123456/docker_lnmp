<?php

namespace App\Criteria\Hospital;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use Symfony\Component\Console\Input\Input;

/**
 * Class NameCriteria.
 *
 * @package namespace App\Criteria\Hospital;
 */
class NameCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        //$query->where('app_hospitals.name|app_hospitals.address|app_hospitals.intro|p.name', 'like', "%{$params['key']}%");
        $name = request()->get('name');
        if ((filled($name))) {
            $model->orWhere('name', 'like', "%{$name}%")
                ->orWhere('address', 'like', "%{$name}%")
                ->orWhere('intro', 'like', "%{$name}%")
                ->orWhereHas('project', function ($query) use ($name){
                    $query->where('name', 'like', "%{$name}%");
                });
        }
        return $model;
    }
}
