<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'employee_number','name','nik','position','phone','email','hired_at','status'
    ];

    public function salaries()
    {
        return $this->hasMany(EmployeeSalary::class);
    }
}
