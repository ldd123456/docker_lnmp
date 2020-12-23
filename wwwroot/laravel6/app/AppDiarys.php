<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppDiarys extends Model
{
    public function hospital()
    {
        return $this->belongsTo('App\AppHospitals');
    }

    public function journal()
    {
        return $this->hasMany('App\AppJournals', 'diary_id', 'id');
    }
}
