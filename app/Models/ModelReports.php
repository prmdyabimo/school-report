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

    public function getReportByUserId(int $id)
    {
        $builder = $this->db->table('reports');
        $builder->select('reports.*, users.name')
            ->join('users', 'users.id = reports.id_user', 'left')
            ->where('id_user', $id)
            ->orderBy('reports.updated_at', 'DESC');

        $result = $builder->get()->getResultArray();
        return $result;
    }

    public function getReportStatusProcessed()
    {
        $builder = $this->db->table('reports');
        $builder->select('reports.*, users.name')
            ->join('users', 'users.id = reports.id_user', 'left')
            ->where('status', 'PROCESSED')
            ->orderBy('reports.updated_at', 'DESC');

        $result = $builder->get()->getResultArray();
        return $result;
    }

    public function getReportStatusProcessedByUserId(int $id)
    {
        $builder = $this->db->table('reports');
        $builder->select('reports.*, users.name')
            ->join('users', 'users.id = reports.id_user', 'left')
            ->where('id_user', $id)
            ->where('status', 'PROCESSED')
            ->orderBy('reports.updated_at', 'DESC');

        $result = $builder->get()->getResultArray();
        return $result;
    }

    public function getReportStatusComplete()
    {
        $builder = $this->db->table('reports');
        $builder->select('reports.*, users.name')
            ->join('users', 'users.id = reports.id_user', 'left')
            ->where('status', 'COMPLETE')
            ->orderBy('reports.updated_at', 'DESC');

        $result = $builder->get()->getResultArray();
        return $result;
    }

    public function getReportStatusCompleteByUserId(int $id)
    {
        $builder = $this->db->table('reports');
        $builder->select('reports.*, users.name')
            ->join('users', 'users.id = reports.id_user', 'left')
            ->where('id_user', $id)
            ->where('status', 'COMPLETE')
            ->orderBy('reports.updated_at', 'DESC');

        $result = $builder->get()->getResultArray();
        return $result;
    }
}
