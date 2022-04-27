<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamentos;

class MedicaController extends Controller
{
    //
    public function index()
    {

        $medica=Medicamentos::all();
        $medi=[];

        foreach($medica as $medic)
        {
            $medi[]=
            [
                'nombre'=>$medic['nombre'],
                'laboratorio'=>$medic['laboratorio'],
                'precio'=>$medic['precio'],
                'image'=>$medic['imagen'],
            ];
        }

        return view('index', ['medica' => $medica]);
    }
}
