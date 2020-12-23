<?php


namespace App\Criteria;


use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class BaseCriteria implements CriteriaInterface
{
    protected $params;

    protected function __construct(Request $request)
    {
        $this->params = $params;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        return $model;
    }
}