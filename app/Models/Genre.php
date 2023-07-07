<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use Uuid, SoftDeletes;

    protected $fillable = [
        'name',
        'is_active'
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id'        => 'string',
        'is_active' => 'boolean',
        'name'      => 'string'
    ];
}
