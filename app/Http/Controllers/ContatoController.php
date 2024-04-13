<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ContatoController extends Controller
{
    public function enviarMensagem(Request $request)
    {
        if (strlen($request->nome) < 10 || !filter_var($request->email, FILTER_VALIDATE_EMAIL) || strlen($request->mensagem) < 10) {
            return redirect()->route('contato')->with('error', 'Todos os campos devem ser preenchidos corretamente.');
        } else {
           
            $data = [
                'nome' => $request->nome,
                'email' => $request->email,
                'mensagem' => $request->mensagem,
            ];

            Mail::send('emails.contato', $data, function ($message) {
                $message->to('lucasqcampos9@gmail.com')->subject('Nova mensagem de contato');
            });

            return redirect()->route('contato')->with('success', 'Mensagem enviada com sucesso!');
        }
    }
}
