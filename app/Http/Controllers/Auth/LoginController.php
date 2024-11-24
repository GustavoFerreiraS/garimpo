<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected function redirectTo()
{
    // Verifica o perfil do usuário autenticado
    if (Auth::user()->perfil == 'admin') {
        return 'home';  // Redireciona para o painel de administração
    }

    // Caso contrário, se for um cliente
    return '/ ';  // Redireciona para a página inicial ou página de cliente
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    // Método de logout
public function logout(Request $request)
{
    Auth::logout(); // Desloga o usuário
    $request->session()->invalidate(); // Invalida a sessão
    $request->session()->regenerateToken(); // Regenera o token CSRF
    return redirect('/'); // Redireciona para a página inicial ou outra de sua escolha
}

}
