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

        $data = [
            'title'               => 'Dashboard School Report | SMK Negeri 17 Jakarta',
            'menu'                => 'Dashboard',
            'data_user'           => $this->ModelUsers->find($sesData['id']),
            'users'               => $this->ModelUsers->getAllUser(),
            'reports'             => $this->ModelReports->getAllReport(),
            'reports_processed'   => $this->ModelReports->getReportStatusProcessed(),
            'reports_complete'    => $this->ModelReports->getReportStatusComplete()
        ];

        return view('pages/v_dashboard', $data);
    }
}
