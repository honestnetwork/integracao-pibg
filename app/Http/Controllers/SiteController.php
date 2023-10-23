<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Relecionamento;

class SiteController extends Controller
{
    
    public function index()
    {
        return view('site.index');
    } 
    public function cadastrarpessoa()
    {
        return view('site.pessoas.cadastrarpessoa');
    }
    public function listpessoas()
    {
        $pessoas = Pessoa::all();
        return view('site.pessoas.lista', compact('pessoas'));
    }
    public function detailspessoa($id){
        $detalhepessoa = Pessoa::findOrFail($id);
        return view('site.pessoas.detalhe', compact('detalhepessoa'));    
    }  
    public function detailsrd ($id_rd){
        $detalherd = Relecionamento::findOrFail('id');        
        return view('site.rds.detalhe', compact('detalherd'));      
    }
}
//dd($detalhepessoa->dadospgm);
//$detailsPgm = ParticipantePgm::where('id_participante' , $id)->first();