<?php

namespace App;

use Hemp\Presenter\Presentable;
use Illuminate\Database\Eloquent\Model;

class AppHospitals extends Model
{
    use Presentable;

    public function diary()
    {
        return $this->hasMany('App\AppDiarys', 'hospital_id', 'id');
    }

    public function project()
    {
        return $this->belongsToMany('App\SysProject', 'app_hospital_project', 'hospital_id', 'project_id');
    }
}
