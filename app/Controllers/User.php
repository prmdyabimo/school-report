<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCategorys;
use App\Models\ModelUsers;
use CodeIgniter\I18n\Time;

class User extends BaseController
{
    protected $ModelUsers;
    protected $ModelCategorys;

    public function __construct()
    {
        $this->ModelUsers = new ModelUsers();
        $this->ModelCategorys = new ModelCategorys();
    }

    public function index()
    {
        helper(['form']);

        $sesData = session()->get();
        $dataUser = $this->ModelUsers->find($sesData['id']);

        $data = [
            'title'     => 'Users School Report | SMK Negeri 17 Jakarta',
            'menu'      => 'Users',
            'data_user' => $dataUser,
            'users'     => $this->ModelUsers->getUser(),
        ];

        return view('pages/v_user', $data);
    }

    public function saveUser()
    {
        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $phone = $this->request->getVar('phone');
        $password = $this->request->getVar('password');

        $role = "USER";
        $image = "default.png";

        $rules = [
            'name'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Name is required'
                ]
            ],
            'email' => [
                'rules'     => 'required|valid_email|is_unique[users.email]',
                'errors'    => [
                    'required'      => 'Email is required',
                    'valid_email'   => 'Email is not valid',
                    'is_unique'     => 'Email already in use'
                ]
            ],
            'phone' => [
                'rules'     => 'required|numeric',
                'errors'    => [
                    'required'  => 'Phone is required',
                    'numeric'   => 'Phone must contain numbers'
                ]
            ],
            'password'  => [
                'rules'     => 'required|min_length[8]|regex_match[/^(?=.*[a-zA-Z])(?=.*\d)/]',
                'errors'    => [
                    'required'      => 'Password is required',
                    'min_length'    => 'Password minimum 8 characters',
                    'regex_match'   => 'Password must be a combination of numbers and letters'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'The data you entered is invalid');
            return redirect()->back()->withInput();
        }

        $dataUser = [
            'name'      => $name,
            'email'     => $email,
            'telephone' => $phone,
            'role'      => $role,
            'image'     => $image,
            'password'  => password_hash($password, PASSWORD_DEFAULT)
        ];

        $this->ModelUsers->register($dataUser);
        session()->setFlashdata('success', 'Your data has been successfully registered');
        return redirect()->back();
    }

    public function saveAdmin()
    {
        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $role = "ADMIN";
        $image = "default.png";

        $rules = [
            'name'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Name is required'
                ]
            ],
            'email' => [
                'rules'     => 'required|valid_email|is_unique[users.email]',
                'errors'    => [
                    'required'      => 'Email is required',
                    'valid_email'   => 'Email is not valid',
                    'is_unique'     => 'Email already in use'
                ]
            ],
            'password'  => [
                'rules'     => 'required|min_length[8]|regex_match[/^(?=.*[a-zA-Z])(?=.*\d)/]',
                'errors'    => [
                    'required'      => 'Password is required',
                    'min_length'    => 'Password minimum 8 characters',
                    'regex_match'   => 'Password must be a combination of numbers and letters'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'The data you entered is invalid');
            return redirect()->back()->withInput();
        }

        $dataAdmin = [
            'name'      => $name,
            'email'     => $email,
            'telephone' => null,
            'role'      => $role,
            'image'     => $image,
            'password'  => password_hash($password, PASSWORD_DEFAULT)
        ];

        $this->ModelUsers->register($dataAdmin);
        session()->setFlashdata('success', 'Your data has been successfully registered');
        return redirect()->back();
    }
    
    public function show(int $id)
    {
        helper(['form']);

        $sesData = session()->get();
        $dataUser = $this->ModelUsers->find($sesData['id']);

        $data = [
            'title'     => 'Users School Report | SMK Negeri 17 Jakarta',
            'menu'      => 'Users',
            'data_user' => $dataUser,
            'user'      => $this->ModelUsers->find($id)
        ];

        return view('pages/v_setting_user', $data);
    }

    public function edit(int $id)
    {
        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $phone = $this->request->getVar('phone');
        $password = $this->request->getVar('password');

        $rules = [
            'name'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Name is required'
                ]
            ],
            'email' => [
                'rules'     => 'required|valid_email',
                'errors'    => [
                    'required'      => 'Email is required',
                    'valid_email'   => 'Email is not valid',
                ]
            ],
            'phone' => [
                'rules'     => 'required|numeric',
                'errors'    => [
                    'required'  => 'Phone is required',
                    'numeric'   => 'Phone must contain numbers'
                ]
            ],
        ];

        $rulesPassword = [
            'password'  => [
                'rules'     => 'required|min_length[8]|regex_match[/^(?=.*[a-zA-Z])(?=.*\d)/]',
                'errors'    => [
                    'required'      => 'Password is required',
                    'min_length'    => 'Password minimum 8 characters',
                    'regex_match'   => 'Password must be a combination of numbers and letters'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'The data you entered is invalid');
            return redirect()->back()->withInput();
        }

        if ($password == "") {
            $dataUser = [
                'name'          => $name,
                'email'         => $email,
                'telephone'     => $phone,
                'updated_at'    => Time::now()
            ];
        } else {
            if (!$this->validate($rulesPassword)) {
                session()->setFlashdata('error', 'The password you entered is invalid');
                return redirect()->back()->withInput();
            }

            $dataUser = [
                'name'          => $name,
                'email'         => $email,
                'telephone'     => $phone,
                'password'      => password_hash($password, PASSWORD_DEFAULT),
                'updated_at'    => Time::now()
            ];
        }

        $this->ModelUsers->update($id, $dataUser);
        session()->setFlashdata('success', 'You have successfully changed a profile');
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
        $newImage->move(ROOTPATH . 'public/uploads/profile', $nameImage);

        // DELETE OLD IMAGE
        if ($oldImage !== "default.png") {
            $filePath = ROOTPATH . 'public/uploads/profile/' . $oldImage;
            unlink($filePath);
        }

        $dataUser = [
            'image'         => $nameImage,
            'updated_at'    => Time::now()
        ];

        $this->ModelUsers->update($id, $dataUser);
        session()->setFlashdata('success', 'You have successfully changed image a profile');
        return redirect()->back();
    }

    public function admin()
    {
        helper(['form']);

        $sesData = session()->get();
        $dataUser = $this->ModelUsers->find($sesData['id']);

        $data = [
            'title'     => 'Admin School Report | SMK Negeri 17 Jakarta',
            'menu'      => 'Admin',
            'data_user' => $dataUser,
            'users'     => $this->ModelUsers->getAdmin($dataUser['id']),
        ];

        return view('pages/v_admin', $data);
    }

    public function delete(int $id)
    {
        $dataUser = $this->ModelUsers->find($id);
        if ($dataUser) {
            if ($dataUser['image'] !== "default.png") {
                $filePath = ROOTPATH . 'public/uploads/profile/' . $dataUser['image'];
                unlink($filePath);
            }

            $this->ModelUsers->delete($id);
            session()->setFlashdata('success', 'User data has been successfully deleted');
        } else {
            session()->setFlashdata('error', 'User data failed to delete');
        }

        return redirect()->back();
    }
}
