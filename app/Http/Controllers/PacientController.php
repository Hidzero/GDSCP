<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacient;

class PacientController extends Controller
{

    public function create(Request $request){
        $new_pacient = [
            'nome' => 'ola',
            'data_nascimento' => 'ola',
            'cpf' => 'ola',
            'cns' => 'ola',
            'sexo' => 'ola',
            'comorbidade' => 'ola',
        ];

        $pacient = new Pacient($new_pacient);
        $pacient->save();

        dd($pacient);
    }

    public function index()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function cadastrarCliente()
    {
        return view('cadastrarCliente');
    }

    public function evolucao()
    {
        return view('evolucao');
    }

    public function visualizar()
    {
        return view('visualizar');
    }

    public function evoluir()
    {
        return view('regEvolucao');
    }

    public function localLesao()
    {
        return view('localLesao');
    }

    public function sala()
    {
        return view('sala');
    }

    public function leito()
    {
        return view('leito');
    }

    public function tipoLesao()
    {
        return view('tipoLesao');
    }

    public function tipoTratamento()
    {
        return view('tipoTratamento');
    }


    
}




