<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = user::where('role', 1)->get();
        return view ('admin.users.index')->with(compact('users'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate(
            [
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => 'required', 'string', 'min:6', 'confirmed'
            
            ],
            [
            
            'name.required' => 'Es necesario ingresar el nombre del usuario.',
            'name.max' => 'El nombre es demasiado extenso.',
            'email.required' => 'Es indispensable ingresar el e-mail del usuario.',
            'email.email' => 'Debes ingresar un correo valido. ',
            'email.max' => 'El e-mail del usuario es demasiado extenso. ',
            'email.unique' => 'Este e-mail ya se encuentra en uso.',
            'password.required' => 'Ólvido ingresar la contraseña.',
            'password.min' => 'La contraseña debe prestar al menos 6 caracteres. ',
            ]
        );

        $user= new User();
        $user->name = $request->input('name');
        $user->email=$request->input('email');
        $user->password= bcrypt($request->input('password'));
        $user->role=1;
        $user->save();

        return back()->with('notification', 'Usuario registrado exitosamente.');
    }

    public function edit($id)
    {
        $user= user::find($id);
        return view ('admin.users.edit')->with(compact('user'));
    }

    public function update($id, Request $request)
    {
       

        $validated = $request->validate(
            [
            'name' => 'required','max:255',
            'password' =>'required','min:6',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users'
            
            ],
            [
            
            'name.required' => 'Es necesario ingresar el nombre del usuario.',
            'name.max' => 'El nombre es demasiado extenso.',
            'password.min' => 'La contraseña debe prestar al menos 6 caracteres. ',
            'password.required' => 'Ólvido ingresar la contraseña.',
            'email.required' => 'Es indispensable ingresar el e-mail del usuario.',
            'email.email' => 'Debes ingresar un correo valido. ',
            'email.max' => 'El e-mail del usuario es demasiado extenso. ',
            'email.unique' => 'Este e-mail ya se encuentra en uso.',
            ]
        );

        $user= user::find($id);
        $user-> name = $request->input('name');
        $user->email=$request->input('email');

        $password = $request->input('password');
        
        if ($password)

            $user->password = bcrypt($password);

            $user->save();

            return back()->with('notification', 'Usuario registrado exitosamente.');
    


    }

    public function delete ($id){

        $user = User::find($id);
        $user ->delete();

        return back()->with('notification', 'El usuario se ha dado de baja correctamente');

    }


}
