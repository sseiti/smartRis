<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $table = 'patients';
    protected $fillable = ['name', 'plann_health','status', 'created_at', 'updated_at'];
    protected $hidden = [];
    protected $with = [];

}
