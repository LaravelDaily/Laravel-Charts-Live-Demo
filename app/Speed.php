<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speed extends Model
{
    use SoftDeletes;

    public $table = 'speeds';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'speed',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
