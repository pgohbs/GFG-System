<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';

    protected $fillable = ['name','email','mobile','employee_code','designation'];
}
