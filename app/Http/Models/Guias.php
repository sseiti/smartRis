<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Guias extends Model
{
    protected $table = 'guias';
    protected $fillable = ['ans', 'guia','solicitante', 'codigo_operadora','data_autorizacao','id_patient', 'valor', 'created_at', 'updated_at'];
    protected $hidden = [];
    protected $with = [];

}