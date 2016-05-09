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
        $this->lote = $lote;

        $this->post = $this->request->all();
    }



    public function all()
    {
        return response()->json($this->guias->all());
    }

    public function generateLote()
    {
        return response()->json($this->message->generateLote($this->post));
    }
}
