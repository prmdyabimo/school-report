<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCategorys;
use App\Models\ModelReports;
use App\Models\ModelUsers;
use CodeIgniter\I18n\Time;

class Report extends BaseController
{
    protected $ModelUsers;
    protected $ModelReports;
    protected $ModelCategorys;

    public function __construct()
    {
        $this->ModelUsers = new ModelUsers();
        $this->ModelReports = new ModelReports();
        $this->ModelCategorys = new ModelCategorys();
    }

    public function index()
    {
        helper(['form']);

        $sesData = session()->get();
        $dataUser = $this->ModelUsers->find($sesData['id']);

        $data = [
            'title'     => 'Report School Report | SMK Negeri 17 Jakarta',
            'menu'      => 'Report',
            'data_user' => $dataUser,
            'categorys' => $this->ModelCategorys->findAll()
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

        return view('pages/v_report', $data);
    }

    public function detail(int $id)
    {
        $sesData = session()->get();

        $dataUser = $this->ModelUsers->find($sesData['id']);
        $dataReport = $this->ModelReports->getReportById($id);

        $data = [
            'title'     => 'Detail Report School Report | SMK Negeri 17 Jakarta',
            'menu'      => 'Report',
            'data_user' => $dataUser,
            'report'    => $dataReport
        ];

        return view('pages/v_detail_report', $data);
    }

    public function create()
    {
        $sesData = session()->get();

        $idUser = $sesData['id'];
        $location = $this->request->getVar('location');
        $category = $this->request->getVar('category');
        $topic = $this->request->getVar('topic');
        $detail = $this->request->getVar('detail');
        $image = $this->request->getFile('image');
        $status = "PROCESSED";
        $response = null;

        $rules = [
            'location'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Location is required'
                ]
            ],
            'category'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Category is required'
                ]
            ],
            'topic'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Topic is required'
                ]
            ],
            'detail'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Detail is required'
                ]
            ],
            'image' => [
                'rules' => 'uploaded[image]|mime_in[image,image/jpeg,image/png]|max_size[image,1024]',
                'errors' => [
                    'uploaded'     => 'Image is required',
                    'mime_in'      => 'The file must be an image (JPEG or PNG)',
                    'max_size'     => 'The image size should not exceed 1024 KB',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'The data you entered is invalid');
            return redirect()->back()->withInput();
        }

        $nameImage = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads/report', $nameImage);

        $dataReport = [
            'id_user'       => $idUser,
            'location'      => $location,
            'category'      => $category,
            'topic'         => $topic,
            'detail'        => $detail,
            'image'         => $nameImage,
            'response'      => $response,
            'status'        => $status
        ];

        $this->ModelReports->save($dataReport);
        session()->setFlashdata('success', 'You have successfully created a report');
        return redirect()->back();
    }

    public function show(int $id)
    {
        helper(['form']);

        $sesData = session()->get();

        $dataUser = $this->ModelUsers->find($sesData['id']);
        $dataReport = $this->ModelReports->getReportById($id);

        $data = [
            'title'     => 'Detail Report School Report | SMK Negeri 17 Jakarta',
            'menu'      => 'Report',
            'data_user' => $dataUser,
            'report'    => $dataReport,
            'categorys' => $this->ModelCategorys->findAll()
        ];

        return view('pages/v_edit_report', $data);
    }

    public function edit(int $id)
    {
        $location = $this->request->getVar('location');
        $category = $this->request->getVar('category');
        $topic = $this->request->getVar('topic');
        $detail = $this->request->getVar('detail');

        $rules = [
            'location'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Location is required'
                ]
            ],
            'category'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Category is required'
                ]
            ],
            'topic'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Topic is required'
                ]
            ],
            'detail'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Detail is required'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'The data you entered is invalid');
            return redirect()->back()->withInput();
        }

        $dataReport = [
            'location'      => $location,
            'category'      => $category,
            'topic'         => $topic,
            'detail'        => $detail,
            'updated_at'    => Time::now()
        ];

        $this->ModelReports->update($id, $dataReport);
        session()->setFlashdata('success', 'You have successfully changed a report');
        return redirect()->back();
    }

    public function editImage(int $id)
    {
        $oldImage = $this->request->getVar('old_image');
        $newImage = $this->request->getFile('image');

        $rules = [
            'image' => [
                'rules' => 'uploaded[image]|mime_in[image,image/jpeg,image/png]|max_size[image,1024]',
                'errors' => [
                    'uploaded'     => 'Image is required',
                    'mime_in'      => 'The file must be an image (JPEG or PNG)',
                    'max_size'     => 'The image size should not exceed 1024 KB',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'The data you entered is invalid');
            return redirect()->back()->withInput();
        }

        // MOVE NEW IMAGE
        $nameImage = $newImage->getRandomName();
        $newImage->move(ROOTPATH . 'public/uploads/report', $nameImage);

        // DELETE OLD IMAGE
        $filePath = ROOTPATH . 'public/uploads/report/' . $oldImage;
        unlink($filePath);

        $dataReport = [
            'image'         => $nameImage,
            'updated_at'    => Time::now()
        ];

        $this->ModelReports->update($id, $dataReport);
        session()->setFlashdata('success', 'You have successfully changed image a report');
        return redirect()->back();
    }

    public function delete(int $id)
    {
        $dataReport = $this->ModelReports->find($id);
        if ($dataReport) {
            $filePath = ROOTPATH . 'public/uploads/report/' . $dataReport['image'];
            unlink($filePath);
            $this->ModelReports->delete($id);
            session()->setFlashdata('success', 'Report data has been successfully deleted');
        } else {
            session()->setFlashdata('error', 'Report data failed to delete');
        }

        return redirect()->back();
    }
}
