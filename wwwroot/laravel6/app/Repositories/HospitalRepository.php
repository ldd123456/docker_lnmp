<?php

namespace App\Repositories;

use App\AppHospitals;
use App\Validators\AnliValidator;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\HospitalValidator;

/**
 * Class HospitalRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class HospitalRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AppHospitals::class;
    }

    public function validator()
    {
        return AnliValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function create(array $attributes)
    {
        $model = $this->model();
    }

}
