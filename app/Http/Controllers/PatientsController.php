<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\PatientsService as Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{

    private $request;
    private $patients;

    public function __construct(Request $request, Patients $patients)
    {
        $this->request = $request;
        $this->patients = $patients;

        $this->post = $this->request->all();
    }

    public function create()
    {
        return response()->json($this->patients->create($this->post));
    }

    public function createSendMessage()
    {
        return response()->json($this->patients->createSendMessage($this->post));
    }

    public function all()
    {
        return response()->json($this->patients->all());
    }

    public function delete()
    {
        return response()->json($this->patients->delete($this->post));
    }

    public function edit()
    {
        return response()->json($this->message->edit($this->post));
    }

}
