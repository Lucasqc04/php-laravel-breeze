<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviarMensagem(Request $request)
    {
   
        if (strlen($request->nome) < 10 || !filter_var($request->email, FILTER_VALIDATE_EMAIL) || strlen($request->mensagem) < 10) {
           
            return redirect()->route('contato')->with('error', 'Todos os campos devem ser preenchidos corretamente.');
        } else {
             
            return redirect()->route('contato')->with('success', 'Mensagem enviada com sucesso!');
        }
    }
}
