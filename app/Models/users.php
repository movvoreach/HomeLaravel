<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'student';
    protected $fileable = ['name','email','phone','address'];
}
