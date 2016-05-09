<?php

namespace App\Http\Services;

use App\Http\Repositories\Eloquent\PatientsRepository as PatientsRepository;
use App\Http\Repositories\Eloquent\GuiasRepository as GuiasRepository;

class GuiasService
{
    private $patients;
    private $guias;

    public function __construct(PatientsRepository $patients, GuiasRepository $guias)
    {
        $this->patients = $patients;
        $this->guias = $guias;
    }

    public function create(array $data)
    {
        $data = (isset($data['data']) ? $data['data'] : $data);

        if(!isset($data['id_patient'])) {
            return [
                "status" => false,
                "message" => "Paciente não especificado",
            ];
        }

        return $this->guias->create($data);
        
    }

    public function all()
    {
        return $this->guias->all();
    }

    public function edit($id)
    {
        $model_message = $this->guias->find($id['id']);
        $data = $model_message->getAttributes();

        return $data;
    }

    public function delete($id)
    {
        return $this->guias->delete($id['id']);
    }

}
