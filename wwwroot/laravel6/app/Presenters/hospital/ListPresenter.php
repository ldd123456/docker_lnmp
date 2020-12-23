<?php

namespace App\Presenters\hospital;

use Hemp\Presenter\Presenter;

class ListPresenter extends Presenter
{
    public function toArray()
    {
        return array_merge(
                parent::toArray(),
                [
                    'name' => data_get($this->model, 'name') . '哈哈哈',
                ]
            );
    }
}
