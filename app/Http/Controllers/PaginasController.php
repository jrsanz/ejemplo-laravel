<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaginasController extends Controller
{
    public function presentacion ($nombre, $apellido = null)
    {
        $nombre_completo = strtoupper($nombre . ' ' . $apellido);  //Convierte el texto a mayúsculas

        return view('presentacion', compact('nombre', 'apellido'))->with('nombre_completo', $nombre_completo);
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function recibeContacto(Request $request)
    {
        //dd($request->all());

        /*DB::table('contactos')->insert([
            'correo' => $request->correo,
            'comentario' => $request->comentario,
            'telefono' => $request->telefono,
            'created_at' => now(),  //now() proporciona la fecha y hora actual
            'updated_at' => now(),
        ]);*/

        //Dos formas de validar los campos
        $request->validate([
            'correo' => 'required|email',
            'comentario' => ['required', 'min:5', 'max:500'],
            'telefono' => 'numberic',
        ]);

        $contacto = new Contacto();
        $contacto->correo = $request->correo;
        $contacto->comentario = $request->comentario;
        $contacto->telefono = $request->telefono;
        $contacto->save();

        return redirect()->route('contacto');
    }

    public function informacion()
    {
        return view('informacion');
    }
}
