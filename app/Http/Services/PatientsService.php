<?php

namespace App\Http\Services;

use App\Http\Repositories\Eloquent\PatientsRepository as PatientsRepository;

class MessageService
{
    private $patients;

    public function __construct(PatientsRepository $patients)
    {
        $this->patients = $patients;
    }

    public function create(array $data)
    {
        $data = (isset($data['data']) ? $data['data'] : $data);

        if (!isset($data['name'])) {
            return [
                "status" => false,
                "message" => "Nome não especificado",
            ];
        } else if(!isset($data['plann_health'])) {
            return [
                "status" => false,
                "message" => "Plano não especificado",
            ];
        }

        return $this->patients->create($data);
        
    }

    public function all()
    {
        return $this->patients->all();
    }

    public function edit($id)
    {
        $model_message = $this->patients->find($id['id']);
        $data = $model_message->getAttributes();

        return $data;
    }

    public function delete($id)
    {
        $data['status'] = 'deleted';
        return $this->patients->update($data, $id['id']);
    }

}
