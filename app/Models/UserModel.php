<?php

namespace App\Models;

use CodeIgniter\Model;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel as MythModel;

class UserModel extends Model
{
    protected $table          = 'users';
    // protected $primaryKey     = 'id';
    protected $useSoftDeletes = true;
    protected $allowedFields  = [
        'email', 'username', 'fullname', 'angkatan', 'user_image', 'password_hash'
    ];
    protected $useTimestamps   = true;

    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->select('users.id, email, username, fullname, angkatan, user_image, gs.group_id, g.name group_name')
                ->join('auth_groups_users gs', 'users.id = gs.user_id')
                ->join('auth_groups g', 'g.id = gs.group_id')
                ->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
