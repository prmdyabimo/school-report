<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUsers;

class Auth extends BaseController
{
    protected $ModelUsers;

    public function __construct()
    {
        $this->ModelUsers = new ModelUsers();
    }

    public function register()
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

    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $rules = [
            'email' => [
                'rules'     => 'required|valid_email',
                'errors'    => [
                    'required'      => 'Email is required',
                    'valid_email'   => 'Email is not valid'
                ]
            ],
            'password'  => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Password is required'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'The data you entered is invalid');
            return redirect()->back()->withInput();
        }

        $dataUser = $this->ModelUsers
            ->where('email', $email)
            ->first();

        if ($dataUser) {
            $pass = $dataUser['password'];
            $verifyPass = password_verify($password, $pass);
            if ($verifyPass) {
                $sesData = [
                    'id'    => $dataUser['id']
                ];
                session()->set($sesData);
                session()->setFlashdata('success', 'You have successfully logged in');
                return redirect()->to('/dashboard');
            } else {
                session()->setFlashdata('error', 'Wrong password');
            }
        } else {
            session()->setFlashdata('error', 'Email not registered');
        }
        return redirect()->back()->withInput();
    }

    public function logout(int $id)
    {
        session()->destroy($id);
        return redirect()->to('/');
    }
}
