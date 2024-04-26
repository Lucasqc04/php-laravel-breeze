<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function enviarMensagem(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'telefone' => 'required|string|min:9',
            'mensagem' => 'required|string|min:10',
        ], [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.min' => 'O campo nome deve ter no mínimo :min caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo :max caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de e-mail válido.',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'telefone.string' => 'O campo telefone deve ser uma string.',
            'telefone.min' => 'O campo telefone deve ter no mínimo :min caracteres.',
            'mensagem.required' => 'O campo mensagem é obrigatório.',
            'mensagem.string' => 'O campo mensagem deve ser uma string.',
            'mensagem.min' => 'O campo mensagem deve ter no mínimo :min caracteres.'
        ]);

        if ($validator->fails()) {
            return redirect()->route('contato')->withInput()->withErrors($validator)->with('error', 'Erro ao enviar mensagem. Por favor, verifique os campos.');
        }

        $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem,
        ];

        Mail::send('emails.contato', $data, function ($message) {
            $message->to('joao.portela03@gmail.com')->subject('Nova mensagem de contato');
        });

        return redirect()->route('contato')->with('success', 'Mensagem enviada com sucesso!');
    }
}
