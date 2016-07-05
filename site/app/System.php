<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;
use App\Test;

class System extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'version', 'flavour'
    ];

    protected $visible = ['name', 'version', 'flavour'];


}
