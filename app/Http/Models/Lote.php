<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $table = 'lote';
    protected $fillable = ['id_guia', 'plann_health', 'created_at', 'updated_at'];
    protected $hidden = [];
    protected $with = [];

}
