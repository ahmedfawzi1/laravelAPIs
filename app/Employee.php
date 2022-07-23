<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "Employees";
    protected $fillable = ["name", "salary"];
}
