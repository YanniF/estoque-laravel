<?php

namespace estoque\Http\Controllers\Auth;

use estoque\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//tem que adicionar, se for refazer o método de login
/*use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;*/

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function username() {//se quiser o username (alterar no login.blade também)
        return 'username';
    }

    //public function login(Request $req) {
        
        /*$credenciais = $req->only('email', 'password');
        dd($credenciais);

        if(Auth::attempt($credenciais)) {
            return "Usuário NOME logado com sucesso";
        }
        return view('/home');*/

        /*$email = $req->email;
        $password = $req->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {            
            return redirect()->intended('/home');
        }
        else {
            return $this->sendFailedLoginResponse($request);
        }*/
    //}
}
