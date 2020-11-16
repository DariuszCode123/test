<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class \Visit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nau_id','ucz_id','date'
    ];

}
