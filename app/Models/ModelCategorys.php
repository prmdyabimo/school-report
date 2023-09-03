<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCategorys extends Model
{
    protected $table            = 'categorys';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'updated_at'
    ];
}
