<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\GuiasService as Guias;
use Illuminate\Http\Request;

class GuiasController extends Controller
{

    private $request;
    private $guias;

    public function __construct(Request $request, Guias $guias)
    {
        $this->request = $request;
        $this->guias = $guias;

        $this->post = $this->request->all();
    }

    public function create()
    {
        return response()->json($this->guias->create($this->post));
    }

    public function all()
    {
        return response()->json($this->guias->all());
    }

    public function delete()
    {
        return response()->json($this->guias->delete($this->post));
    }

    public function edit()
    {
        return response()->json($this->guias->edit($this->post));
    }
    

}
