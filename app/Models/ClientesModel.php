<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table      = 'clientes';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'email', 'telefono', 'activo'];

    protected $useTimestamps = true;
    protected $createdField  = 'f_create';
    protected $updatedField  = 'f_update';
    protected $deletedField  = 'f_delete';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
