<?php

namespace App\Models;

use CodeIgniter\Model;

class MikrotikDeviceModel extends Model
{
    protected $table            = 'mikrotik_devices';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'name',
        'ddns_hostname',
        'api_port',
        'username',
        'password',
        'notes',
    ];
    protected $useTimestamps    = true;
}
