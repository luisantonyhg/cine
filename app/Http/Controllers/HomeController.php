<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');


        // COMO OBTENER TODAS LAS FILAS DE UNA TABLA

        // $usuarios = DB::table('usuarios')->get();
        // $usuario1 = DB::table('usuarios')->get();
        // $usuario2 = DB::table('usuarios')->get();
        // $usuario3 = DB::table('usuarios')->get();
        // $usuario4 = DB::table('usuarios')->get();
        // $usuario5 = DB::table('usuarios')->get();
        // $usuario6 = DB::table('usuarios')->get();
        // $usuario7 = DB::table('usuarios')->get();
        // $usuario8 = DB::table('usuarios')->get();
        // $usuario9 = DB::table('usuarios')->get();
        // $usuario10 = DB::table('usuarios')->get();
        // $usuario11 = DB::table('usuarios')->get();
        // $usuario12 = DB::table('usuarios')->get();
        // $usuario13 = DB::table('usuarios')->get();
        // $usuario14 = DB::table('usuarios')->get();
        // $usuario15 = DB::table('usuarios')->get();
        // $usuario16 = DB::table('usuarios')->get();
        // $usuario17 = DB::table('usuarios')->get();
        // $usuario18 = DB::table('usuarios')->get();
        // $usuario19 = DB::table('usuarios')->get();
        // $usuario20 = DB::table('usuarios')->get();



        // Recuperando un Solo Registro / Columna desde una Tabla
        // $usuarios2 = DB::table('registro')
        // ->where('nombre','=','medina ')
        // ->get();

        // dd($usuarios2);

//         $usuarios3 = DB::table('registro')
//         ->where('nombre','medina')
//         ->value('nombre');
//  dd($usuarios3);
        // Recuperando una lista de valores de una columna

//         $usuarios4 = DB::table('registro')->pluck('id');
//  dd($usuarios4);
        // FUNCIONES AGREGADAS

        // $personal = DB::table('registro')->count();
        // dd($personal);
//         $personal1 = DB::table('registro')->max('telefonico');
//  dd($personal1);


        // Especificando una cláusula Select

        // $select1 = DB::table('personal')->select('dni', 'nombrecompleto','grado')->get();

        // $select2 = DB::table('personal')->select('dni', 'nombrecompleto','grado','cod_uni_sql','fecha_reg','gran_unidad2')->get();






        // return view('welcome', compact('usuarios','usuario2','usuario3','usuario4','usuario5','usuario6','usuario7','usuario8','usuario9','usuario10','usuario11','usuario12','usuario13','usuario14','usuario15','usuario16','usuario17','usuario18','usuario19','usuario20','usuarios2','usuarios3','usuarios4', 'personal','personal1','select1','select2'));


        // return view('registro');

         // $cip = $request->cip_registro;
        // $nombre = $request->nombre_registro;
        // $dni = $request->dni_registro;
        // $unidad = $request->unidad_registro;
        // $telefonico = $request->telefonico_registro;
        // $asunto = $request->asunto_registro;


        // $res = DB::table('registro')->insert([

        //     [
        //         // 'cip' => $cip,
        //         // 'dni'=> $dni,
        //         // 'nombrecompleto' => $nombre,
        //         // 'grado' => $grado
        //         'cip' => $cip,
        //         'nombre'=> $nombre,
        //         'dni' => $dni,
        //         'unidad' => $unidad,
        //         'telefonico' => $telefonico,
        //         'asunto' => $asunto


        //     ],

        // ]);
        // return('registrado correctame');
    }
}
