<?php

namespace App\Controllers;

use Config\Database;

class Admin extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db = Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
    {
        $data['title'] = 'User List';

        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users as agu', 'agu.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = agu.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResultArray();

        return view('admin/index', $data);
    }

    public function detail($id = 0)
    {
        $data['title'] = 'User Detail';

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
        $this->builder->join('auth_groups_users as agu', 'agu.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = agu.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to(base_url('admin'));
        }

        return view('admin/detail', $data);
    }

    public function berita()
    {
        $data['title'] = 'Berita Alumni';

        $this->builder = $this->db->table('news');
        $query = $this->builder->get();
        $data['berita'] = $query->getResultArray();

        return view('admin/berita', $data);
    }

    public function beritaDetail($id = 0)
    {
        $data['title'] = 'Detail Berita';

        $this->builder = $this->db->table('news');
        $this->builder->where('id', $id);
        $query = $this->builder->get();

        $data['berita'] = $query->getRow();

        if (empty($data['berita'])) {
            return redirect()->to(base_url('berita'));
        }

        return view('admin/berita_detail', $data);
    }
}
