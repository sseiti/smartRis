<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Eloquent\Repository;

class PatientsRepository extends Repository
{
    public function model()
    {
        return 'App\Http\Models\Patients';
    }
}
