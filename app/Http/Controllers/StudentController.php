<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Formuilario Create Student
    public function studentform(){
        return view('layouts.createStudent');

    }

    //Save Student
    public function save(Request $request){
        $validator = $this->validate($request, [
            'nombre' => 'Required|string|max:45',
            'apellido' => 'Required|string|max:45',
            'correo' => 'Required|string|max:45|email|unique:estudiantes',
            'carrera' => 'Required|string|max:45',
            'semestre' => 'Required|string|max:45',
            'carne' => 'Required|string|max:45|unique:estudiantes',
        ]);

        $userdata = request()->except('_token');
        Estudiante::insert($userdata);

        return back()->with('estudianteSave','El Estudiante se guardo con exito');
    }
    //Read Student
    public function studentread(){
        $data['studets'] = Estudiante::paginate(10);

        return view('layouts.readStudent' , $data);
    }


}
