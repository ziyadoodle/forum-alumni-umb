<?php

namespace App\Controllers;

use App\Models\UserModel as ModelsUserModel;
use Config\Database;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Password;

class Pages extends BaseController
{
    protected $db, $builder, $uri;

    public function __construct()
    {
        $this->db = Database::connect();
        $this->uri = service('uri');
        $this->builder = $this->db->table('users');
    }

    public function index()
    {
        $this->builder->selectCount('angkatan');
        $this->builder->where('angkatan', 2016);
        $a2016 = $this->builder->get();

        $this->builder->selectCount('angkatan');
        $this->builder->where('angkatan', 2017);
        $a2017 = $this->builder->get();

        $this->builder->selectCount('angkatan');
        $this->builder->where('angkatan', 2018);
        $a2018 = $this->builder->get();

        $this->builder->selectCount('angkatan');
        $this->builder->where('angkatan', 2019);
        $a2019 = $this->builder->get();

        $this->builder = $this->db->table('news');
        $this->builder->limit(4);
        $this->builder->orderBy('id', 'DESC');
        $berita = $this->builder->get();

        $data = [
            'title' => 'Home',
            'url' => $this->uri->getSegment(1),
            'a_2016' => $a2016->getRow(),
            'a_2017' => $a2017->getRow(),
            'a_2018' => $a2018->getRow(),
            'a_2019' => $a2019->getRow(),
            'berita' => $berita->getResultArray(),
        ];

        if (in_groups('admin')) {
            return redirect()->to(base_url('admin'));
        }

        echo view('pages/home', $data);
    }

    public function alumni()
    {
        $data['title'] = 'Cari Alumni';

        $this->builder->select('users.id as userid, email, username, fullname, angkatan');
        $this->builder->join('auth_groups_users as agu', 'agu.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = agu.group_id');
        $this->builder->where('angkatan is NOT NULL', NULL, FALSE);
        $query = $this->builder->get();

        $data['users'] = $query->getResultArray();
        $data['url'] = $this->uri->getSegment(1);

        echo view('pages/alumni', $data);
    }

    public function alumniDetail($id = 0)
    {
        $data['title'] = 'Detail Alumni';

        $this->builder->select('users.id as userid, email, username, fullname, angkatan, user_image');
        $this->builder->join('auth_groups_users as agu', 'agu.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = agu.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to(base_url('alumni'));
        }

        return view('pages/alumni_detail', $data);
    }

    public function berita()
    {
        $data['title'] = 'Berita Alumni';
        $data['url'] = $this->uri->getSegment(1);

        $this->builder = $this->db->table('news');
        $query = $this->builder->get();
        $data['berita'] = $query->getResultArray();

        return view('pages/berita', $data);
    }

    public function beritaDetail($id = 0)
    {
        $data['title'] = 'Detail Berita';

        $this->builder = $this->db->table('news');
        $this->builder->where('id', $id);
        $query = $this->builder->get();

        $data['berita'] = $query->getRowArray();

        if (empty($data['berita'])) {
            return redirect()->to(base_url('berita'));
        }

        return view('pages/berita_detail', $data);
    }

    public function donasi()
    {
        $data['title'] = 'Donasi';
        $data['url'] = $this->uri->getSegment(1);

        return view('pages/donasi', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profile';

        echo view('pages/profile', $data);
    }

    public function editProfile($id)
    {
        $data['title'] = 'Edit Profile';

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
        $this->builder->join('auth_groups_users as agu', 'agu.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = agu.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to(base_url('user'));
        }

        echo view('pages/edit_profile', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'user_image' => [
                'label' => 'Image File',
                'rules' => [
                    'is_image[user_image]',
                    'mime_in[user_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[user_image,1024]'
                ],
            ],
        ])) {
            return redirect()->to('profile/update' . $this->request->getVar('id'))->withInput();
        }

        $img = $this->request->getFile('user_image');
        $old_img = $this->request->getVar('old_image');

        if ($img->getError() == 4) {
            $namaImg = $old_img;
        } else {
            $namaImg = $img->getRandomName();
            $img->move('images/user_images', $namaImg);
            if ($old_img != 'default.svg') {
                unlink('images/user_images/' . $old_img);
            }
        }

        $user = new ModelsUserModel();
        $user->save([
            'id' => $id,
            'fullname' => $this->request->getVar('fullname'),
            'angkatan' => $this->request->getVar('angkatan'),
            'user_image' => $namaImg,
            // 'password_hash' => Password::hash($this->request->getVar('password'))
        ]);

        session()->setFlashdata('message', 'Data berhasil diubah.');

        return redirect()->to('/profile');
    }
}
