<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view ('users.index')->with('users', $users);
    }
    
    public function create()
    {
        return view('users.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        foreach($input as $verify_null){
            if($verify_null == null || $verify_null == ""){
                return redirect('user')->with('flash_message', 'Preencha todos os campos!');  
            }
        }
        Users::create($input);
        return redirect('user')->with('flash_message', 'Usuário Adicionado!');  
    }
    
    public function show($id)
    {
        $Users = Users::find($id);
        return view('users.show')->with('users', $Users);
    }
    
    public function edit($id)
    {
        $Users = Users::find($id);
        return view('users.edit')->with('users', $Users);
    }
  
    public function update(Request $request, $id)
    {
        $Users = Users::find($id);
        $input = $request->all();
        foreach($input as $verify_null){
            if($verify_null == null || $verify_null == ""){
                return redirect('user')->with('flash_message', 'Preencha todos os campos!');  
            }
        }
        $Users->update($input);
        return redirect('user')->with('flash_message', 'Usuário Atualizado!');  
    }
  
    public function destroy($id)
    {
        Users::destroy($id);
        return redirect('user')->with('flash_message', 'Usuário Deletado!');  
    }
}
