<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelReports extends Model
{
    protected $table            = 'reports';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_user',
        'location',
        'category',
        'topic',
        'detail',
        'image',
        'response',
        'status',
        'updated'
    ];

    public function getAllReport()
    {
        $builder = $this->db->table('reports');
        $builder->select('reports.*, users.name')
            ->join('users', 'users.id = reports.id_user', 'left')
            ->orderBy('reports.updated_at', 'DESC');
            
        $result = $builder->get()->getResultArray();
        return $result;
    }

    public function getReportStatusProcessed()
    {
        $builder = $this->db->table('reports');
        $builder->where('status', 'PROCESSED')
            ->orderBy('created_at', 'DESC');

        $result = $builder->get()->getResultArray();
        return $result;
    }

    public function getReportStatusComplete()
    {
        $builder = $this->db->table('reports');
        $builder->where('status', 'COMPLETE')
            ->orderBy('created_at', 'DESC');

        $result = $builder->get()->getResultArray();
        return $result;
    }
}
