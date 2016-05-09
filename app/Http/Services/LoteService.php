<?php

namespace App\Http\Services;

use App\Http\Repositories\Eloquent\GuiasRepository as GuiasRepository;
use App\Http\Repositories\Eloquent\LoteRepository as LoteRepository;

class LoteService
{
    private $lote;
    private $guias;

    public function __construct(GuiasRepository $guias,LoteRepository $lote)
    {
        $this->guias = $guias;
        $this->lote = $lote;
    }

    public function generateLote(array $data)
    {
        $data = (isset($data['data']) ? $data['data'] : $data);

        $model_lote = $this->guias->findWhere([$data]);

        foreach ($model_lote as $key => $value) {
            $lote['id_guia'] = $value['id'];
            $lote['plann_health'] = $value['plann_health'];
            if(!$this->lote->create($lote)){
                return false
            }
        }

        return true;
        
    }

    public function all()
    {
        return $this->patients->all();
    }

    public function edit($id)
    {
        $model = $this->lote->find($id['id']);
        $data = $model->getAttributes();

        return $data;
    }


}
