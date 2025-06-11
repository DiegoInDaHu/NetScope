<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\RedirectResponse;

class Auth extends BaseController
{
    private UserModel $users;

    public function __construct()
    {
        $this->users = new UserModel();
    }

    public function login(): string
    {
        return $this->render('login');
    }

    public function authenticate(): RedirectResponse
    {
        $nombre = $this->request->getPost('nombre');
        $password = $this->request->getPost('contrasena');
        $user = $this->users->where('nombre', $nombre)->first();

        if ($user && password_verify($password, $user['contrasena'])) {
            $session = session();
            $session->set('user_id', $user['id']);
            $session->set('user_name', $user['nombre']);
            return redirect()->to('/');
        }

        return redirect()->back()->with('error', 'Credenciales inválidas');
    }

    public function logout(): RedirectResponse
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
