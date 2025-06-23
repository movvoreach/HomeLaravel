<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model

{
    protected $table = 'customers';
    protected $fileable = ['name','email','phone','gender'];
}
