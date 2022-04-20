<?php

namespace App\Http\Controllers;

use App\Models\instrutor;
use App\Models\instrutore;
use Illuminate\Http\Requeste;

class CadInstrutoresController extends Controller
{
    public function index()
    {
        $tabela = instrutore::orderby('id', 'desc')->paginate();
        return view('painel-admin.instrutores.index', ['itens' => $tabela]);
    }
}
