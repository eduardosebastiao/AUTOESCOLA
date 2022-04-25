<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('painel-admin.index');
    }

    public function editar(Request $request, usuarios $usuarios)
    {
        $usuarios->nome = $request->nome;
        $usuarios->nif = $request->nif;
        $usuarios->email = $request->email;
        $usuarios->telefone = $request->telefone;
        $usuarios->password = $request->password;
        $usuarios->save();
        return redirect()->route('admin.index');
    }
}
