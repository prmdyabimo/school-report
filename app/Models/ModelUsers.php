<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsers extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'email',
        'telephone',
        'image',
        'role',
        'password',
        'updated_at'
    ];

    public function register($dataUser)
    {
        $this->insert($dataUser);
    }

    public function getAllUser()
    {
        $builder = $this->db->table('users');
        $builder->orderBy('created_at', 'DESC');

        $result = $builder->get()->getResultArray();
        return $result;
    }
}
