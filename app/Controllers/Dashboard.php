<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelReports;
use App\Models\ModelUsers;

class Dashboard extends BaseController
{
    protected $ModelUsers;
    protected $ModelReports;

    public function __construct()
    {
        $this->ModelUsers = new ModelUsers();
        $this->ModelReports = new ModelReports();
    }

    public function index()
    {
        $sesData = session()->get();
        $dataUser = $this->ModelUsers->find($sesData['id']);

        $data = [
            'title'     => 'Dashboard School Report | SMK Negeri 17 Jakarta',
            'menu'      => 'Dashboard',
            'data_user' => $dataUser,
        ];

        if ($dataUser['role'] == "ADMIN") {
            $adminData = [
                'users'             => $this->ModelUsers->getAllUser(),
                'reports'           => $this->ModelReports->getAllReport(),
                'reports_processed' => $this->ModelReports->getReportStatusProcessed(),
                'reports_complete'  => $this->ModelReports->getReportStatusComplete(),
            ];
            $data = array_merge($data, $adminData);
        } else if ($dataUser['role'] == "USER") {
            $userData = [
                'users'             => $this->ModelUsers->getAllUser(),
                'reports'           => $this->ModelReports->getReportByUserId($dataUser['id']),
                'reports_processed' => $this->ModelReports->getReportStatusProcessedByUserId($dataUser['id']),
                'reports_complete'  => $this->ModelReports->getReportStatusCompleteByUserId($dataUser['id']),
            ];
            $data = array_merge($data, $userData);
        }

        return view('pages/v_dashboard', $data);
    }
}
