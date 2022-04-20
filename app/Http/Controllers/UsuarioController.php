<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $usuarios = usuarios::where('email', '=', $email)->where('password', '=', $password)->first();

        //colocamos o @ para evitar verf se eh indefenido...
        if (@$usuarios->id != null) {
            //recuperando dados do user se existir
            @session_start();
            $_SESSION['id_usuario'] = $usuarios->id;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario'] = $usuarios->nivel;
            $_SESSION['cp_usuario'] = $usuarios->cp;

            if ($_SESSION['nivel_usuario'] == 'admin') {
                return view('painel-admin.index');
            }

            if ($_SESSION['nivel_usuario'] == 'instrutor') {
                return view('painel-instrutor.index');
            }

            if ($_SESSION['nivel_usuario'] == 'recepcionista') {
                return view('painel-recepcao.index');
            }
        } else {
            echo "<script language='javascript'> window.alert('Dados Incorretos!') </script>";
            return view('index');
        }
    }


    public function logout()
    {
        @session_start();
        @session_destroy();
        return view('index');
    }
}
