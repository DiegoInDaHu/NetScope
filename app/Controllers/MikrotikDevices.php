<?php

namespace App\Controllers;

use App\Models\MikrotikDeviceModel;
use CodeIgniter\HTTP\RedirectResponse;

class MikrotikDevices extends BaseController
{
    private MikrotikDeviceModel $devices;

    public function __construct()
    {
        $this->devices = new MikrotikDeviceModel();
    }

    public function index(): string
    {
        $data['devices'] = $this->devices->findAll();
        return $this->render('mikrotik_devices/index', $data);
    }

    public function create(): string
    {
        return $this->render('mikrotik_devices/create');
    }

    public function store(): RedirectResponse
    {
        $this->devices->insert([
            'name'          => $this->request->getPost('name'),
            'ddns_hostname' => $this->request->getPost('ddns_hostname'),
            'api_port'      => $this->request->getPost('api_port'),
            'username'      => $this->request->getPost('username'),
            'password'      => $this->request->getPost('password'),
            'estado'        => 'Offline',
            'ultima_actualizacion' => null,
            'notes'         => $this->request->getPost('notes'),
        ]);
        return redirect()->to('/mikrotik-devices');
    }

    public function edit(int $id): string
    {
        $data['device'] = $this->devices->find($id);
        return $this->render('mikrotik_devices/edit', $data);
    }

    public function update(int $id): RedirectResponse
    {
        $this->devices->update($id, [
            'name'          => $this->request->getPost('name'),
            'ddns_hostname' => $this->request->getPost('ddns_hostname'),
            'api_port'      => $this->request->getPost('api_port'),
            'username'      => $this->request->getPost('username'),
            'password'      => $this->request->getPost('password'),
            'notes'         => $this->request->getPost('notes'),
        ]);
        return redirect()->to('/mikrotik-devices');
    }

    public function delete(int $id): RedirectResponse
    {
        $this->devices->delete($id);
        return redirect()->to('/mikrotik-devices');
    }

    public function dashboard(): string
    {
        $data['devices'] = $this->devices->findAll();
        return $this->render('mikrotik_devices/dashboard', $data);
    }
}
