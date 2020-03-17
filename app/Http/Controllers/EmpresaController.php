<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function listar()
    {
        return view('admin.listar');
    }
    public function cadastrar()
    {
        return view('admin.cadastrar');
    }
}
