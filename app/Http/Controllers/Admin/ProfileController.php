<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;


class ProfileController extends Controller
{
    public function update (Request $request)
    {
        $user = Auth::user();

    
        if ($request->isMethod('post')){

$errors = [];

if (Hash::check($request->post('password'), $user->password)){
$user->fill([
'name'=>$request->post('name'),
'password'=> Hash::make($request->post('newPassword')),
'email'=>$request->post('email')
]);
$user->save();
$request->session()->flash('MSG', 'Данные успешно изменены');
} else {
    $errors['password'][] ='Неверно введен текущий пароль';
}
return redirect()->route('admin.profile')->withErrors($errors);

}
     
        return view('admin.profile', ['user'=> $user,]);
    }
}
