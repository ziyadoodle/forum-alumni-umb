<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'username',
        'full_name',
        'email',
        'image',
        'phone',
        'password',
        'angkatan',
        'role_id'
    ];
}
