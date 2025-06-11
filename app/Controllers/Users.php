<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\RedirectResponse;

class Users extends BaseController
{
    private UserModel $users;

    public function __construct()
    {
        $this->users = new UserModel();
    }

    public function index(): string
    {
        $data['users'] = $this->users->findAll();
        return $this->render('users/index', $data);
    }

    public function create(): string
    {
        return $this->render('users/create');
    }

    public function store(): RedirectResponse
    {
        $this->users->insert([
            'nombre' => $this->request->getPost('nombre'),
            'contrasena' => password_hash($this->request->getPost('contrasena'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/users');
    }

    public function edit(int $id): string
    {
        $data['user'] = $this->users->find($id);
        return $this->render('users/edit', $data);
    }

    public function update(int $id): RedirectResponse
    {
        $this->users->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'contrasena' => password_hash($this->request->getPost('contrasena'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/users');
    }

    public function delete(int $id): RedirectResponse
    {
        $this->users->delete($id);
        return redirect()->to('/users');
    }
}
