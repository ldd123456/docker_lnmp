<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class AnliValidator.
 *
 * @package namespace App\Validators;
 */
class AnliValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        'index' => ['name' => 'required'],
        'anli' => ['name' => 'required'],
    ];
}
