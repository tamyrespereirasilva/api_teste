<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteController extends Controller
{
    
    public function index()
    {
       return Cliente::all();
    }

    
    public function store(Request $request)
    {
        $request->validate([
         'nome' => 'required',
         'endereco' => 'required',
         'email' => 'required',
         'telefone' => 'required',
        ]);

        return Cliente::create($request->all());
    }

    
    public function show($id)
    {
        return Cliente::findOrfail($id);
    }

}    
   