<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'full_name',
        'gender',
        'address',
        'email',
        'position',
        'phone_no',
        'profile_pic_path'
    ];

    protected $guarded=[
        'id',
        'created_at',
        'updated_at'
    ];
}
