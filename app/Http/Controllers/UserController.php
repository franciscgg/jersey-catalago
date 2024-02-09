<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Jersey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }
   

    public function login(Request $request){
        $email = $request->email;

        if(Auth::attempt(['email' => $request->email, 'password' => $request-> password])){

            return view('cadastrar');
        }else{
            return view('index')->with('email', $email);
        }
    }
    public function showFormJersey(){
        return view('cadastrar');
    }

    public function storeJersey(Request $request){
        $jerseys = $request->validate([
            'nomeJersey' =>'string|required',
            'timeJersey' =>'string|required',
            'temporadaJersey'=>'string|required',
            'tamanhoJersey'=>'string|required',
            'precoJersey'=>'string|required',
            'imagemJersey'=>'string|required'
        ]);
    
        Jersey::create($jerseys);
    
        // Define a mensagem de sessão
        session()->flash('success', 'Camisa cadastrada com sucesso!');
    
        return redirect()->route('cadastrar-jersey');
    }
    
    public function destroy(Jersey $id){
        $id->delete();
        return Redirect::route('todos-jersey');
    }


    public function showJerseyGerenciador(Request $request){
        $dados = Jersey::query();
        $dados->when($request->nomeJersey,function($query,$nomeJersey){
            $query->where('nomeJersey','like','%'.$nomeJersey.'%');
        });
        $dados = $dados->get();
        return view('buscar',['jerseys' => $dados]);


    }
    public function update(Jersey $id, Request $request){
        $jerseys = $request->validate([
            'nomeJersey' =>'string|required',
            'timeJersey' =>'string|required',
            'temporadaJersey'=>'string|required',
            'tamanhoJersey'=>'string|required',
            'precoJersey'=>'string|required',
            'imagemJersey'=>'string|required'
        ]);
    
        $id->fill($jerseys);
        $id->save();
    
        // Adiciona uma mensagem flash na sessão indicando que os dados foram alterados com sucesso
        session()->flash('success', 'Os dados foram alterados com sucesso.');
    
        return redirect()->route('todos-jersey');
    }
    
    public function show(Jersey $id){
        return view('alterar',['jerseys'=>$id]);
    }
}

    
