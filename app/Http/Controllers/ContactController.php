<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
    	# code...
    	$campos = [
    		'nombre'=>'required',
    		'email'=>'required|email',
            'subject'=>'required',
    		'content'=>'required|min:3'
    	];
        $mensaje=[
            'required'=>'El :attribute es requerido, por favor ingresarlo'
        ];
    	request()->validate($campos, $mensaje);
    	$datosContact = $request->except('_token');

        /*Envio de email*/
        Mail::to('cristiangarzon180@gmail.com')->queue(new MessageReceived($datosContact));

    	return back()->with('status', 'recibimos tu mensaje, te responderemos en menos de 24 hrs');
    }
}
