<?php

namespace App\Controllers;

use App\Models\UserModel;
use Config\Services;

class Auth extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Sign In | Forum Alumni UMB'
        ];

        echo view('auth/login', $data);
    }

    public function registration()
    {
        $data = [
            'title' => 'Sign Up | Forum Alumni UMB',
            'validation' => Services::validation()
        ];

        echo view('auth/registration', $data);
    }

    public function save()
    {
        if (!$this->validate(
            [
                'username' => 'required',
                'fullname' => 'required',
                'email' => 'required|trim|is_unique[user.email]|valid_emails',
                'angkatan' => 'is_natural_no_zero',
                'password1' => 'required|trim|min_length[5]|matches[password2]',
                'password2' => 'required|trim|matches[password1]',
            ],
            [
                'email' => [
                    'is_unique' => 'This email has already registered!'
                ],
                'angkatan' => [
                    'is_natural_no_zero' => 'Please select angkatan.'
                ],
                'password1' => [
                    'required' => 'Password field is required.',
                    'matches' => 'Password dont match!',
                    'min_length' => 'Password too short!'
                ]
            ]
        )) {
            $validation = Services::validation();
            return redirect()->to('/registration')->withInput()->with('validation', $validation);
        };

        $this->userModel->save([
            'username' => $this->request->getVar('username'),
            'full_name' => $this->request->getVar('fullname'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password1'), PASSWORD_DEFAULT),
            'angkatan' => $this->request->getVar('angkatan'),
            'role_id' => 2
        ]);

        session()->setFlashdata('message', 'Account Created Successfullly!');

        return redirect()->to('/registration');
    }
}
