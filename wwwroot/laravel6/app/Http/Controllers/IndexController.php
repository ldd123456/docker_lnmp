<?php


namespace App\Http\Controllers;

use App\AppDiarys;
use App\AppHospitals;
use App\Events\SaveRedis;
use App\Jobs\ProcessReids;
use App\Presenters\hospital\ListPresenter;
use App\Repositories\HospitalRepository;
use App\Criteria\Hospital\NameCriteria;
use App\Validators\AnliValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HosptialRequest;
use Illuminate\Support\Facades\Log;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\LaravelValidator;

class IndexController extends Controller
{
    protected $repository;

    protected $anliValidator;

    public function __construct(HospitalRepository $repository,AnliValidator $anliValidator)
    {
        $this->repository = $repository;
        $this->anliValidator = $anliValidator;
    }

    public function index(Request $request)
    {
        phpinfo();exit;
//        $this->repository->
//        $this->anliValidator->with($request->all())->passesOrFail('anli');

//        $this->repository->pushCriteria(NameCriteria::class);
//        $data = $this->repository->with(['diary', 'project'])->whereHas()->paginate(10);

        $data = AppDiarys::with(['journal' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->limit(10)->first();

        event(new SaveRedis(666));
//       $data = AppHospitals::with('project')->orWhere('name', '北京碧莲盛植发医院')->orWhereHas('project', function ($query){
//           $query->Where('name','like', '%生发养护%');
//       })->limit(10)->get()->present(ListPresenter::class);

        return $data;
    }

    public function anli()
    {
        $this->anliValidator->with($request->all())->passesOrFail('anli');
    }
}