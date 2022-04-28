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

        //aleatorio

        $num1=rand(1,8);
        $medi1=Medicamentos::where('id', $num1)->first();
        $num2=rand(1,8);
        $medi2=Medicamentos::where('id', $num2)->first();
        $num3=rand(1,8);
        $medi3=Medicamentos::where('id', $num3)->first();
        $num4=rand(1,8);
        $medi4=Medicamentos::where('id', $num4)->first();
        $num5=rand(1,8);
        $medi5=Medicamentos::where('id', $num5)->first();
        $num6=rand(1,8);
        $medi6=Medicamentos::where('id', $num6)->first();
        $num7=rand(1,8);
        $medi7=Medicamentos::where('id', $num7)->first();
        $num8=rand(1,8);
        $medi8=Medicamentos::where('id', $num8)->first();

        return view('farmacia.index', ['medica' => $medica, 'medi1' => $medi1, 'medi2' => $medi2, 'medi3' => $medi3, 'medi4' => $medi4, 'medi5' => $medi5, 'medi6' => $medi6, 'medi7' => $medi7, 'medi8' => $medi8]);
    }
}
