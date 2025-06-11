<?php

use App\Models\MikrotikDeviceModel;
use CodeIgniter\Boot;

require __DIR__ . '/app/Config/Paths.php';
$paths = new Config\Paths();
require $paths->systemDirectory . '/Boot.php';
Boot::bootTest($paths);

$model = new MikrotikDeviceModel();
$devices = $model->findAll();

$isWindows = stripos(PHP_OS, 'WIN') === 0;

foreach ($devices as $device) {
    $hostname = $device['ddns_hostname'];
    $command  = ($isWindows ? 'ping -n 1 ' : 'ping -c 1 ') . escapeshellarg($hostname);
    $output   = [];
    $exitCode = 1;
    exec($command, $output, $exitCode);

    $estado = $exitCode === 0 ? 'Online' : 'Offline';

    $model->update($device['id'], [
        'estado'              => $estado,
        'ultima_actualizacion' => date('Y-m-d H:i:s'),
    ]);
}

